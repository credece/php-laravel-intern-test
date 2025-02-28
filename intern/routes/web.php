<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all/company',[CompanyController::class,'all_company']);
Route::get('/add/company',[CompanyController::class,'add_company'])->name('add.company');
Route::post('/insert/company',[CompanyController::class,'insert_company'])->name('insert.company');

//employee related
Route::get('/all/employee',[CompanyController::class,'all_employee']);
Route::get('/add/employee',[CompanyController::class,'add_employee'])->name('add.employee');
Route::post('/insert/employee',[CompanyController::class,'insert_employee'])->name('insert.employee');

//department related
Route::get('/all/department',[CompanyController::class,'all_department']);
Route::get('/add/department',[CompanyController::class,'add_department'])->name('add.dept');
Route::post('/insert/department',[CompanyController::class,'insert_department'])->name('insert.department');