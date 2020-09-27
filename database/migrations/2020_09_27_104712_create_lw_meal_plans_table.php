<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLwMealPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lw_meal_plans', function (Blueprint $table) {
            $table->id();
			$table->string('name',255)->nullable();
			$table->string('name_ar',255)->nullable();
			$table->float('price')->nullable();
			$table->float('sale_price')->nullable();
			$table->float('cost_price')->nullable();
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
        Schema::dropIfExists('lw_meal_plans');
    }
}
