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

        $orders = Order::whereHas('products', function ($q) {
            $q->where('seller_id', Auth::user()->id);
        })->get()->toArray();
        echo '<pre>';
        print_r($orders);
        die;

        return view('seller.orders.index', compact('orders'));
    }
}
