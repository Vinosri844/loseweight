<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLWAdminRolePrivilegeTable extends Migration
{
    public function up()
    {
        Schema::create('lw_admin_role_privilege', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id');
			$table->foreign('role_id', 'lw_role_id_fk_privilege')->references('id')->on('lw_admin_roles')->onDelete('cascade');
			$table->unsignedInteger('resource_id');
			$table->foreign('resource_id', 'lw_resource_id_fk_resources')->references('id')->on('lw_admin_resources')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}