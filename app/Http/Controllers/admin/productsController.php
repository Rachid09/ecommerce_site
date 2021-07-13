<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    //show products list

    public function index()
    {
        // $maincategories = Seller::find($id)->maincategory()->orderBy('libelle')->get();
        $products = Product::with(['seller', 'maincategory'])->selection()->get();
        // $product_array = json_decode(json_encode($products));
        // echo '<pre>';
        // print_r($product_array);
        // die;
        return view('admin.products.index', compact('products'));
    }
    public function destroy($id)
    {

        try {
            $product = Product::find($id);
            if (!$product)
                return redirect()->route('admin.products')->with(['error' => 'هذا التاجر غير موجود ']);

            // $Sellers = $Seller->Sellers();
            // if (isset($Sellers) && $Sellers->count() > 0) {
            //     return redirect()->route('admin.maincategories')->with(['error' => 'لأ يمكن حذف هذا القسم  ']);
            // }

            $image = Str::after($product->main_image, 'public/assets/');
            $image = base_path('public/assets/' . $image);
            unlink($image); //delete from folder
            // $maincategory->categories()->delete();
            $product->delete();
            return redirect()->route('admin.products')->with(['success' => 'تم حذف التاجر بنجاح']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.products')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $product = Product::find($id);
            if (!$product)
                return redirect()->route('admin.products')->with(['error' => 'هذا التاجر غير موجود ']);

            $status =  $product->status  == 0 ? 1 : 0;

            $product->update(['status' => $status]);

            return redirect()->route('admin.products')->with(['success' => ' تم تغيير الحالة بنجاح ']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.products')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function changeFeatured($id)
    {
        try {
            $product = Product::find($id);
            if (!$product)
                return redirect()->route('admin.products')->with(['error' => 'هذا التاجر غير موجود ']);

            $is_featured =  $product->is_featured  == 'No' ? 'Yes' : 'No';

            $product->update(['is_featured' => $is_featured]);

            return redirect()->route('admin.products')->with(['success' => ' تم تغيير الحالة بنجاح ']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.products')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
