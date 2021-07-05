<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;

class AuthController extends Controller
{


    public function logout()
    {
        Session::flush();
        return redirect()
            ->route('vendor.login')
            ->with('status', 'vendor has been logged out!');
    }
}
