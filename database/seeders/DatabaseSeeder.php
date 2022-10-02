<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::factory(2)->create();

        Category::create([
            'name' => 'kategori satu',
            'user_id' => '1'
        ]);
        Category::create([
            'name' => 'kategori dua',
            'user_id' => '1'
        ]);
        Category::create([
            'name' => 'kategori tiga',
            'user_id' => '2'
        ]);

        Post::factory(5)->create();

        // Post::create([
        //     'title' => 'judul satu',
        //     'content' => 'content satu',
        //     'image' => 'image1.jpg',
        //     'user_id' => '1',
        //     'category_id' => '1'
        // ]);
        // Post::create([
        //     'title' => 'judul dua',
        //     'content' => 'content dua',
        //     'image' => 'image2.jpg',
        //     'user_id' => '1',
        //     'category_id' => '1'
        // ]);
    }
}
