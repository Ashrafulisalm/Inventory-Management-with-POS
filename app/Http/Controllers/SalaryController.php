<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advancedsalary;
use App\Employee;
use DB;

class SalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }    

    public function create(){
    	$emp=Employee::all();
    	return view('admin.addadvancedsalary',compact('emp'));
    }

    public function store(Request $request){
    	$month=$request->month;
    	$emp_id=$request->employees_id;
    	$data=Advancedsalary::where('employee_id',$emp_id)->where('month',$month)->first();
    	if($data){
    		$notification=array(
    			'message'=>'Already Advanced Salary Paid',
    			'alert-type'=>'error'
    		);
    		return Redirect()->back()->with($notification);
    	} else {
    		Advancedsalary::updateOrCreate(['id'=>$request->id],[
    		'employee_id'=>$request->employees_id,
    		'month'=>$request->month,
    		'year'=>$request->year,
    		'advanced_salary'=>$request->advanced_salary,
    		]);

    		$notification=array(
    			'message'=>'Advanced Salary Paid',
    			'alert-type'=>'success'
    		);
    		return redirect()->back()->with($notification);
    	}

    	
    }

    public function paysalary(){
    	$month=date("F",strtotime("-1 months"));
    	$data=Employee::all();
    	/*$month=date("F",strtotime("-1 months"));
    	$data=DB::table('employees')
	    	->join('advancedsalaries','advancedsalaries.employees_id','employees.id')
	    	->select('employees.*','advancedsalaries.*')
	    	->get();*/
    	return view('admin.salary.paysalary',compact('data'));
    }
}
