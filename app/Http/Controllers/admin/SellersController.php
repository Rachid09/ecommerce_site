<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SellerRequest;
use App\Models\MainCategory;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SellerCreated;
use DB;
use Illuminate\Support\Str;


class SellersController extends Controller
{


    public function index()
    {
        $sellers = Seller::selection()->paginate(PAGINATION_COUNT);
        return view('admin.sellers.index', compact('sellers'));
    }

    public function create()
    {
        $categories = MainCategory::where('translation_of', 0)->active()->get();
        return view('admin.Sellers.create', compact('categories'));
    }

    public function store(SellerRequest $request)
    {

        try {

            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            $filePath = "";
            if ($request->has('logo')) {
                $filePath = uploadImage('sellers', $request->logo);
            }

            $Seller = Seller::create([
                'full_name' => $request->full_name,
                'store_name' => $request->store_name,
                'cop_name' => $request->cop_name,
                'mobile' => $request->mobile,
                'address' => $request->address,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'active' => $request->active,
                'logo' => $filePath,

            ]);

            $Seller->maincategory()->attach($request->categories);
            Notification::send($Seller, new SellerCreated($Seller));
            return redirect()->route('admin.sellers')->with(['success' => 'Ce vendeur a bien été ajouter']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.sellers')->with(['error' => 'un prolème est survenu veuillez repeter ultérieurement']);
        }
    }

    public function edit($id)
    {
        try {

            $seller = Seller::Selection()->find($id);
            if (!$seller)
                return redirect()->route('admin.sellers')->with(['error' => "Ce vendeur n'existe pas"]);

            $categories = MainCategory::where('translation_of', 0)->active()->get();

            return view('admin.sellers.edit', compact('seller', 'categories'));
        } catch (\Exception $exception) {
            return $exception;
            return redirect()->route('admin.sellers')->with(['error' => "un prolème est survenu veuillez repeter ultérieurement"]);
        }
    }

    public function update($id, SellerRequest $request)
    {

        try {

            $seller = Seller::Selection()->find($id);
            if (!$seller)
                return redirect()->route('admin.sellers')->with(['error' => "Ce vendeur n'existe pas "]);


            DB::beginTransaction();
            //photo
            if ($request->has('logo')) {
                $filePath = uploadImage('sellers', $request->logo);
                Seller::where('id', $id)
                    ->update([
                        'logo' => $filePath,
                    ]);
            }


            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            $data = $request->except('_token', 'id', 'logo', 'password', 'categories');


            if ($request->has('password') && !is_null($request->password)) {

                $data['password'] = $request->password;
            }

            Seller::where('id', $id)
                ->update(
                    $data
                );
            $seller->maincategory()->sync($request->categories);

            DB::commit();
            return redirect()->route('admin.sellers')->with(['success' => 'les modification ont bien été enregistrer']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('admin.sellers')->with(['error' => 'un prolème est survenu veuillez repeter ultérieurement']);
        }
    }


    public function destroy($id)
    {

        try {
            $seller = Seller::find($id);
            if (!$seller)
                return redirect()->route('admin.sellers')->with(['error' => "Ce vendeur n'existe pas"]);

            // $Sellers = $Seller->Sellers();
            // if (isset($Sellers) && $Sellers->count() > 0) {
            //     return redirect()->route('admin.maincategories')->with(['error' => 'لأ يمكن حذف هذا القسم  ']);
            // }

            $image = Str::after($seller->logo, 'public/assets/');
            $image = base_path('public/assets/' . $image);
            unlink($image); //delete from folder
            // $maincategory->categories()->delete();
            $seller->delete();
            return redirect()->route('admin.sellers')->with(['success' => 'Ce vendeur a bien été supprimer']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.sellers')->with(['error' => 'un prolème est survenu veuillez repeter ultérieurement']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $seller = Seller::find($id);
            if (!$seller)
                return redirect()->route('admin.sellers')->with(['error' => "Ce vendeur n'existe pas"]);

            $status =  $seller->active  == 0 ? 1 : 0;

            $seller->update(['active' => $status]);

            return redirect()->route('admin.sellers')->with(['success' => 'le Status de son vendeur a bien changer son status']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.sellers')->with(['error' => 'un prolème est survenu veuillez repeter ultérieurement']);
        }
    }
}
