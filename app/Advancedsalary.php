<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Advancedsalary extends Model
{
    protected $fillable=[
    	'employee_id','month','year','advanced_salary'
    ];

    public function employee(){
    	return $this->belongsTo(Employee::class);
    }
}
