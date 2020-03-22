<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            ['name' => 'superadmin','description'=>'Super Administrator','permission_id'=>1],
            ['name' => 'admin', 'description' => 'Administrator', 'permission_id'=>2], //password = user12345
            ['name' => 'driver','description'=>'Driver','permission_id'=>3],
        ]);
    }
}
