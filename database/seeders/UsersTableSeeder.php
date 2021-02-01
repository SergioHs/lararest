<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User1',
            'email' => 'user1@email.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'user2',
            'email' => 'user2@email.com',
            'password' => bcrypt('password'),
        ]);
    }
}
