<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;


class LoginController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:vendor')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('admin.login');
    }

    public function adminLogin(LoginRequest $request)
    {

        // $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember_me'))) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect()->intended(route('admin.dashboard'));
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }

    public function showVendorLoginForm()
    {
        return view('vendor.login');
    }

    public function vendorLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (Auth::guard('vendor')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember_me'))) {

            return redirect()->route('vendor.dashboard');
        }
        return back()->withInput($request->only('email', 'remember_me'));
    }


    // public function logout()
    // {
    //     Auth::guard('vendor')->logout();
    //     return redirect()
    //         ->route('vendor.login')
    //         ->with('status', 'vendor has been logged out!');
    // }
}
