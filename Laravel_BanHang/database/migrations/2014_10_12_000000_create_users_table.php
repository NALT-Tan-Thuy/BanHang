<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('matkhau');
            $table->string('gioitinh', 10);
            $table->string('hoten');
            $table->text('img');
            $table->date('ngaysinh');
            $table->string('sodienthoai');
            $table->string('tinh');
            $table->string('huyen');
            $table->string('diachi');
            $table->string('nghenghiep');
            $table->text('sothich');
            $table->text('gioithieubanthan');
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
