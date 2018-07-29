<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('tinh');
            $table->string('huyen');
            $table->string('diachi');
            $table->text('ghichu');
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
