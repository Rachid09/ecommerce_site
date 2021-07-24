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

        $products = Product::with(['seller', 'maincategory'])->selection()->get();

        return view('admin.products.index', compact('products'));
    }
    public function destroy($id)
    {

        try {
            $product = Product::find($id);
            if (!$product)
                return redirect()->route('admin.products')->with(['error' => "Ce produit n'existe pas"]);



            $image = Str::after($product->main_image, 'public/assets/');
            $image = base_path('public/assets/' . $image);
            unlink($image); //delete from folder

            $product->delete();
            return redirect()->route('admin.products')->with(['success' => 'Ce produit a bien été supprimer']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.products')->with(['error' => 'un prolème est survenu veuillez repeter ultérieurement']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $product = Product::find($id);
            if (!$product)
                return redirect()->route('admin.products')->with(['error' => "Ce produit n'existe pas "]);

            $status =  $product->status  == 0 ? 1 : 0;

            $product->update(['status' => $status]);

            return redirect()->route('admin.products')->with(['success' => 'le status de ce produit a bien changer']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.products')->with(['error' => 'un prolème est survenu veuillez repeter ultérieurement']);
        }
    }


    public function changeFeatured($id)
    {
        try {
            $product = Product::find($id);
            if (!$product)
                return redirect()->route('admin.products')->with(['error' => "Ce produit n'existe pas "]);

            $is_featured =  $product->is_featured  == 'No' ? 'Yes' : 'No';

            $product->update(['is_featured' => $is_featured]);

            return redirect()->route('admin.products')->with(['success' => ' le status de ce produit a bien changer ']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.products')->with(['error' => 'un prolème est survenu veuillez repeter ultérieurement']);
        }
    }
}
