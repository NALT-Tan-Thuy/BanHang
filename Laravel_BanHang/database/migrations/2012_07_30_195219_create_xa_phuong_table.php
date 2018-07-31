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
            $table->string('ten')->nullable();
            $table->string('donvi')->nullable();
            $table->string('tenkhongdau')->nullable();
            $table->string('tendaydu')->nullable();
            $table->string('tenthuong')->nullable();
            $table->string('tenhanhchinh')->nullable();
            $table->integer('code')->nullable();
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
