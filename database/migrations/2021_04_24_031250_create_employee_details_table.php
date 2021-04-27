<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_details', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('EmployeeID');
            $table->foreign('EmployeeID')->references('EmployeeID')->on('employee_lists');
            $table->string('empName');
            $table->string('position');
            $table->string('describe');
            $table->string('email');
            $table->string('phone');
            $table->string('facebook');
            $table->string('zalo');
            $table->string('images');
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
        Schema::dropIfExists('employee_details');
    }
}
