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
        User::create([
            'name' => 'Arya Wira',
            'username' => 'aryawp',
            'email' => 'aryawira@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Belajar Laravel',
        //     'slug' => 'belajar-laravel',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta o',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta obcaecati vel dolor assumenda, ipsa dignissimos ut quod repellendus libero quia, ipsum excepturi facilis. Reiciendis velit eligendi consequatur odit pariatur iure similique quam dignissimos repellat suscipit excepturi nisi, sapiente nam doloribus veniam in et error consectetur perspiciatis ea enim! Modi velit optio, enim ad explicabo ducimus quis fuga labore quia, sunt repudiandae maxime, necessitatibus commodi molestias odit autem ex! Officia minus voluptate rem atque tempore labore necessitatibus, eos sunt in obcaecati ratione. Hic, voluptas adipisci at aperiam maiores porro error consequuntur qui quos ad veritatis ipsam numquam ratione, accusantium officiis quidem?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
