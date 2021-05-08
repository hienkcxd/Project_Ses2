<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ward_lists', function (Blueprint $table) {
            $table->increments('WardID');
            $table->string('DistrictName');
            $table->integer('DistrictID');
            $table->string('WardName');
            $table->foreign('DistrictName')->references('DistrictName')->on('district_lists');
            $table->foreign('DistrictID')->references('DistrictID')->on('district_lists');
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
        Schema::dropIfExists('ward_lists');
    }
}
