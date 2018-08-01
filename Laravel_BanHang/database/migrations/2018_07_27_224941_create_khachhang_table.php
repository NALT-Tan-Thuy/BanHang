<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoten');
            $table->string('gioitinh');
            $table->string('email');
            $table->string('sodienthoai');
            $table->integer('id_tinh_thanhpho')->unsigned();
            $table->foreign('id_tinh_thanhpho')->references('id')->on('tinh_thanhpho');
            $table->integer('id_quan_huyen')->unsigned();
            $table->foreign('id_quan_huyen')->references('id')->on('quan_huyen');
            $table->integer('id_xa_phuong')->unsigned();
            $table->foreign('id_xa_phuong')->references('id')->on('xa_phuong');
            $table->text('ghichu')->nullable();
            $table->text('loaithanhtoan');
            $table->integer('luotthich')->default(0);
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
        Schema::dropIfExists('khachhang');
    }
}
