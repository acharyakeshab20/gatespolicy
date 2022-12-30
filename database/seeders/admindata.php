<?php

namespace Database\Seeders;

use http\Client\Curl\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class admindata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'=>'editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('editor12345'),
            'roles' => 'editor',
        ]);
    }
}
