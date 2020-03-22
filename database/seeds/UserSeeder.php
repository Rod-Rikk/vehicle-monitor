<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['name' => 'Admin', 'email' => 'admin@ekb.vm', 'password' => bcrypt('secret99')],
            ['name' => 'Manager', 'email' => 'manager@ekb.vm', 'password' => bcrypt('secret1')],
            ['name' => 'Driver', 'email' => 'driver@ekb.vm', 'password' => bcrypt('secret2')],
        ]);
    }
}
