<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLwDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lw_discounts', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name',255)->nullable();
			$table->string('name_ar',255)->nullable();
			$table->string('discount_code',255)->nullable();
			$table->float('discount_value')->nullable();
			$table->enum('min_require', ['none', 'purchase_amount']);
			$table->float('min_require_amount')->nullable();
			$table->enum('types', ['percentage', 'fixed_amount']);
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
        Schema::dropIfExists('lw_discounts');
    }
}
