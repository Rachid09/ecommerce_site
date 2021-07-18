<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\Product;

class HomeController extends Controller
{
    //

    public function index()
    {
        $default_lang = get_default_lang();
        $categories = MainCategory::where('translation_lang', $default_lang)
            ->selection()->active()->get();
        $categoriesArray = json_decode(json_encode($categories));
        $maincategories = array_slice($categoriesArray, 0, 4);
        $products_featured = Product::with(['seller', 'maincategory'])->active()->IsFeatured()->selection()->get();
        $featured = json_decode(json_encode($products_featured));

        $latest_products = Product::orderBy('id', 'Desc')->limit(5)->active()->selection()->get();
        $latest_prod = json_decode(json_encode($latest_products));
        // echo '<pre>';
        // print_r($latest_prod);
        // die;
        return view('client.home', compact('categories', 'maincategories', 'categoriesArray', 'featured', 'latest_prod'));
    }
}
