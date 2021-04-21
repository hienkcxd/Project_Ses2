<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_lists', function (Blueprint $table) {
            $table->increments('MarketID');
            $table->string('DistrictName');
            $table->string('WardName');
            $table->string('Year');
            $table->integer('Thang_1');
            $table->integer('Thang_2');
            $table->integer('Thang_3');
            $table->integer('Thang_4');
            $table->integer('Thang_5');
            $table->integer('Thang_6');
            $table->integer('Thang_7');
            $table->integer('Thang_8');
            $table->integer('Thang_9');
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
        Schema::dropIfExists('market_lists');
    }
}
