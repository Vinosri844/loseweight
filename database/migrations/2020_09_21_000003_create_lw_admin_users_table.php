<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLWAdminUsersTable extends Migration
{
    public function up()
    {
        Schema::create('lw_admin_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->nullable();
            $table->string('phone',25)->nullable();
            $table->string('email',255)->nullable();
            $table->string('username',255)->nullable();
            $table->text('password',255)->nullable();
            $table->string('company_name',255)->nullable();
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->enum('status', ['Y', 'N']);
            $table->timestamps();
			$table->foreign('role_id', 'lw_role_id_fk_1586949')->references('id')->on('lw_admin_roles')->onDelete('cascade');
            $table->softDeletes();
        });
    }
}