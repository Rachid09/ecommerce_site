<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Seller;
use App\Models\Product;
use Illuminate\Support\Str;
use DB;
use Auth;

class ProductController extends Controller
{
    //show products list

    public function index()
    {
        $id = Auth::user()->id;
        $maincategories = Seller::find($id)->maincategory()->orderBy('libelle')->get();
        $products = Product::with(['seller', 'maincategory'])->selection()->get();
        return view('seller.stock.index', compact('products'));
    }

    public function create()
    {
        $id = Auth::user()->id;



        $maincategories = Seller::find($id)->maincategory()->orderBy('libelle')->get();
        $categories = json_decode(json_encode($maincategories));

        // echo '<pre>';
        // print_r($maincategories);
        // die;

        $colors = array('rouge', 'vert', 'blanc', 'jaune', 'marron', 'noir');
        return view('seller.stock.create')->with(compact('categories', 'colors'));
    }

    public function store(ProductRequest $request)
    {
        // return $request;


        try {
            $filePath = "";
            if ($request->has('main_image')) {
                $filePath = uploadImage('products', $request->main_image);
            }

            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);




            $Product = Product::create([
                'maincategory_id' => $request->maincategory_id,
                'seller_id' => $request->seller_id,
                'name' => $request->name,
                'code' => $request->code,
                'color' => $request->color,
                'price' => $request->price,
                'discount' => $request->discount,
                'stock' => $request->quantite,
                'description' => $request->description,
                'main_image' =>  $filePath,
                'status' => $request->status,
            ]);


            return redirect()->route('seller.stock.products')->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('seller.stock.products')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function edit($id)
    {
        try {
            $seller_id = Auth::user()->id;

            $product = Product::Selection()->find($id);
            // echo '<pre>';
            // print_r($product);
            // die;
            if (!$product)
                return redirect()->route('seller.stock.products')->with(['error' => "ce produit n'existe pas"]);

            // $categories = MainCategory::where('translation_of', 0)->active()->get();
            $maincategories = Seller::find($seller_id)->maincategory()->orderBy('libelle')->get();
            $categories = json_decode(json_encode($maincategories));
            $colors = array('rouge', 'vert', 'blanc', 'jaune', 'marron', 'noir');

            return view('seller.stock.edit', compact('product', 'categories', 'colors'));
        } catch (\Exception $exception) {
            return $exception;
            return redirect()->route('seller.stock.products')->with(['error' => 'un probleme est survenu']);
        }
    }



    public function update($id, ProductRequest $request)
    {
        // return $request;

        try {
            $product = Product::find($id);

            if (!$product)
                return redirect()->route('seller.stock.products')->with(['error' => 'هذا القسم غير موجود ']);
            DB::beginTransaction();


            // save image
            $filePath = '';
            if ($request->has('main_image')) {
                $filePath = uploadImage('products', $request->main_image);
                Product::where('id', $id)
                    ->update([
                        'main_image' => $filePath,
                    ]);
            }


            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);


            //get request data
            // $data = $request->except('_token', 'id', 'main_image');


            // update date
            Product::where('id', $id)
                ->update([
                    'maincategory_id' => $request->maincategory_id,
                    'seller_id' => $request->seller_id,
                    'name' => $request->name,
                    'code' => $request->code,
                    'color' => $request->color,
                    'price' => $request->price,
                    'discount' => $request->discount,
                    'stock' => $request->quantite,
                    'description' => $request->description,
                    'status' => $request->status,
                ]);



            DB::commit();
            return redirect()->route('seller.stock.products')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {

            DB::rollback();
            return $ex;
            return redirect()->route('seller.stock.products')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function destroy($id)
    {

        try {
            $product = Product::find($id);
            if (!$product)
                return redirect()->route('seller.stock.products')->with(['error' => 'هذا التاجر غير موجود ']);

            // $Sellers = $Seller->Sellers();
            // if (isset($Sellers) && $Sellers->count() > 0) {
            //     return redirect()->route('admin.maincategories')->with(['error' => 'لأ يمكن حذف هذا القسم  ']);
            // }

            $image = Str::after($product->main_image, 'public/assets/');
            $image = base_path('public/assets/' . $image);
            unlink($image); //delete from folder
            // $maincategory->categories()->delete();
            $product->delete();
            return redirect()->route('seller.stock.products')->with(['success' => 'تم حذف التاجر بنجاح']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('seller.stock.products')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $product = Product::find($id);
            if (!$product)
                return redirect()->route('seller.stock.products')->with(['error' => 'هذا التاجر غير موجود ']);

            $status =  $product->status  == 0 ? 1 : 0;

            $product->update(['status' => $status]);

            return redirect()->route('seller.stock.products')->with(['success' => ' تم تغيير الحالة بنجاح ']);
        } catch (\Exception $ex) {
            return redirect()->route('seller.stock.products')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function getFormAddImages($id)
    {

        $product = Product::with(['productImages'])->where(['id' => $id])->get();
        $productArray = json_decode(json_encode($product));

        // echo '<pre>';
        // print_r($productArray);
        // die;

        return view('seller.stock.addImages')->with(compact('productArray'));
    }
}
