<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['name', 'user_id', 'slug', 'category_id', 'email', 'logo', 'website', 'summary', 'description'];

    protected $with = ['category', 'user'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function user () 
    {
        return $this->belongsTo(User::class);
    }

}
