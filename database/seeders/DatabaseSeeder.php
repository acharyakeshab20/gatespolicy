<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
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


        // $this->call(admindata::class);
        Post::factory(8)->create();

        // user::create([
        //     'name'=>'user',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('user12345'),
        //     'role' => 'user'
        // ]);

        // user::create([
        //     'name'=>'editor',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('editor12345'),
        //     'role' => 'editor'
        // ]);
    }
}
