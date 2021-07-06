<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;

class AuthController extends Controller
{


    public function logout()
    {
        Session::flush();
        return redirect()->route('seller.login');
    }
}
