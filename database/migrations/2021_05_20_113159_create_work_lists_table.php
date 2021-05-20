<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_lists', function (Blueprint $table) {
            $table->String('WorkID')->primary();
            $table->String('WorkName')->unique();
            $table->String('Address');
            $table->String('CusID');
            $table->string('Price');
            $table->String('EmpID');
            $table->String('EmpName');
            $table->string('WorkDesc');
            $table->foreign('CusID')->references('CusID')->on('customers');
            $table->foreign('Address')->references('Address')->on('customers');
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
        Schema::dropIfExists('work_lists');
    }
}
