<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tendangnhap');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phanquyen');
            $table->string('gioitinh', 10);
            $table->string('hoten');
            $table->text('img')->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('sodienthoai')->nullable();
            $table->integer('id_tinh_thanhpho')->unsigned();
            $table->foreign('id_tinh_thanhpho')->references('id')->on('tinh_thanhpho');
            $table->integer('id_quan_huyen')->unsigned();
            $table->foreign('id_quan_huyen')->references('id')->on('quan_huyen');
            $table->integer('id_xa_phuong')->unsigned();
            $table->foreign('id_xa_phuong')->references('id')->on('xa_phuong');
            $table->string('nghenghiep')->nullable();
            $table->text('sothich')->nullable();
            $table->text('gioithieubanthan')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
