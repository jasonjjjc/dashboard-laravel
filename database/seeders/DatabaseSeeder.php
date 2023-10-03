<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Category::truncate();
        Company::truncate();

        $user = User::factory()->create([
            'name' => 'Admin',
            'password' => 'admin'
        ]);


        // Categories

        $technology = Category::create([
            "id" => 1,
            "slug" => "technology",
            "name" => "Technology",
            "created_at" => "2023-10-02 08:29:07",
            "updated_at" => "2023-10-02 08:29:07"
        ]);

        $home = Category::create([
            "id" => 2,
            "slug" => "home",
            "name" => "Home",
            "created_at" => "2023-10-02 08:30:38",
            "updated_at" => "2023-10-02 08:30:38"
        ]);

        $food = Category::create([
            "id" => 3,
            "slug" => "food",
            "name" => "Food",
            "created_at" => "2023-10-02 15:55:33",
            "updated_at" => "2023-10-02 15:55:33"
        ]);

        $clothes = Category::create([
            "id" => 4,
            "slug" => "clothes",
            "name" => "Clothes",
            "created_at" => "2023-10-02 15:56:07",
            "updated_at" => "2023-10-02 15:56:07"
        ]);




        // Companies

        Company::create([
            "user_id" => $user->id,
            "category_id" => $technology->id,
            "slug" => "apple",
            "name" => "Apple",
            "email" => "info@apple.com",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg",
            "website" => "https://www.apple.com/uk/",
            "created_at" => "2023-09-29 15:23:16",
            "updated_at" => "2023-09-29 15:23:16"
        ]);

        Company::create([

            "user_id" => $user->id,
            "category_id" => $clothes->id,
            "slug" => "burberry",
            "name" => "Burberry",
            "email" => "customerservice@burberry.com",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/b/b4/Logo_Burberry_01.svg",
            "website" => "https://uk.burberry.com/",
            "created_at" => "2023-09-29 16:26:50",
            "updated_at" => "2023-09-29 16:29:09"

        ]);

        Company::create([
            "user_id" => $user->id,
            "category_id" => $food->id,
            "slug" => "waitrose",
            "name" => "Waitrose",
            "email" => "customerserviceteam@waitrose.co.uk",
            "logo" => "https://upload.wikimedia.org/wikipedia/en/f/f9/Waitrose_%26_Partners.svg",
            "website" => "https://www.waitrose.com/",
            "created_at" => "2023-09-29 17:36:19",
            "updated_at" => "2023-09-29 17:36:19"
        ]);

        Company::create([
            "user_id" => $user->id,
            "category_id" => $home->id,
            "slug" => "john-lewis",
            "name" => "John Lewis",
            "email" => "info.johnlewis.com/",
            "logo" => "https://upload.wikimedia.org/wikipedia/en/a/a4/John_Lewis_%26_Partners_logo.svg",
            "website" => "https://www.johnlewis.com/",
            "created_at" => "2023-09-29 18:02:01",
            "updated_at" => "2023-09-29 18:02:01"
        ]);

        Company::create([
            "user_id" => $user->id,
            "category_id" => $home->id,
            "slug" => "screwfix",
            "name" => "Screwfix",
            "email" => "info@screwfix.com/",
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/7/73/Screwfix_logo.svg",
            "website" => "https://www.screwfix.com/",
            "created_at" => "2023-09-29 18:02:01",
            "updated_at" => "2023-09-29 18:02:01"
        ]);




    }
}
