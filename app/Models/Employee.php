<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['user_id', 'company_id', 'slug', 'name', 'email', 'job_title', 'phone', 'address', 'summary', 'description'];

    protected $with = ['company', 'user'];


    public function scopeFilter ($query, array $filters) 
    {

        if ($filters['search'] ?? false) {
            $query
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
    }


    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function user () 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
