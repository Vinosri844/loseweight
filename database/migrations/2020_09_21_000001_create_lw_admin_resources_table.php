<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLWAdminResourcesTable extends Migration
{
    public function up()
    {
        Schema::create('lw_admin_resources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resource_name')->nullable();
            $table->string('resource_key')->nullable();
            $table->enum('status', ['Y', 'N']);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}