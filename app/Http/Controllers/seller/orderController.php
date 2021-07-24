<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Order;

class orderController extends Controller
{
    //


    public function index()
    {

        $orders = Order::with('products')->whereHas('products', function ($q) {
            $q->where('seller_id', Auth::user()->id);
        })->get()->toArray();

        return view('seller.orders.index', compact('orders'));
    }
}
