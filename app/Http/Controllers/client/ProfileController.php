<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\MainCategory;
use Auth;
use App\Models\User;
use DB;

class ProfileController extends Controller
{
    //

    public function index()
    {
        $categories = MainCategory::selection()->active()->get();
        $title = 'Profile';
        $id = Auth::user()->id;
        $client = User::where('id', $id)->Selection()->first()->toArray();
        // dd($client);
        return view('client.profile', compact('client', 'categories', 'title'));
    }


    public function update($id, ClientRequest $request)
    {
        // return $request;

        try {
            $client = User::find($id);

            if (!$client)
                return redirect()->route('home')->with(['error' => "Ce client n'existe pas"]);
            DB::beginTransaction();

            $data = $request->except('_token', 'id', 'password');


            if ($request->has('password') && !is_null($request->password)) {

                $data['password'] = $request->password;
            }

            User::where('id', $id)
                ->update(
                    $data
                );



            DB::commit();
            return redirect()->route('home')->with(['success' => 'Votre compte a bien été modifier']);
        } catch (\Exception $ex) {

            DB::rollback();
            return $ex;
            return redirect()->route('home')->with(['error' => 'un prolème est survenu veuillez repeter ultérieurement']);
        }
    }
}
