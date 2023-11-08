<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                "name" => "News",
                "slug" => "news"
            ],
            [
                "name" => "Personal",
                "slug" => "personal"
            ],
            [
                "name" => "Web Programming",
                "slug" => "web-programming"
            ],
            [
                "name" => "Web Design",
                "slug" => "web-design"
            ],
            [
                "name" => "Cyber Security",
                "slug" => "cyber-security"
            ],
            [
                "name" => "Lifestyle",
                "slug" => "lifestyle"
            ],
            [
                "name" => "Mobile Programming",
                "slug" => "mobile-programming"
            ],
            [
                "name" => "Desktop Programming",
                "slug" => "desktop-programming"
            ]
        ]);
    }
}
