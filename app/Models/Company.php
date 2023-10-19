<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['slug', 'name', 'email', 'logo', 'website', 'summary', 'description'];


    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
