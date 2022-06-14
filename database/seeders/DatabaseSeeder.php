<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $user = \App\Models\User::factory()->create([
             'name' => 'Besnik Korca',
             'email' => 'besnik.korca@ubt-uni.net',
         ]);

         $category = Category::factory()->create([
             'name'=> 'School',
                'slug' => 'school'
         ]);

        User::factory(10)->create();
        Category::factory(5)->create();
        Post::factory(5)->create([
            'user_id' => $user
        ]);

        $posts = Post::factory(2)->create([
            'user_id' => $user,
            'category_id' => $category
        ]);

        foreach($posts as $post) {
            Post::factory(2)->create();
        }

        Post::factory(10)->create([
            'category_id' => $category
        ]);

        Post::factory(20)->create();
    }
}

