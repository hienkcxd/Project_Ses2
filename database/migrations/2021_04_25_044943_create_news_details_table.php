<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_details', function (Blueprint $table) {
            $table->string('NewsDetailID')->primary();
            $table->string('NewsID');
            $table->string('NewsName');
            $table->string('NewsTagName');
            $table->string('Day');
            $table->string('Year');
            $table->string('images');
            $table->text('contentTop');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->text('contentMiddle');
            $table->string('image4');
            $table->string('image5');
            $table->string('image6');
            $table->text('contentBot');
            $table->string('image7');
            $table->string('image8');
            $table->string('image9');
            $table->foreign('NewsID')->references('NewsID')->on('news_lists');
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
        Schema::dropIfExists('news_details');
    }
}
