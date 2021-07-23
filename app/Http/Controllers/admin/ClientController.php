<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class ClientController extends Controller
{
    //

    public function index()
    {
        $clients = User::selection()->paginate(PAGINATION_COUNT);
        return view('admin.clients.index', compact('clients'));
    }



    public function edit($id)
    {
        try {

            $client = User::Selection()->find($id);
            if (!$client)
                return redirect()->route('admin.clients')->with(['error' => "Ce client n'existe pas"]);

            return view('admin.clients.edit', compact('client'));
        } catch (\Exception $exception) {
            return $exception;
            return redirect()->route('admin.clients')->with(['error' => "un prolème est survenu veuillez repeter ultérieurement"]);
        }
    }

    public function update($id, ClientRequest $request)
    {

        try {

            $client = User::Selection()->find($id);
            if (!$client)
                return redirect()->route('admin.clients')->with(['error' => "Ce client n'existe pas "]);


            DB::beginTransaction();
            //photo





            $data = $request->except('_token', 'id', 'password');


            if ($request->has('password') && !is_null($request->password)) {
                $data['password'] = $request->password;
            }

            User::where('id', $id)
                ->update(
                    $data
                );


            DB::commit();
            return redirect()->route('admin.clients')->with(['success' => 'les modification ont bien été enregistrer']);
        } catch (\Exception $exception) {
            return $exception;
            DB::rollback();
            return redirect()->route('admin.clients')->with(['error' => 'un prolème est survenu veuillez repeter ultérieurement']);
        }
    }


    public function destroy($id)
    {

        try {
            $client = User::find($id);
            if (!$client)
                return redirect()->route('admin.clients')->with(['error' => "Ce client n'existe pas"]);

            // $clients = $client->clients();
            // if (isset($clients) && $clients->count() > 0) {
            //     return redirect()->route('admin.maincategories')->with(['error' => 'لأ يمكن حذف هذا القسم  ']);
            // }


            $client->delete();
            return redirect()->route('admin.clients')->with(['success' => 'Ce client a bien été supprimer']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.clients')->with(['error' => 'un prolème est survenu veuillez repeter ultérieurement']);
        }
    }
}
