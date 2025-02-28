<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function all_company(){
        $show_com = Company::all();
        return view('company.all_company',compact('show_com'));
    }

    public function add_company(){
        return view('company.add_company');
    }

    public function insert_company(Request $request){
        $request->validate([
            'cp_name' => 'required|string'
        ],[
            'cp_name.required' => 'Give a nice name for the company'
        ]);

        Company::create([
            'com_name' => $request->cp_name
        ]);

        return redirect()->back();
    }

    // Employee Related 
    public function all_employee(){
        $show_empl = Employee::with('company')->get();
        return view('Employee.all_employee',compact('show_empl'));
    }

    public function add_employee(){
        $get_company =  Company::all();
        return view('Employee.add_employe',compact('get_company'));
    }

    public function insert_employee(Request $request){
        $request->validate([
            'emp_name' => 'required|string',
            'emp_email' => 'required|email'
        ],[
            'emp_name.required' => 'Give a nice name for the company',
            'emp_email.required' => 'Give Email address',
            'emp_email.email' => 'Must be email'
        ]);

        Employee::create([
            'emp_name' => $request->emp_name,
            'emp_email' =>$request->emp_email,
            'company_id' =>$request->company_id,
        ]);

        return redirect()->back();
    }

    //department
    public function all_department(){
        $show_dept = Department::with('company')->get();
        return view('Department.all_department',compact('show_dept'));
    }

    public function add_department(){
        $get_company =  Company::all();
        return view('Department.add_dept',compact('get_company'));
    }

    public function insert_department(Request $request){
        $request->validate([
            'dept_name' => 'required|string',
        ],[
            'dept_name.required' => 'Give a nice name for the company',
        ]);

        Department::create([
            'dept_name' => $request->dept_name,
            'company_id' =>$request->company_id,
        ]);

        return redirect()->back();
    }
}
