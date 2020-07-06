<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class SupplierController extends Controller
{
    

    public function create(){
    	return view('admin.addsupplier');
    }

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

            $supplier = Supplier::updateOrCreate(['id'=>$request->id],
                [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'shop' => $request->shop,
                'type'=>$request->type,
                'account_holder' => $request->account_holder,
                'account_number' => $request->account_number,
                'bank_name' => $request->bank_name,
                'bank_branch' => $request->bank_branch,
                'city' => $request->city,
                'photo'=>$image_url,
            ]);


         
           return redirect('/home/supplier');
        }

        public function destroy($id){
        	Supplier::find($id)->delete();
        	return redirect()->back();
        }

        public function edit($id){
        	$data=Supplier::where('id',$id)->first();
        	return view('admin.editsupplier',compact('data'));
        }

        
}
