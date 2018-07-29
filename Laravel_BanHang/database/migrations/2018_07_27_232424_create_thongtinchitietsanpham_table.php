<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongtinchitietsanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtinchitietsanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->text('img');
            $table->integer('id_chitietsanpham')->unsigned();
            $table->foreign('id_chitietsanpham')->references('id')->on('chitietsanpham');
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
        Schema::dropIfExists('thongtinchitietsanpham');
    }
}
