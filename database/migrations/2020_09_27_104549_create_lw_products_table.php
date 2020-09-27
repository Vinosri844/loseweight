<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLwProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lw_products', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name',255)->nullable();
			$table->string('name_ar',255)->nullable();
			$table->string('slug',300)->nullable();
			$table->text('description')->nullable();
			$table->text('description_ar')->nullable();
			$table->string('image',255)->nullable();
			$table->unsignedInteger('fat')->nullable();
			$table->unsignedInteger('protein')->nullable();
			$table->unsignedInteger('carb')->nullable();
			$table->unsignedInteger('calories')->nullable();
			$table->float('price')->nullable();
			$table->enum('type', ['simple', 'composite']);
			$table->enum('status', ['Y', 'N']);
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
        Schema::dropIfExists('lw_products');
    }
}
