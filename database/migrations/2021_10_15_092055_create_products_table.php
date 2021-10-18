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
            $table->integer('product_code')->unique();
            $table->string('product_name');
            $table->string('product_line')->nullable();
            $table->integer('product_scale')->nullable();
            $table->string('product_vendor')->nullable();
            $table->string('product_description')->nullable();
            $table->integer('quantity_instock')->nullable();
            $table->integer('buy_price')->nullable();
            $table->integer('MSRP')->nullable();
            $table->softDeletes();
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
