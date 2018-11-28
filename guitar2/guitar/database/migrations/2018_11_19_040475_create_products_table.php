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
            $table->bigInteger('ID_PRODUCT')->autoIncrement();
            $table->string('NAME_PRODUCT',100);
            $table->float('PRICE');
            $table->string('DESCRIPTION',1000);
            $table->string('IMAGE',100);
            $table->integer('ID_CATEGORY')->unsigned()->nullable();
            $table->timestamps();
        });


        Schema::table('products', function($table) {
            $table->foreign('ID_CATEGORY')->references('ID_CATEGORY')->on('categories')->onDelete('cascade');
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
