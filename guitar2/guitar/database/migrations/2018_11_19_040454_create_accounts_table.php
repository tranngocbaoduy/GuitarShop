<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('accounts');
        Schema::create('accounts', function (Blueprint $table) {
            $table->string('USERNAME')->unique();
            $table->string('PASSWORD');
            $table->string('FIRST_NAME')->nullable();
            $table->string('LAST_NAME')->nullable();
            $table->string('ADDRESS')->nullable();
            $table->string('EMAIL')->nullable();
            $table->integer('ID_ROLE')->unsigned();

            $table->timestamps();
        });

        Schema::table('accounts', function (Blueprint $table) {
            $table->primary('USERNAME');
            $table->foreign('ID_ROLE')->references('ID_ROLE')->on('roles')->onUpdate('cascade')->onDetele('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
