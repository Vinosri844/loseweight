<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLwDietMealPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lw_diet_meal_plan', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('diet_type_id');
			$table->foreign('diet_type_id', 'lw_meal_plan_diet_type_id_fk_privilege')->references('id')->on('lw_diet_types')->onDelete('cascade');
			$table->unsignedInteger('meal_plan_id');
			$table->foreign('meal_plan_id', 'lw_diet_meal_plan_meal_plan_id_fk_resources')->references('id')->on('lw_meal_plans')->onDelete('cascade');
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
        Schema::dropIfExists('lw_diet_meal_plan');
    }
}
