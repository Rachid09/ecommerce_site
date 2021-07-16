<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Cart;

class CheckoutController extends Controller
{
    //


    public function index()
    {

        Stripe::setApiKey('sk_test_4eC39HqLyjWDarjtT1zdp7dc');
        $intent = PaymentIntent::create([
            'amount' => round(Cart::total()),
            'currency' => 'eur',
        ]);
        // dd($intent);

        $clientSecret = Arr::get($intent, 'client_secret');

        return view('client.checkout', [
            'clientSecret' => $clientSecret,
            'title' => 'Paiement'
        ]);
    }
}
