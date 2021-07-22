 <?php

    namespace App\Http\Controllers\admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin;
    use App\Models\MainCategory;

    class ProfileController extends Controller
    {
        public function edit($id)
        {
            try {

                $seller = Admin::Selection()->find($id);
                if (!$seller)
                    return redirect()->route('admin.sellers')->with(['error' => 'هذا التاجر غير موجود او ربما يكون محذوفا ']);

                $categories = MainCategory::where('translation_of', 0)->active()->get();

                return view('admin.sellers.edit', compact('seller', 'categories'));
            } catch (\Exception $exception) {
                return $exception;
                return redirect()->route('admin.sellers')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
            }
        }

        public function update($id, SellerRequest $request)
        {

            try {

                $seller = Seller::Selection()->find($id);
                if (!$seller)
                    return redirect()->route('admin.sellers')->with(['error' => 'هذا المتجر غير موجود او ربما يكون محذوفا ']);


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
                return redirect()->route('admin.sellers')->with(['success' => 'تم التحديث بنجاح']);
            } catch (\Exception $exception) {
                return $exception;
                DB::rollback();
                return redirect()->route('admin.sellers')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
            }
        }
    }
