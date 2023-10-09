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

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function user () 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
