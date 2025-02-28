<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'dept_name',
        'company_id'
    ];

    public function company(){
        return $this->belongsTo(Company::class,'company_id','id');
    }
}
