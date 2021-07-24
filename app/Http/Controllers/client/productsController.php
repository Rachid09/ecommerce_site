<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductsImage;
use App\Models\MainCategory;
use Cart;
use App\Models\Recommends;
use Auth;

class productsController extends Controller
{
    //

    public function index()
    {

        $categories = MainCategory::selection()->active()->get();
        $totalProducts = Product::selection()->active()->count();
        $products = Product::selection()->active()->get();
        $title = 'Tous les produits';
        $navbarTitle = "Tous les categories";
        $latest_products = Product::orderBy('id', 'Desc')->limit(4)->active()->selection()->get();
        $recommended_products = '';
        if (Auth::guard('web')->check()) {

            $recommended_products = Recommends::with('product')->where('user_id', Auth::guard('web')->user()->id)->get()->toArray();
        }


        return view('client.AllProducts', compact('products', 'categories', 'totalProducts', 'title', 'navbarTitle', 'latest_products', 'recommended_products'));
    }

    public function categoryProducts($name, $id)
    {
        $categories = MainCategory::selection()->active()->get();
        $totalProducts = Product::where(['maincategory_id' => $id])->selection()->active()->count();
        $products = Product::where(['maincategory_id' => $id])->selection()->active()->get();
        $latest_products = Product::orderBy('id', 'Desc')->limit(4)->active()->selection()->get();
        $title = $name;
        $navbarTitle = $name;
        $recommended_products = '';
        if (Auth::guard('web')->check()) {

            $recommended_products = Recommends::with('product')->where('user_id', Auth::guard('web')->user()->id)->get()->toArray();
        }





        return view('client.AllProducts', compact('products', 'categories', 'totalProducts', 'title', 'navbarTitle', 'latest_products', 'recommended_products'));
    }
    public function productDetails($name, $id)

    {

        $categories = MainCategory::selection()->active()->get();
        $categoryId = Product::where(['id' => $id])->CategoryIdSelection()->first()->toArray();
        $cat_id = $categoryId['maincategory_id'];
        $related_products = Product::where(['maincategory_id' => $cat_id])->selection()->active()->get()->toArray();
        $product = Product::with(['maincategory', 'productImages', 'colors'])->where(['id' => $id])->selection()->first()->toArray();

        $title = $name;

        if (Auth::check())
            $recommend_product = Recommends::create([
                'user_id' => Auth::guard('web')->user()->id,
                'product_id' => $id
            ]);




        return view('client.productDetails', compact('product', 'related_products', 'title', 'categories'));
    }
}
