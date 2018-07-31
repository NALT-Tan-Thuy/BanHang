<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuanHuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quan_huyen', function (Blueprint $table) {
            $table->integer('id')->unsigned()->primary();
            $table->string('ten')->nullable();
            $table->string('donvi')->nullable();
            $table->string('tenkhongdau')->nullable();
            $table->string('tendaydu')->nullable();
            $table->string('tenthuong')->nullable();
            $table->string('tenhanhchinh')->nullable();
            $table->integer('code')->nullable();
            $table->integer('id_tinh_thanhpho')->unsigned();
            $table->foreign('id_tinh_thanhpho')->references('id')->on('tinh_thanhpho');
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
        Schema::dropIfExists('quan_huyen');
    }
}
