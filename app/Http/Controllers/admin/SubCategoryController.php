<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Http\Requests\SubCategoryRequest;

class SubCategoryController extends Controller
{
    //

    public function index()
    {
        $categories = SubCategory::with(['mainCategory', 'parentSubCategory'])->active()->selection()->get();
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

            $Seller = SubCategory::create([
                'name' => $request->name,
                'maincategory_id' => $request->maincategory_id,
                'parent_id' => $request->parent_id,
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


    public function appendCategoryLevel(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            // echo '<pre>';
            // print_r($data);
            $categories = SubCategory::with('subcategories')->where(['maincategory_id' => $data['maincategory_id'], 'parent_id' => 0])->active()->get();
            $categories = json_decode(json_encode($categories), true);
            // echo '<pre>';
            // print_r($categories);
            return view('admin.subcategories.append_subcategories_level', compact('categories'));
        }
    }


    public function edit($subCat_id)
    {
        //
        $categories = SubCategory::with(['mainCategory', 'parentSubCategory'])->active()->selection();
        $category = SubCategory::Selection()->find($subCat_id);
        if (!$category)
            return redirect()->route('admin.subcategories')->with(['error' => 'هذا القسم غير موجود ']);

        return view('admin.maincategories.edit', compact('categories', 'category'));
    }
}
