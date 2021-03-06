<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin','client','manager'];
        foreach ($roles as $role){
            Role::create([
                'name' => $role,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
