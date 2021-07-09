<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;
use App\Models\MainCategory;
use App\Models\Seller;
use App\Http\Requests\SellerRequest;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:seller')->except('logout');
    }

    public function showSellerRegisterForm()
    {
        $default_lang = get_default_lang();
        $maincategories = MainCategory::where('translation_lang', $default_lang)
            ->selection()
            ->get();
        return view('seller.register', compact('maincategories'));
    }


    public function sellerRegister(SellerRequest $request)
    {

        try {

            // if (!$request->has('active'))
            //     $request->request->add(['active' => 0]);
            // else
            //     $request->request->add(['active' => 1]);

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
            // Notification::send($Seller, new SellerCreated($Seller));
            return redirect()->route('seller.login')->with(['sucess' => 'votre inscription a ete enregisté']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('seller.register')->with(['error' => 'un probleme est survenu']);
        }
    }

    public function showClientRegiterForm()
    {
        return view('client.register');
    }

    public function clientRegister(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:4'
        ]);
    }
}
