<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Tag::factory()->count(100)->create()->each(function ($tag){
            $tag->article()->attach(Article::inRandomOrder()->first());
        });
    }
}
