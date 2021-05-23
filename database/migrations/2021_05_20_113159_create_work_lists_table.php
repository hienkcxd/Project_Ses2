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
            $table->String('WorkName');
            $table->String('Address')->unique();
            $table->String('CusID');
            $table->String('EmpID');
            $table->string('WorkDesc');
            $table->foreign('CusID')->references('CusID')->on('customers');
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
