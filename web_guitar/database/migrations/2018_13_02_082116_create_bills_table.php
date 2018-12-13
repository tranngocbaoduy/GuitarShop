<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('bills');
        Schema::create('bills', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('time');
            $table->float('total');
            $table->bigInteger('id_customer_info');
            $table->bigInteger('id_customer')->default(0);
            $table->timestamps();
        });


        Schema::table('bills', function ($table) {
            $table->foreign('id_customer_info')->references('id')->on('customers_info');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
