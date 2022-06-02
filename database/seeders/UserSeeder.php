<?php

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
            'role_id' => 1,
            'lastname' => 'moussa',
            'email' => "moussa@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('smtgroupadmin')
        ]);
        DB::table('users')->insert([
            'firstname' => 'sana',
            'role_id' => 2,
            'lastname' => 'ali',
            'email' => "ali@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('test')
        ]);
    }
}
