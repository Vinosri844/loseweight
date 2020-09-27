<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLwCategoryProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lw_category_products', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('product_id');
			$table->foreign('product_id', 'lw_category_products_product_id_fk_privilege')->references('id')->on('lw_products')->onDelete('cascade');
			$table->unsignedInteger('category_id');
			$table->foreign('category_id', 'lw_category_products_category_id_fk_privilege')->references('id')->on('lw_categories')->onDelete('cascade');
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
        Schema::dropIfExists('lw_category_products');
    }
}
