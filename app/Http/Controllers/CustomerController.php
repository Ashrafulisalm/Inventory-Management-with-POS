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
    public function index()
        {
            
                        $data = Customer::all();
                        return datatables()->of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){

                                $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editCustomer">Edit</a>';

                                $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteCustomer">Delete</a>';

                                return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
                    

                    return view('admin.customer');
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

            /*$img=$request->file('photo');
            $random = Str::random(10);
            $image_name = $random;
            $ext = strtolower($img->getClientOriginalExtension());
            $image_fname = $image_name. '.' . $ext;
            $upload_path = 'img/';
            $image_url = $upload_path . $image_fname;
            $success = $img->move($upload_path,$image_fname);*/

            $customer = Customer::updateOrCreate(['id' => $request->customer_id],
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
                //'photo'=>$image_url,
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
            $customer = Customer::update(['id' => $id],
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
                //'photo'=>$image_url,
            ]);


            return redirect('/home/customer');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Customer  $customer
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            Customer::find($id)->delete();
            return response()->json(['success'=>'Employee deleted successfully.']);
            //return redirect('/home/customer');
        }
}
