<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['name', 'user_id', 'slug', 'category_id', 'email', 'logo', 'website', 'summary', 'description'];

    protected $with = ['company', 'user'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function user () 
    {
        return $this->belongsTo(User::class);
    }

}
