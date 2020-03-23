<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'customer-list',
            'customer-create',
            'customer-edit',
            'customer-delete',

            'vehicle-list',
            'vehicle-create',
            'vehicle-edit',
            'vehicle-delete',

            'job-list',
            'job-create',
            'job-edit',
            'job-delete',

            'finished-jobs-list',
            'finished-jobs-delete',
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
