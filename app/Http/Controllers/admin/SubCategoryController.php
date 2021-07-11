<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Http\Requests\SubCategoryRequest;
use DB;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    //

    public function index()
    {
        $categories = SubCategory::with(['mainCategory'])->selection()->get();

        // $categories = json_decode(json_encode($categories));
        // echo '<pre>';
        // print_r($categories);
        // die;


        return view('admin.subcategories.index', compact('categories'));
    }


    public function create()
    {
        $categories = MainCategory::where('translation_of', 0)->active()->get();
        return view('admin.subcategories.create', compact('categories'));
    }






    public function store(SubCategoryRequest $request)
    {
        try {

            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $filePath = "";
            if ($request->has('photo')) {
                $filePath = uploadImage('subcategories', $request->photo);
            }

            SubCategory::create([
                'name' => $request->name,
                'maincategory_id' => $request->maincategory_id,
                'description' => $request->description,
                'status' => $request->status,
                'photo' => $filePath,

            ]);

            // $Seller->maincategory()->attach($request->categories);




            return redirect()->route('admin.subcategories')->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.subcategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }




    public function edit($subCat_id)
    {
        //

        $maincategories = MainCategory::where('translation_of', 0)->active()->get();
        // $sub_categories = json_decode(json_encode($categories));
        // echo '<pre>';
        // print_r($sub_categories);
        // die;
        $category = SubCategory::Selection()->find($subCat_id);
        // $subcategories = SubCategory::where(['maincategory_id' => $subCat_id, 'parent_id' => 0])->active();
        // $sub_category = json_decode(json_encode($category));
        // echo '<pre>';
        // print_r($sub_category);
        // die;
        if (!$category)
            return redirect()->route('admin.subcategories')->with(['error' => 'هذا القسم غير موجود ']);

        return view('admin.subcategories.edit', compact('maincategories', 'category'));
    }


    public function update($subCat_id, SubCategoryRequest $request)
    {
        // return $request;

        try {
            $sub_category = SubCategory::find($subCat_id);

            if (!$sub_category)
                return redirect()->route('admin.subcategories')->with(['error' => 'هذا القسم غير موجود ']);
            DB::beginTransaction();


            // save image

            if ($request->has('photo')) {
                $filePath = uploadImage('subcategories', $request->photo);
                SubCategory::where('id', $subCat_id)
                    ->update([
                        'photo' => $filePath,
                    ]);
            }


            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);


            //get request data
            $data = $request->except('_token', 'id', 'photo', 'parent_id');


            // update date
            SubCategory::where('id', $subCat_id)
                ->update([
                    'name' => $data['name'],
                    'maincategory_id' => $data['maincategory_id'],
                    'description' => $data['description'],
                    'status' => $data['status'],
                ]);



            DB::commit();
            return redirect()->route('admin.subcategories')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {

            DB::rollback();
            return $ex;
            return redirect()->route('admin.subcategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
    public function destroy($id)
    {

        try {
            $sub_cat = SubCategory::find($id);
            if (!$sub_cat)
                return redirect()->route('admin.subcategories')->with(['error' => 'هذا التاجر غير موجود ']);
            $image = Str::after($sub_cat->photo, 'public/assets/');
            $image = base_path('public/assets/' . $image);
            unlink($image); //delete from folder
            // $maincategory->categories()->delete();
            $sub_cat->delete();
            return redirect()->route('admin.subcategories')->with(['success' => 'la catégorie a ete supprimé avec succèss   ']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.subcategories')->with(['error' => 'un problème est survenu ']);
        }
    }


    public function changeStatus($id)
    {
        try {
            $sub_cat = SubCategory::find($id);
            if (!$sub_cat)
                return redirect()->route('admin.subcategories')->with(['error' => "la sous categories n'existe pas"]);
            $status =  $sub_cat->status  == 0 ? 1 : 0;
            // echo '<pre>';
            // print_r($status);
            // die;
            $sub_cat->update(['status' => $status]);
            return redirect()->route('admin.subcategories')->with(['success' => "l'etat de la sous catégories est changé avec succéss"]);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.subcategories')->with(['error' => 'un problème est survenu']);
        }
    }
}
