<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{

    public function index()
    {
    }

    public function store(Request $request)
    {


        // dd(Cart::content());
        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {

            return $cartItem->id == $request->product_id;
        });

        if ($duplicata->isNotEmpty()) {

            return redirect()->back()->with(['error' => 'le produit a été déja ajouté.']);
        }
        $product = Product::find($request->product_id);

        Cart::add($product->id, $product->name, 1, $product->price)->associate('App\Models\Product');

        return redirect()->back()->with(['success' => 'le produit a bien été ajouté.']);
    }
}
