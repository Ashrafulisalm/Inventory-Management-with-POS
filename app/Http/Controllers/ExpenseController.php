<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;

class ExpenseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$date=date('d/m/y');
    	$expense=Expense::where('date',$date)->get();
    	$total=Expense::where('date',$date)->sum('expense_amount');
    	return view('admin.expense.expenseIndex',compact('expense','total'));
    }

    public function create(){
    	return view('admin.expense.createExpense');
    }

    public function store(Request $request){
    	$expense=Expense::create(
    		[
    			'expense_details'=>$request->expense_details,
    			'expense_amount'=>$request->expense_amount,
    			'date'=>$request->date,
    			'month'=>$request->month,
    			'year'=>$request->year,
    		]);
    	if($expense){
    		$notification=array(
    			'message'=>'Expense Added to List.',
    			'alert-type'=>'success'
    		);
    		return redirect()->back()->with($notification);
    	}

    }

    public function edit($id){
    	$data=Expense::where('id',$id)->first();
    	return view('admin.expense.editExpense',compact('data'));
    }

    public function update(Request $request,$id){
    	$expense=Expense::updateOrCreate(['id'=>$id],
    		[
    			'expense_details'=>$request->expense_details,
    			'expense_amount'=>$request->expense_amount,
    			'date'=>$request->date,
    			'month'=>$request->month,
    			'year'=>$request->year,
    		]);
    	if($expense){
    		$notification=array(
    			'message'=>'Expense Updated Successfully!',
    			'alert-type'=>'success'
    		);
    		return redirect('/expense/index')->with($notification);
    	}
    }

    public function specific(){
    	return view('admin.expense.specificExpenseForm');
    }

    public function viewExpense(Request $request){
    	$day=$request->date;
    	$month=$request->month;
    	$year=$request->year;
    	$result=Expense::where('date',$day)->orWhere('month',$month)
    			->orWhere('year',$year)->get();
    	$total=Expense::where('date',$day)->orWhere('month',$month)
    			->orWhere('year',$year)->sum('expense_amount');
    	return view('admin.expense.viewExpense',compact('result','total','day','month','year'));
    }
}
