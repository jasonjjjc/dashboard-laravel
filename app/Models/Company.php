<?php


namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Company
{
    public $title;

    public $excerpt;

    public $date;

    public $slug;

    public $body;


    public function __construct($title, $excerpt, $date, $slug, $body)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->slug = $slug;
        $this->body = $body;
    }




    // find all the details about all the companies in the resources/companies directory
    public static function all()
    {
        return cache()->rememberForever('companies.all', function () {
            return collect(File::files(resource_path("companies")))
                ->map(fn ($file) => YamlFrontMatter::parseFile($file))
                ->map(fn ($document) => new Company(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->slug,
                    $document->body(),
                ))
                ->sortByDesc('date');
        });
        
    }

    // find one company's details in the resources/companies directory
    public static function find($slug)
    {
        // find all the companies
        $companies = static::all();

        // return only the company that matches the slug
        return $companies->firstWhere('slug', $slug);




    }
}
