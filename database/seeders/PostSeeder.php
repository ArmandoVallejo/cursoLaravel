<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 20; $i++){
            $c = Category::inRandomOrder()->first();
            Post::create([
                'title' => "Post $i",
                'slug' => "post-$i",
                'content' => "This is the content for post $i",
                'category_id' => $c->id,
                'description' => "Description for post $i",
                'posted' => "yes",
            ]);
        }
    }
}
