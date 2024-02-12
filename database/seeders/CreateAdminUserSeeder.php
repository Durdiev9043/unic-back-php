<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 1
        ],);

        $user = User::create([
            'name' => 'admin raxbar',
            'email' => 'admin@us.com',
            'password' => bcrypt('admin'),
            'role' => 2
        ],);

        $role = Role::create(['name' => 'Admin']);
        $role1 = Role::create(['name' => 'Raxbar']);
        $role2 = Role::create(['name' => 'Viloyat']);
        $role3 = Role::create(['name' => 'Tuman']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $admin->assignRole([$role->id]);
        $user->assignRole([$role1->id]);
    }
}
