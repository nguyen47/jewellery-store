<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->decimal('price');
            $table->decimal('discount');
            $table->integer('stock');
            $table->integer('category_id')->unsigned(); // unsigned
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('product_code');
            $table->integer('size');
            $table->string('image');
            $table->text('description');
            $table->string('slug');
            $table->string('status');
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
