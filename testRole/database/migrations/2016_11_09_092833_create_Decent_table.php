<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Decent', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('app_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->integer('account_id')->unsigned();


            $table->foreign('app_id')->references('id')->on('Application');
            $table->foreign('role_id')->references('id')->on('Role');
            $table->foreign('account_id')->references('id')->on('Account');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Decent');
    }
}
