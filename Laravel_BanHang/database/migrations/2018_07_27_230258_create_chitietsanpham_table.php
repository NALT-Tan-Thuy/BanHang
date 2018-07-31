<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->text('img')->nulable();
            $table->integer('noibat')->default(0);
            $table->double('giagoc', 15, 0)->default(0);
            $table->integer('khuyenmai')->default(0);
            $table->text('mota')->nullable();
            $table->text('tieudethongtin')->nullable();
            $table->integer('luotthich')->default(0);
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
