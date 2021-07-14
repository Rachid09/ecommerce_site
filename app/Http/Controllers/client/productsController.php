<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductsImage;
use App\Models\MainCategory;

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
        return view('client.AllProducts', compact('products', 'categories', 'totalProducts', 'title', 'navbarTitle', 'latest_products'));
    }

    public function categoryProducts($name, $id)
    {
        $categories = MainCategory::selection()->active()->get();
        $totalProducts = Product::where(['maincategory_id' => $id])->selection()->active()->count();
        $products = Product::where(['maincategory_id' => $id])->selection()->active()->get();
        $latest_products = Product::orderBy('id', 'Desc')->limit(4)->active()->selection()->get();
        $title = $name;
        $navbarTitle = $name;
        return view('client.AllProducts', compact('products', 'categories', 'totalProducts', 'title', 'navbarTitle', 'latest_products'));
    }
    public function productDetails($name, $id)
    {
        $categories = MainCategory::selection()->active()->get();
        $totalProducts = Product::where(['maincategory_id' => $id])->selection()->active()->count();
        $products = Product::where(['maincategory_id' => $id])->selection()->active()->get();
        $latest_products = Product::orderBy('id', 'Desc')->limit(4)->active()->selection()->get();
        $title = $name;
        $navbarTitle = $name;
        return view('client.AllProducts', compact('products', 'categories', 'totalProducts', 'title', 'navbarTitle', 'latest_products'));
    }
}
