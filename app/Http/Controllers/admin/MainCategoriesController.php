<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategoryRequest;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use DB;
use Illuminate\Support\Str;

class MainCategoriesController extends Controller
{
    public function index()
    {
        $default_lang = get_default_lang();
        $categories = MainCategory::where('translation_lang', $default_lang)
            ->selection()
            ->get();

        return view('admin.maincategories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.maincategories.create',);
    }


    public function store(MainCategoryRequest $request)
    {

        try {
            //return $request;

            $main_categories = collect($request->category);

            $filter = $main_categories->filter(function ($value, $key) {
                return $value['abbr'] == get_default_lang();
            });

            $default_category = array_values($filter->all())[0];


            $filePath = "";
            if ($request->has('photo')) {

                $filePath = uploadImage('mainCategories', $request->photo);
            }

            // DB::beginTransaction();

            $default_category_id = MainCategory::insertGetId([
                'translation_lang' => $default_category['abbr'],
                'translation_of' => 0,
                'libelle' => $default_category['libelle'],
                'slug' => $default_category['libelle'],
                'photo' => $filePath
            ]);

            $categories = $main_categories->filter(function ($value, $key) {
                return $value['abbr'] != get_default_lang();
            });


            if (isset($categories) && $categories->count()) {

                $categories_arr = [];
                foreach ($categories as $category) {
                    $categories_arr[] = [
                        'translation_lang' => $category['abbr'],
                        'translation_of' => $default_category_id,
                        'libelle' => $category['libelle'],
                        'slug' => $category['libelle'],
                        'photo' => $filePath
                    ];
                }

                MainCategory::insert($categories_arr);
            }

            DB::commit();

            return redirect()->route('admin.maincategories')->with(['success' => 'la cat??gorie est cre?? avec succ??ss']);
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.maincategories')->with(['error' => 'un prol??me est survenu veuillez repeter ult??rieurement']);
        }
    }


    public function edit($mainCat_id)
    {
        //get specific categories and its translations
        $mainCategory = MainCategory::with('categories')
            ->selection()
            ->find($mainCat_id);

        if (!$mainCategory)
            return redirect()->route('admin.maincategories')->with(['error' => "cette cat??gorie n'existe pas"]);

        return view('admin.maincategories.edit', compact('mainCategory'));
    }


    public function update($mainCat_id, MainCategoryRequest $request)
    {


        try {
            $main_category = MainCategory::find($mainCat_id);

            if (!$main_category)
                return redirect()->route('admin.maincategories')->with(['error' => "cette cat??gorie n'existe pas"]);

            // update date

            $category = array_values($request->category)[0];

            if (!$request->has('category.0.is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);


            MainCategory::where('id', $mainCat_id)
                ->update([
                    'libelle' => $category['libelle'],
                    'is_active' => $request->is_active,
                ]);

            // save image

            if ($request->has('photo')) {
                $filePath = uploadImage('mainCategories', $request->photo);
                MainCategory::where('id', $mainCat_id)
                    ->update([
                        'photo' => $filePath,
                    ]);
            }


            return redirect()->route('admin.maincategories')->with(['success' => 'la cot??gorie est modifi?? avec succ??ss']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.maincategories')->with(['error' => 'un prol??me est survenu veuillez repeter ult??rieurement']);
        }
    }


    public function destroy($id)
    {

        try {
            $maincategory = MainCategory::find($id);
            if (!$maincategory)
                return redirect()->route('admin.maincategories')->with(['error' => "cette cat??gorie n'existe pas "]);

            $sellers = $maincategory->sellers();
            if (isset($sellers) && $sellers->count() > 0) {
                return redirect()->route('admin.maincategories')->with(['error' => 'cette cat??gorie contient des vendeurs']);
            }

            $image = Str::after($maincategory->photo, 'public/assets/');
            $image = base_path('public/assets/' . $image);
            unlink($image); //delete from folder
            $maincategory->categories()->delete();
            $maincategory->delete();
            return redirect()->route('admin.maincategories')->with(['success' => "cette cat??gorie est supprim?? avec succ??ess"]);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.maincategories')->with(['error' => 'un prol??me est survenu veuillez repeter ult??rieurement']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $maincategory = MainCategory::find($id);
            if (!$maincategory)
                return redirect()->route('admin.maincategories')->with(['error' => "cette cat??gorie n'existe pas "]);

            $status =  $maincategory->is_active  == 0 ? 1 : 0;

            $maincategory->update(['is_active' => $status]);

            return redirect()->route('admin.maincategories')->with(['success' => ' le status du cat??gorie est changer avec succ??ss ']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.maincategories')->with(['error' => 'un prol??me est survenu veuillez repeter ult??rieurement']);
        }
    }
}
