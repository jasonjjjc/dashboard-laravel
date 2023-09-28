<?php


namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Company
{
    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }




    // find all the details about all the companies in the resources/companies directory
    public static function all()
    {
        return collect(File::files(resource_path("companies")))
            ->map(fn ($file) => YamlFrontMatter::parseFile($file))
            ->map(fn ($document) => new Company(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            ));
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
