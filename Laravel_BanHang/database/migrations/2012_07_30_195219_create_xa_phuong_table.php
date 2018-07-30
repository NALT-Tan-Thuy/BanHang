<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXaPhuongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xa_phuong', function (Blueprint $table) {
            $table->integer('id')->unsigned()->primary();
            $table->string('ten');
            $table->string('donvi');
            $table->string('tenkhongdau');
            $table->string('tendaydu');
            $table->string('tenthuong');
            $table->string('tenhanhchinh');
            $table->integer('code');
            $table->integer('id_quan_huyen')->unsigned();
            $table->foreign('id_quan_huyen')->references('id')->on('quan_huyen');
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
        Schema::dropIfExists('xa_phuong');
    }
}
