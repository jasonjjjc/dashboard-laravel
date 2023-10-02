<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['name', 'slug', 'category_id', 'email', 'logo', 'website'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
