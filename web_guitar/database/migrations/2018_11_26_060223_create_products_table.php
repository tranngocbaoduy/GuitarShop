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
        Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('name',100);
            $table->float('price');
            $table->integer('quantity');
            $table->string('description',1000)->nullable();
            $table->string('image',100)->nullable();
            $table->integer('id_category')->unsigned()->nullable();
            $table->integer('id_brand')->unsigned()->nullable();
            $table->string('path')->nullable();
            $table->string('action')->nullable();
            $table->bigInteger('hottest')->default('0');
            $table->timestamps();
        });


        Schema::table('products', function($table) {
            $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_brand')->references('id')->on('brands')->onUpdate('cascade');
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
