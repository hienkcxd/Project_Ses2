<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_details', function (Blueprint $table) {
            $table->string('ProDetailID')->primary();
            $table->string('ProjectID');
            $table->string('DateFinish');
            $table->string('Location');
            $table->string('Price');
            $table->string('Client');
            $table->string('tagName');
            $table->string('imageTop');
            $table->string('imageBot');
            $table->text('contentTop');
            $table->text('contentBot');
            $table->foreign('ProjectID')->references('ProjectID')->on('project_lists');
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
        Schema::dropIfExists('project_details');
    }
}
