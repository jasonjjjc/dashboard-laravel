<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;


class CompanyController extends Controller
{

    public function index()
    {
        $companies = Company::latest()->paginate(10);

        return view('companies.index', compact('companies'));
    }


    public function create()
    {
        return view('companies.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('companies', 'email'), 'email'],
            'logo' => 'required|image',
            'website' => ['required', 'url'],
            'summary' => ['required', 'min:10', 'max:255'],
            'description' => 'required',
        ]);

        $slug = Str::slug(request('name'));
        $slugExists = Company::where('slug', $slug)->exists();

        if ($slugExists) {
            return redirect('/admin/companies/create')->with('error', 'Company with similar name already exists. Please choose a different name.')->withInput();
        }

        $attributes['slug'] = $slug;
        $attributes['logo'] = request()->file('logo')->store('images', 'public');

        try {
            Company::create($attributes);
            return redirect('/')->with('success', 'Company created successfully!');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());

            return redirect('/admin/companies/create')->with('error', 'Company not created!')->withInput();
        }
    }

}
