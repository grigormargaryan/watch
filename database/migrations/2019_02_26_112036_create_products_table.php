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
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('category_id')->unsigned();
            $table->integer('sub_categorys_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('color_id')->nullable();
            $table->integer('belt_id')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('quantity')->nullable();
            $table->integer('price');
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
