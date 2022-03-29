<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // // Category
        Category::create([
            'name' => 'Afanfian Web Development',
            'slug' => 'Afanfian-Web-Development'
        ]);
        Category::create([
            'name' => 'Afanfian Front-end Developer',
            'slug' => 'Afanfian-Front-end'
        ]);
        Category::create([
            'name' => 'Afanfian DevOps Engineer',
            'slug' => 'Afanfian-DevOps-Engineer'
        ]);
        Category::create([
            'name' => 'Afanfian Information Technology Support Technician',
            'slug' => 'Afanfian-Information-Technology Support-Technician'
        ]);

        //Menggunakan dan membuka user faker 
        User::factory(5)->create();

        //membuat factory atau faker Article
        Article::factory(20)->create();
    }
}
