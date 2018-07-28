<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitiethoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soluong');
            $table->string('kichthuoc');
            $table->integer('thanhtoanhoadonchitiet')->default(0);;
            $table->integer('id_hoadon')->unsigned();
            $table->foreign('id_hoadon')->references('id')->on('hoadon');
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
        Schema::dropIfExists('chitiethoadon');
    }
}
