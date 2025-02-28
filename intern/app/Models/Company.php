<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'com_name',
    ];

    public function employes(){
        return $this->hasMany(Employe::class);
    }

    public function departments(){
        return $this->hasMany(Department::class);
    }
}
