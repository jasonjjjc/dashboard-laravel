<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;


class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::latest()->filter(request(['search', 'company', 'user']))->paginate(10)->withQueryString(),
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

    public function create()
    {
        return view('employees.create', [
            'companies' => Company::all()
        ]);
    }

    public function store()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('employees', 'email'), 'email'],
            'phone' => ['required', 'numeric', 'digits:11', Rule::unique('employees', 'phone')],
            'image' => 'required|image',
            'job_title' => ['required', 'min:3'],
            'address' => ['required', 'min:8'],
            'summary' => ['required', 'min:10', 'max:255'],
            'description' => 'required',
            'company_id' => ['required', Rule::exists('companies', 'id')]
        ]);

        $slug = Str::slug(request('name'));
        $slugExists = Employee::where('slug', $slug)->exists();

        if ($slugExists) {
            return redirect('/admin/employees/create')->with('error', 'Employee with similar name already exists. Please choose a different name.')->withInput();
        }

        $attributes['slug'] = $slug;
        $attributes['user_id'] = auth()->id();
        $attributes['image'] = request()->file('image')->store('images', 'public');

        try {
            Employee::create($attributes);
            return redirect('/')->with('success', 'Employee created successfully!');
        } catch (\Exception $e) {
            return redirect('/admin/employees/create')->with('error', 'Employee not created!')->withInput();
        }
    }
}
