<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;


class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::latest()->filter(request(['search', 'company', 'user']))->paginate(6)->withQueryString(),
            'companies' => Company::all(),
            'currentCompany' => Company::firstWhere('slug', request('company')),
            'user' => User::first()
        ]);
    }

    public function show(Employee $employee)
    {
        return view('employees.show', [
            'employee' => $employee
        ]);
    }
}
