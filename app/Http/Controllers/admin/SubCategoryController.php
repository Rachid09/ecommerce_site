<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    //

    public function index()
    {
        $categories = SubCategory::selection()->paginate(PAGINATION_COUNT);
        return view('admin.subcategories.index', compact('categories'));
    }


    public function create()
    {
        $categories = MainCategory::where('translation_of', 0)->active()->get();
        return view('admin.subcategories.create', compact('categories'));
    }






    // public function store(MainCategoryRequest $request)
    // {

    //     try {
    //         //return $request;

    //         $main_categories = collect($request->category);

    //         $filter = $main_categories->filter(function ($value, $key) {
    //             return $value['abbr'] == get_default_lang();
    //         });

    //         $default_category = array_values($filter->all())[0];


    //         $filePath = "";
    //         if ($request->has('photo')) {

    //             $filePath = uploadImage('mainCategories', $request->photo);
    //         }

    //         // DB::beginTransaction();

    //         $default_category_id = MainCategory::insertGetId([
    //             'translation_lang' => $default_category['abbr'],
    //             'translation_of' => 0,
    //             'libelle' => $default_category['libelle'],
    //             'slug' => $default_category['libelle'],
    //             'photo' => $filePath
    //         ]);

    //         $categories = $main_categories->filter(function ($value, $key) {
    //             return $value['abbr'] != get_default_lang();
    //         });


    //         if (isset($categories) && $categories->count()) {

    //             $categories_arr = [];
    //             foreach ($categories as $category) {
    //                 $categories_arr[] = [
    //                     'translation_lang' => $category['abbr'],
    //                     'translation_of' => $default_category_id,
    //                     'libelle' => $category['libelle'],
    //                     'slug' => $category['libelle'],
    //                     'photo' => $filePath
    //                 ];
    //             }

    //             MainCategory::insert($categories_arr);
    //         }

    //         DB::commit();

    //         return redirect()->route('admin.maincategories')->with(['success' => 'تم الحفظ بنجاح']);
    //     } catch (\Exception $ex) {
    //         DB::rollback();
    //         return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    //     }
    // }
}
