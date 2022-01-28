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
            $table->timestamps();

            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('category_id');
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('image')->nullable();
            //  в наличии, хозир магазинда борми 1 xa, 0 yoq?
            $table->integer('on_stock')->nullable();
            $table->boolean('hit')->nullable()->default(0);
            $table->boolean('recommended')->nullable()->default(0);
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
