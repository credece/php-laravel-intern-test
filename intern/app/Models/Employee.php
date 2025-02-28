<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'emp_name',
        'emp_email',
        'company_id'
    ];

    public function company(){
        return $this->belongsTo(Company::class,'company_id','id');
    }
}
