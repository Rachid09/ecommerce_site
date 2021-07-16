<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
use Session;

class CartController extends Controller
{

    public function index()
    {
        // dd(Cart::content());

        $title = "Shopping Cart";
        return view('client.cart', compact('title'));
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




    public function update(Request $request, $rowId)
    {
        $data = $request->json()->all();

        // $validates = Validator::make($request->all(), [
        //     'qty' => 'numeric|required|between:1,5',
        // ]);

        // if ($validates->fails()) {
        //     Session::flash('error', 'La quantité doit est comprise entre 1 et 5.');
        //     return response()->json(['error' => 'Cart Quantity Has Not Been Updated']);
        // }

        Cart::update($rowId, $data['qty']);

        Session::flash('success', 'La quantité du produit est passée à ' . $data['qty'] . '.');
        return response()->json(['success' => 'Cart Quantity Has Been Updated']);
    }


    public function destroy($rowId)

    {
        // dd(Cart::content());
        Cart::remove($rowId);

        return back()->with('success', 'Le produit a été supprimé.');
    }
}
