<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolar sit amet',
            'body' => 'Lorem ipsum dolor sit amet. 33 velit dicta et amet animi est exercitationem eius. 33 molestiae nostrum sit dolorum magnam et optio modi aut alias sequi At odit distinctio nam porro consequatur. Est assumenda reprehenderit et quia enim est facere voluptatem quo dignissimos rerum qui rerum soluta ad dolorem nihil? Id dolore alias a explicabo dolorum qui quaerat nesciunt.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem ipsum dolar sit amet',
            'body' => 'Lorem ipsum dolor sit amet. 33 velit dicta et amet animi est exercitationem eius. 33 molestiae nostrum sit dolorum magnam et optio modi aut alias sequi At odit distinctio nam porro consequatur. Est assumenda reprehenderit et quia enim est facere voluptatem quo dignissimos rerum qui rerum soluta ad dolorem nihil? Id dolore alias a explicabo dolorum qui quaerat nesciunt.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-third-post',
            'excerpt' => 'Lorem ipsum dolar sit amet',
            'body' => 'Lorem ipsum dolor sit amet. 33 velit dicta et amet animi est exercitationem eius. 33 molestiae nostrum sit dolorum magnam et optio modi aut alias sequi At odit distinctio nam porro consequatur. Est assumenda reprehenderit et quia enim est facere voluptatem quo dignissimos rerum qui rerum soluta ad dolorem nihil? Id dolore alias a explicabo dolorum qui quaerat nesciunt.'
        ]);


//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
    }
}
