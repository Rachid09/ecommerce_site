<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\MainCategory;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\VendorCreated;
use DB;

class VendorsController extends Controller
{


    public function index()
    {
        $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);
        return view('admin.vendors.index', compact('vendors'));
    }

    public function create()
    {
        $categories = MainCategory::where('translation_of', 0)->active()->get();
        return view('admin.vendors.create', compact('categories'));
    }

    public function store(VendorRequest $request)
    {

        try {

            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            $filePath = "";
            if ($request->has('logo')) {
                $filePath = uploadImage('vendors', $request->logo);
            }

            $vendor = Vendor::create([
                'full_name' => $request->full_name,
                'store_name' => $request->store_name,
                'mobile' => $request->mobile,
                'address' => $request->address,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'active' => $request->active,
                'logo' => $filePath,

            ]);

            $vendor->maincategory()->attach($request->categories);



            return redirect()->route('admin.vendors')->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.vendors')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    // public function edit($id)
    // {
    //     try {

    //         $vendor = Vendor::Selection()->find($id);
    //         if (!$vendor)
    //             return redirect()->route('admin.vendors')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);

    //         $categories = MainCategory::where('translation_of', 0)->active()->get();

    //         return view('admin.vendors.edit', compact('vendor', 'categories'));
    //     } catch (\Exception $exception) {
    //         return redirect()->route('admin.vendors')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    //     }
    // }

    // public function update($id, VendorRequest $request)
    // {

    //     try {

    //         $vendor = Vendor::Selection()->find($id);
    //         if (!$vendor)
    //             return redirect()->route('admin.vendors')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);


    //         DB::beginTransaction();
    //         //photo
    //         if ($request->has('logo')) {
    //             $filePath = uploadImage('vendors', $request->logo);
    //             Vendor::where('id', $id)
    //                 ->update([
    //                     'logo' => $filePath,
    //                 ]);
    //         }


    //         if (!$request->has('active'))
    //             $request->request->add(['active' => 0]);
    //         else
    //             $request->request->add(['active' => 1]);

    //         $data = $request->except('_token', 'id', 'logo', 'password');


    //         if ($request->has('password') && !is_null($request->password)) {

    //             $data['password'] = $request->password;
    //         }

    //         Vendor::where('id', $id)
    //             ->update(
    //                 $data
    //             );

    //         DB::commit();
    //         return redirect()->route('admin.vendors')->with(['success' => 'تم التحديث بنجاح']);
    //     } catch (\Exception $exception) {
    //         return $exception;
    //         DB::rollback();
    //         return redirect()->route('admin.vendors')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    //     }
    // }

    // public function changeStatus()
    // {
    // }
}