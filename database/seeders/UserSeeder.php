<?php

namespace Database\Seeders;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'User2',
            'email' => 'user2@user2.com',
            'password' => bcrypt('user2'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'User3',
            'email' => 'user3@user3.com',
            'password' => bcrypt('user3'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'User4',
            'email' => 'user4@user3.com',
            'password' => bcrypt('user3'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'User5',
            'email' => 'user5@user3.com',
            'password' => bcrypt('user3'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'User6',
            'email' => 'user6@user3.com',
            'password' => bcrypt('user3'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'User7',
            'email' => 'user7@user3.com',
            'password' => bcrypt('user3'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'User8',
            'email' => 'user8@user3.com',
            'password' => bcrypt('user3'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'User9',
            'email' => 'user9@user3.com',
            'password' => bcrypt('user3'),
            'role' => 'user',
        ]);
    }
}
