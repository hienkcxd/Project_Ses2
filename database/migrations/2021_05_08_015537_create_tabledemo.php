<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabledemo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabledemo', function (Blueprint $table) {
            $table->increments('MarketID');
            $table->string('DistrictName');
            $table->string('WardName');
            $table->string('Year');
            $table->integer('Thang_01');
            $table->integer('Thang_02');
            $table->integer('Thang_03');
            $table->integer('Thang_04');
            $table->integer('Thang_05');
            $table->integer('Thang_06');
            $table->integer('Thang_07');
            $table->integer('Thang_08');
            $table->integer('Thang_09');
            $table->integer('Thang_10');
            $table->integer('Thang_11');
            $table->integer('Thang_12');
            $table->foreign('DistrictName')->references('DistrictName')->on('district_lists');
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
        Schema::dropIfExists('tabledemo');
    }
}
