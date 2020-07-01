<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
                    $data = Employee::all();
                    return datatables()->of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){

                            $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editEmployee">Edit</a>';

                            $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteEmployee">Delete</a>';

                            return $btn;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
                

                return view('admin.employee');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $img=$request->file('photo');
        $random = Str::random(10);
        $image_name = $random;
        $ext = strtolower($img->getClientOriginalExtension());
        $image_fname = $image_name. '.' . $ext;
        $upload_path = 'img/';
        $image_url = $upload_path . $image_fname;
        $success = $img->move($upload_path,$image_fname);*/

        $employee = Employee::updateOrCreate(['id' => $request->employee_id],
            [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'experiance' => $request->experiance,
            'n_id' => $request->n_id,
            'salary' => $request->salary,
            'city' => $request->city,
            'vacation' => $request->vacation,
            //'photo'=>$image_url,
        ]);

            /*$notification=array(
                'message'=>'Contact Added Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);*/

        return response()->json(['success'=>'Employee saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::find($id)->delete();

        return response()->json(['success'=>'Employee deleted successfully.']);
    }
}
