<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::latest()->get();
        $employees = Employee::latest()->get();

        return view('employees', compact('companies', 'employees'));
    }
}

