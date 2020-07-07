<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Catagory;
use App\Supplier;
use Illuminate\Support\Str;

class ProductController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data=Product::all();
        return view('admin.product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $cata=Catagory::all();
        $supplier=Supplier::all();
        return view('admin.product.createProduct',compact('cata','supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('product_image')){
        @unlink($request->oldphoto);
        $img=$request->file('product_image');
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

        $product = Product::updateOrCreate(['id'=>$request->id],
            [
            'name' => $request->name,
            'supplier_id' => $request->supplier_id,
            'catagory_id' => $request->catagory_id,
            'product_code' => $request->product_code,
            'product_garage' => $request->product_garage,
            'product_route'=>$request->product_route,
            'buy_date' => $request->buy_date,
            'exp_date' => $request->exp_date,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'product_image'=>$image_url,
        ]);

        if($product){
            $notification=array(
                'message'=>'Product Added/Updated Successfully! ',
                'alert-type'=>'success'
                );
            return redirect()->back()->with($notification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Product::where('id',$id)->first();
        return view('admin.product.viewProduct',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cata=Catagory::all();
        $supplier=Supplier::all();
        $data=Product::where('id',$id)->first();
        return view('admin.product.editProduct',compact('data','cata','supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Product::find($id)->delete();
        if($del){
            $notification=array(
                'message'=>'Product Deleted Successfully! ',
                'alert-type'=>'success'
                );
            return redirect()->back()->with($notification);
        }
    }
}
