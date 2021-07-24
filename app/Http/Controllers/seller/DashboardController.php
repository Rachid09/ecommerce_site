<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;
use Auth;
use App\Models\Order;

class DashboardController extends Controller
{

    public function index()
    {
        $id = Auth::user()->id;
        $orders = Order::with('products')->whereHas('products', function ($q) {
            $q->where('seller_id', Auth::user()->id);
        })->get()->toArray();
        $ordersTotal = Order::with('products')->whereHas('products', function ($q) {
            $q->where('seller_id', Auth::user()->id);
        })->count();
        $maincategories = Seller::find($id)->maincategory()->orderBy('libelle')->get();
        $totalProducts = Product::with(['seller', 'maincategory'])->where(['seller_id' => $id])->count();
        return view('seller.dashboard', compact('totalProducts', 'orders', 'ordersTotal'));
    }
}
