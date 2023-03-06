<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $roles = [
            [
                'level' => 1,
                'name' => 'SuperAdmin'
            ],
            [
                'level' => 2,
                'name' => 'Admin'
            ],
            [
                'level' => 3,
                'name' => 'Moderator'
            ],
            [
                'level' => 4,
                'name' => 'Guest'
            ],
        ];

        foreach ($roles as $role) {
            $newRole = new Role();
            $newRole->name = $role['name'];
            $newRole->level = $role['level'];
            $newRole->save();
        }
    }
}
