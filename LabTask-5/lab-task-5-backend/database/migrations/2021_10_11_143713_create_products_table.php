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
            $table->string('p_name');
            $table->timestamps();
            $table->string('p_code');
            $table->text('p_desc');
            $table->string('p_category');
            $table->double('p_price');
            $table->integer('p_quantity');
            $table->date('p_stock_date');
            $table->float('p_rating');
            $table->date('p_purchased');


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
