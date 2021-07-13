<?php

namespace App\Http\Controllers;

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
            ->selection()
            ->get();
        $categoriesArray = json_decode(json_encode($categories));
        $maincategories = array_slice($categoriesArray, 0, 4);
        $products_featured = Product::with(['seller', 'maincategory'])->active()->IsFeatured()->selection()->get();
        $featured = json_decode(json_encode($products_featured));
        return view('client.home', compact('maincategories', 'categoriesArray', 'featured'));
    }
}
