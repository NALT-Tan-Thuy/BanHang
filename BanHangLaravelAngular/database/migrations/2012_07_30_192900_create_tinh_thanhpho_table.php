<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinhThanhphoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinh_thanhpho', function (Blueprint $table) {
            $table->integer('id')->unsigned()->primary();
            $table->string('ten')->nullable();
            $table->string('tenkhongdau')->nullable();
            $table->string('donvi')->nullable();
            $table->string('tendaydu')->nullable();
            $table->integer('code')->nullable();
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
        Schema::dropIfExists('tinh_thanhpho');
    }
}
