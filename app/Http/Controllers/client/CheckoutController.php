<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Cart;
use App\Models\MainCategory;
use App\Http\Requests\CheckoutRequest;
use App\Models\Order;
use App\Models\OrderProduct;
use DB;


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


    public function checkout(CheckoutRequest $request)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();
            $payment_gateway = '';
            if ($request->isMethod('post')) {
                $data = $request->all();
                if (!empty($data['payment_method'] == 'cod')) {
                    $paymend_gateway = 'cod';
                } else {
                    $paymend_gateway = 'paypal';
                }
            }

            $cart_items = Cart::Content();

            $user_name = $request->first_name . " " . $request->last_name;

            $order = Order::create([
                'user_id' => null,
                'user_name' => $user_name,
                'address' => $request->address,
                'city' => $request->city,
                'country' => $request->country,
                'phone' => $request->phone,
                'email' => $request->email,
                'order_status' => "New",
                'payment_method' => $request->payment_method,
                'payment_gateway' => $paymend_gateway,
                'grand_total' => Cart::total()

            ]);

            $order_id = DB::getPdo()->lastInsertId();

            foreach ($cart_items as $key => $item) {
                # code...
                $order = OrderProduct::create([

                    'order_id' => $order_id,
                    'product_id' => $item->id,
                    'product_qty' => $item->qty,
                    'price' => $item->total(),
                    'delivered_at' => 'New',

                ]);
            }
            if ($order) {
                Cart::destroy();
            }
            DB::commit();


            return redirect()->route('order.thanksPage');
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('chcekout')->with(['error' => 'un prolème est survenu veuillez repeter ultérieurement']);
        }
    }



    public function orderThanks()
    {
        $categories = MainCategory::selection()->active()->get();
        return view('client.thanksPage', compact('categories'));
    }
}
