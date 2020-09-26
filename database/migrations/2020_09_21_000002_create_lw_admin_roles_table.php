<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLWAdminRolesTable extends Migration
{
    public function up()
    {
        Schema::create('lw_admin_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role_name',100)->nullable();
            $table->text('role_privilege')->nullable();
            $table->enum('status', ['Y', 'N']);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}