<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLWPagesTable extends Migration
{
    public function up()
    {
      
		Schema::create('lw_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255)->nullable();
            $table->string('name_ar',255)->nullable();
            $table->string('slug',300)->nullable();
            $table->text('content')->nullable();
            $table->text('content_ar')->nullable();
			$table->string('image',255)->nullable();
			$table->string('meta_title',255)->nullable();
			$table->string('meta_keywords',255)->nullable();
			$table->text('meta_description')->nullable();
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
        Schema::dropIfExists('lw_pages');
    }
}