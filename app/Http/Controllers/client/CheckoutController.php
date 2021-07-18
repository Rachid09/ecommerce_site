<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Cart;
use App\Models\MainCategory;

class CheckoutController extends Controller
{
    //


    public function index()
    {

        // Stripe::setApiKey('sk_test_4eC39HqLyjWDarjtT1zdp7dc');
        // $intent = PaymentIntent::create([
        //     'amount' => Cart::total(),
        //     'currency' => 'eur',
        // ]);
        // dd($intent);

        // $clientSecret = Arr::get($intent, 'client_secret');
        // $cartInstance = Cart::get($rowId);
        // $price = $cartInstance->price;
        // $subtotal = $cartInstance->subtotal();
        // $total = $cartInstance->total();
        // $tax = $cartInstance->tax();
        // $items_count = Cart::content()->count();
        // $qty = $cartInstance->qty;
        $categories = MainCategory::selection()->active()->get();

        $title = 'Paiement';

        return view('client.checkout', compact('title', 'categories'));
    }
}
