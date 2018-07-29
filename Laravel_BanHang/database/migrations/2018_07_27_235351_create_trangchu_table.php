<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrangchuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trangchu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenshop');
            $table->string('tieudetrai');
            $table->string('tieudeduoi');
            $table->string('email');
            $table->string('sodienthoai');
            $table->string('diachi');
            $table->string('giomodongcua');
            $table->text('tieudecamon');
            $table->text('noidungcamon');
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
        Schema::dropIfExists('trangchu');
    }
}
