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
        return view('employees', [
            'employees' => Employee::latest()->filter(request(['search']))->get(),
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

}
