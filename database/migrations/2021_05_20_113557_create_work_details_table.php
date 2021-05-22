<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_details', function (Blueprint $table) {
            $table->increments('WorkDetail_ID');
            $table->String('WorkID');
            $table->String('CusID');
            $table->String('CusPhone');
            $table->String('Address');
            $table->integer('Price_Int');
            $table->String('EmpName');
            $table->String('EmpPhone');
            $table->string('registration');
            $table->string('construction');
            $table->string('Architecture');
            $table->string('Progress');
            $table->foreign('CusID')->references('CusID')->on('customers');
            $table->foreign('Address')->references('Address')->on('customers');
            $table->foreign('WorkID')->references('WorkID')->on('work_lists');
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
        Schema::dropIfExists('work_details');
    }
}
