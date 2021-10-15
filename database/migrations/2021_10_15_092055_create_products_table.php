<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('product_code');
            $table->text('product_name');
            $table->integer('product_line');
            $table->integer('product_scale');
            $table->integer('product_vendor');
            $table->text('product_description');
            $table->integer('quantity_instock');
            $table->integer('buy_price');
            $table->integer('MSRP');
            $table->solfDeletes();
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
        Schema::dropIfExists('products');
    }
}
