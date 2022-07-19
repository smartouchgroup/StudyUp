<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'kabore',
            'status' => 1,
            'role_id' => 1,
            'lastname' => 'moussa',
            'email' => "moussa@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('smtgroupadmin')
        ]);
        DB::table('users')->insert([
            'firstname' => 'sana',
            'status' => 1,
            'role_id' => 2,
            'lastname' => 'ali',
            'email' => "ali@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('test')
        ]);
    }
}
