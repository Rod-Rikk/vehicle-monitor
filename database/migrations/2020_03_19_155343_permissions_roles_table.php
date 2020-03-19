<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermissionsRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('permission_role', function (Blueprint $table) {
            // $table->increments('id');
            $table->unsignedInteger('permission_id')->references('id')
                ->on('permissions')
                ->onDelete('cascade');;
            $table->unsignedInteger('role_id')->references('id')
                ->on('roles')
                ->onDelete('cascade');;

            $table->primary(['permission_id', 'role_id']);
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
