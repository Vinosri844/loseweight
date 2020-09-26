<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLwBlogCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lw_blog_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255)->nullable();
            $table->string('arabic_name',255)->nullable();
            $table->string('slug',300)->nullable();
            $table->string('arabic_slug',300)->nullable();
            $table->text('content')->nullable();
            $table->text('arabic_content')->nullable();
			$table->unsignedInteger('parent_id')->nullable();
            $table->unsignedInteger('level')->nullable();
			$table->string('image',255)->nullable();
			$table->string('meta_title',255)->nullable();
			$table->string('meta_keywords',255)->nullable();
			$table->text('meta_description')->nullable();
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
        Schema::dropIfExists('lw_blog_categories');
    }
}
