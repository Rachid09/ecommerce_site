<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
use Session;
use App\Models\MainCategory;

class CartController extends Controller
{

    public function index()
    {
        // dd(Cart::content());
        $categories = MainCategory::selection()->active()->get();

        $title = "Panier";
        return view('client.cart', compact('title', 'categories'));
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

        return redirect()->back()->with(['success' => 'le produit a bien été ajouter au panier']);
    }




    public function update(Request $request, $rowId)
    {
        $data = $request->all();

        // $validates = Validator::make($request->all(), [
        //     'qty' => 'numeric|required|between:1,5',
        // ]);

        // if ($validates->fails()) {
        //     Session::flash('error', 'La quantité doit est comprise entre 1 et 5.');
        //     return response()->json(['error' => 'Cart Quantity Has Not Been Updated']);
        // }
        // dd($data);
        // die;

        Cart::update($rowId, $data['qty']);
        $cartInstance = Cart::get($rowId);
        $price = $cartInstance->price;
        $subtotal = Cart::subtotal();
        $total = Cart::total();
        $tax = Cart::tax();
        $items_count = Cart::content()->count();
        $qty = $cartInstance->qty;

        // Session::flash('success', 'La quantité du produit est passée à ' . $data['qty'] . '.');
        return response()->json(['success' => 'votre quantité est mise a jour', 'price' => $price, 'subtotal' => $subtotal, 'total' => $total, 'tax' => $tax, 'qty' => $qty, 'items_count' => $items_count]);
    }


    public function destroy($rowId)

    {
        // dd(Cart::content());
        Cart::remove($rowId);

        return back()->with('success', 'Le produit a été supprimé.');
    }
}
