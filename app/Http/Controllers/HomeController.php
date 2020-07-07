<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Supplier;
use App\Advancedsalary;
use App\Employee;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function employee(){

        return view('admin.employee');
    }

    public function customer(){
        $customer=Customer::all();
        return view('admin.customer',compact('customer'));
    }

    public function supplier(){
        $supplier=Supplier::all();
        return view('admin.supplier',compact('supplier'));
    }

    public function salary(){
       /* $data=Advancedsalary::all();*/
       $data=DB::table('advancedsalaries')
           ->join('employees','advancedsalaries.employee_id','employees.id')
           ->select('advancedsalaries.*','employees.name','employees.salary','employees.photo')
           ->get(); 
        return view('admin.advancedsalary',compact('data'));
    }
}
