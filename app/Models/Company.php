<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $id = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['name', 'email', 'logo', 'website'];
}
