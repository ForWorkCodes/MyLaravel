<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(10)->create([
            'thumbnail' => "public/storage/posts/1.jpg"
        ]);
        \App\Models\AdminUser::factory(1)->create([
            'name' => 'admin',
            'email' => 'admin@admin.ru',
            'password' => bcrypt('123456')
        ]);
    }
}
