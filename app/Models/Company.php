<?php


namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Company
{
    
    // find all the details about all the companies in the resources/companies directory
    public static function all()
    {
        $files = File::files(resource_path("companies/"));

        return array_map(function ($file) {
            return $file->getContents();
        }, $files);
    }
    
    // find one company's details in the resources/companies directory
    public static function find($slug)
    {
        if (!file_exists($path = resource_path("companies/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("companies.{$slug}", 1, fn () => file_get_contents($path));

        
    }
}
