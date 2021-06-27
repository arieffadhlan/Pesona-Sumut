<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Muhammad Arief Fadhlan',
            'username' => 'arieffadhlan',
            'password' => bcrypt('password'),
            'email' => 'ariffadhlan12@gmail.com',
        ]);
    }
}
