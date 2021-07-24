<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Seller;
use App\Models\Product;
use Illuminate\Support\Str;
use DB;
use Auth;

class StoreController extends Controller
{
    //show products list

    public function index()
    {
        $id = Auth::user()->id;
        $maincategories = Seller::find($id)->maincategory()->orderBy('libelle')->get();
        $products = Product::with(['seller', 'maincategory'])->where(['seller_id' => $id])->selection()->active()->get();
        return view('seller.store.index', compact('products'));
    }

    public function edit($id)
    {
        try {
            $seller_id = Auth::user()->id;

            $product = Product::Selection()->find($id);

            if (!$product)
                return redirect()->route('seller.store.products')->with(['error' => "ce produit n'existe pas"]);


            $maincategories = Seller::find($seller_id)->maincategory()->orderBy('libelle')->get();
            $categories = json_decode(json_encode($maincategories));
            $colors = array('rouge', 'vert', 'blanc', 'jaune', 'marron', 'noir');

            return view('seller.store.edit', compact('product', 'categories', 'colors'));
        } catch (\Exception $exception) {
            return $exception;
            return redirect()->route('seller.store.products')->with(['error' => 'un probleme est survenu']);
        }
    }



    public function update($id, ProductRequest $request)
    {


        try {
            $product = Product::find($id);

            if (!$product)
                return redirect()->route('seller.store.products')->with(['error' => "Ce produit n'exite pas "]);
            DB::beginTransaction();


            // save image
            $filePath = '';
            if ($request->has('main_image')) {
                $filePath = uploadImage('products', $request->main_image);
                Product::where('id', $id)
                    ->update([
                        'main_image' => $filePath,
                    ]);
            }


            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);





            // update date
            Product::where('id', $id)
                ->update([
                    'maincategory_id' => $request->maincategory_id,
                    'seller_id' => $request->seller_id,
                    'name' => $request->name,
                    'code' => $request->code,
                    'color' => $request->color,
                    'price' => $request->price,
                    'discount' => $request->discount,
                    'stock' => $request->quantite,
                    'description' => $request->description,
                    'status' => $request->status,
                ]);



            DB::commit();
            return redirect()->route('seller.store.products')->with(['success' => 'Ce produit a bien été modifier']);
        } catch (\Exception $ex) {

            DB::rollback();
            return $ex;
            return redirect()->route('seller.store.products')->with(['error' => 'un prolème est survenu veuillez repeter ultérieurement']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $product = Product::find($id);
            if (!$product)
                return redirect()->route('seller.store.products')->with(['error' => "ce produit n'existe pas "]);

            $status =  $product->status  == 0 ? 1 : 0;

            $product->update(['status' => $status]);

            return redirect()->route('seller.store.products')->with(['success' => "Ce produit a bien été supprimer du boutique "]);
        } catch (\Exception $ex) {
            return redirect()->route('seller.store.products')->with(['error' => "un prolème est survenu veuillez repeter ultérieurement"]);
        }
    }
}
