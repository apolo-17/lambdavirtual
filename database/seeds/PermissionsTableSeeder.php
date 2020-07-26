<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'admin:exam']);

        $admin = Role::create(['name' => 'Admin']);

        $admin->givePermissionTo([
            'admin'
        ]);

        $user = User::find(1);
        $user->assignRole('Admin');

    }
}
