<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;
use App\Models\MainCategory;


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
        $this->middleware('guest:seller')->except('logout');
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
        return redirect()->back()->with(['error' => 'Les informations sont incorrects']);
    }

    //Seller functions
    public function showSellerLoginForm()
    {
        return view('seller.login');
    }

    public function sellerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (Auth::guard('seller')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember_me'))) {

            return redirect()->route('seller.dashboard');
        }
        return redirect()->back()->with(['error' => 'Les informations sont incorrect']);
    }

    //Client functions

    public function showClientLoginForm()
    {
        $default_lang = get_default_lang();
        $categories = MainCategory::where('translation_lang', $default_lang)
            ->selection()
            ->active()
            ->get();
        return view('client.login', compact('categories'));
    }


    public function clientLogin(Request $request)
    {

        // return $request;
        // $this->validate($request, [
        //     'email'   => 'required|email',
        //     'password' => 'required|min:6',

        // ]);
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember_me'))) {

            return redirect()->intended('/');
        }
        return redirect()->back()->with(['error' => 'Les informations sont incorrect']);
    }
}
