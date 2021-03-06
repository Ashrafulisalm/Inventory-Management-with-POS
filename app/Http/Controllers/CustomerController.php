<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('admin.addcustomer');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                    'name' => 'required|max:255',
                    'phone' =>  'required|max:13',
                    'address' => 'required',
                ]);

            if($request->file('photo')){
            @unlink($request->oldphoto);
            $img=$request->file('photo');
            $random = Str::random(10);
            $image_name = $random;
            $ext = strtolower($img->getClientOriginalExtension());
            $image_fname = $image_name. '.' . $ext;
            $upload_path = 'img/';
            $image_url = $upload_path . $image_fname;
            $success = $img->move($upload_path,$image_fname);
            } else {
                $image_url=$request->oldphoto;
            }

            $customer = Customer::updateOrCreate(['id' => $request->id],
                [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'shop_name' => $request->shop_name,
                'account_holder' => $request->account_holder,
                'account_number' => $request->account_number,
                'bank_name' => $request->bank_name,
                'bank_branch' => $request->bank_branch,
                'city' => $request->city,
                'photo'=>$image_url,
            ]);


            return redirect('/home/customer');
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Customer  $customer
         * @return \Illuminate\Http\Response
         */
        public function show(Customer $customer)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Customer  $customer
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $customer = Customer::find($id);
            return view('admin.editcustomer',compact('customer'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Customer  $customer
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Customer  $customer
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $pic=Customer::where('id',$id)->first();
            @unlink($pic->photo);
            Customer::find($id)->delete();
            return redirect()->back();
            
        }
}
