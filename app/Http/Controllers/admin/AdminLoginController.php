<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    //
    public function getlogin()
    {
        return view('admin.login');
    }

    // public function insert()
    // {

    //     $admin = new Admin();
    //     $admin->nom = "rachid";
    //     $admin->prenom = "rachid";
    //     $admin->email = "dima_fox_@hotmail.com";
    //     $admin->password = bcrypt("12345");
    //     $admin->save();
    // }

    public function login(LoginRequest $request)
    {

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect()->route('admin.dashboard');
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }

    public function home()
    {
        return "hello admin";
    }
}
