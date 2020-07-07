<?php

namespace App\Http\Controllers;
use App\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$cata=Catagory::all();
    	return view('admin.catagory.index',compact('cata'));
    }

    public function create(){
    	return view('admin.catagory.createCatagory');
    }

    public function store(Request $request){
    	$cata=Catagory::updateOrCreate(['id'=>$request->id],[
    		'name'=>$request->name
    	]);

    	if($cata){
    		$notification=array(
    			'message'=>'Catagory Added/Updated Successfully! ',
    			'alert-type'=>'success'
    			);
    		return redirect()->back()->with($notification);
    	}
    } 

    public function edit($id){
    	$data=Catagory::where('id',$id)->first();
    	return view('admin.catagory.editCatagory',compact('data'));
    }

    public function destroy($id){
    	$data=Catagory::find($id)->delete();
    	if($data){
    		$notification=array(
    			'message'=>'Catagory Deleted Successfully! ',
    			'alert-type'=>'success'
    			);
    		return redirect()->back()->with($notification);
    	}
    }
}
