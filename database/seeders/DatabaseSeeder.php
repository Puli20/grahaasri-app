<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

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
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'grahaasri@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('123456'),
        ]);

        Post::create([
            'produk' => 'Robusta',
            'detail' => 'bismillah',
            'harga' => 10000,
        ]);
    }
}
