<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLwProgramMealPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lw_program_meal_plan', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('program_id');
			$table->foreign('program_id', 'lw_program_meal_plan_program_id_fk_privilege')->references('id')->on('lw_programs')->onDelete('cascade');
			$table->unsignedInteger('meal_plan_id');
			$table->foreign('meal_plan_id', 'lw_lw_program_meal_plan_meal_plan_id_fk_resources')->references('id')->on('lw_meal_plans')->onDelete('cascade');
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
        Schema::dropIfExists('lw_program_meal_plan');
    }
}
