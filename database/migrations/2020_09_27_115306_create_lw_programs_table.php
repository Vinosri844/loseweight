<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLwProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lw_programs', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name',255)->nullable();
			$table->string('name_ar',255)->nullable();
			$table->unsignedInteger('length')->nullable();
			$table->enum('type', ['Days']);
			$table->enum('status', ['Y', 'N']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lw_programs');
    }
}
