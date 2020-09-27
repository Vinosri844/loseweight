<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLwProductDietMealTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lw_product_diet_meal_type', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('product_id');
			$table->foreign('product_id', 'lw_product_diet_meal_type_product_id_fk_privilege')->references('id')->on('lw_products')->onDelete('cascade');
			$table->unsignedInteger('diet_type_id');
			$table->foreign('diet_type_id', 'lw_product_diet_meal_type_diet_type_id_fk_resources')->references('id')->on('lw_diet_types')->onDelete('cascade');
			$table->unsignedInteger('meal_type_id');
			$table->foreign('meal_type_id', 'lw_product_diet_meal_type_meal_type_id_fk_resources')->references('id')->on('lw_meal_type')->onDelete('cascade');
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
        Schema::dropIfExists('lw_product_diet_meal_type');
    }
}
