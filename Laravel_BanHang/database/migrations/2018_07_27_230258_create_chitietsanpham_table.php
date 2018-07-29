<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietsanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietsanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->text('img');
            $table->integer('noibat');
            $table->double('giagoc', 15, 0);
            $table->integer('khuyenmai');
            $table->text('mota');
            $table->text('tieudethongtin');
            $table->integer('luotthich');
            $table->integer('id_sanpham')->unsigned();
            $table->foreign('id_sanpham')->references('id')->on('sanpham');
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
        Schema::dropIfExists('chitietsanpham');
    }
}
