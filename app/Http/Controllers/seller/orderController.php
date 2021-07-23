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

        // $ordersDetails = Order::with('products')->where('id', $id)->get()->toArray();
        // echo '<pre>';
        // print_r($orders);
        // die;

        return view('seller.orders.index', compact('orders'));
    }

    // public function show($id)
    // {
    //     $ordersDetails = Order::with('products')->where('id', $id)->get()->toArray();
    //     echo '<pre>';
    //     print_r($ordersDetails);
    //     die;
    //     return view('seller.orders.index', compact('ordersDetails'));
    // }
}
