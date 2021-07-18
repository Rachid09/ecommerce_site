<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;
use Auth;

class DashboardController extends Controller
{

    public function index()
    {   
        $id = Auth::user()->id;
        // print_r($id);
        // die;
        $maincategories = Seller::find($id)->maincategory()->orderBy('libelle')->get();
        $totalProducts = Product::with(['seller', 'maincategory'])->where(['seller_id' => $id])->count();
        return view('seller.dashboard',compact('totalProducts'));
    }
}
