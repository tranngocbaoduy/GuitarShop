<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('categories');
        Schema::create('categories', function (Blueprint $table) {
            $table->integer('ID_CATEGORY')->autoIncrement()->unsigned();
            $table->string('NAME_CATEGORY');
            $table->string('DESCRIPTION',2000);
            $table->timestamps();
        });

//        Schema::create('categories', function (Blueprint $table) {
            ///
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
