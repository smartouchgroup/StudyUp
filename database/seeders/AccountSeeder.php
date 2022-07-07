<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'user_id' => 1,
            'amount' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('accounts')->insert([
            'user_id' => 2,
            'amount' => 1000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
