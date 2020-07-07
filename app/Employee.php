<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=[
    	'name','email','phone','address','experiance','n_id','salary','photo','vacation','city'
    ];

    public function advanced(){
    	return $this->hasMany('App\Advancedsalary');
    }
}
