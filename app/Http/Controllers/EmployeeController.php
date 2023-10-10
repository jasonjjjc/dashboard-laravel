<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;


class EmployeeController extends Controller
{
    public function index () 
    {
        $employees = Employee::latest();
        if (request('search')) {
            $employees
                ->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('email', 'like', '%' . request('search') . '%')
                ->orWhere('job_title', 'like', '%' . request('search') . '%')
                ->orWhere('summary', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                // or where the company_id of the employee matches the id of a company in the companies table where the name is like the search term
                ->orWhereHas('company', function ($query) {
                    $query->where('name', 'like', '%' . request('search') . '%');
                });
                
            }
    
        return view('employees', [
            'employees' => $employees->get(),
            'companies' => Company::all(),
            'user' => User::first()
        ]);
    }

    public function show (Employee $employee) 
    {
        return view('employee', [
            'employee' => $employee
        ]);

    }


    public function getPosts ()
    {
        return Employee::latest()->filter()->get();
    }
}
