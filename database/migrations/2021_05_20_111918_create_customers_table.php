<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->String('CusID')->primary();
            $table->String('CusName');
            $table->String('CusPhone');
            $table->String('WorkName');
            $table->String('Address')->unique();
            $table->String('EmpID');
            $table->String('EmpName');
            $table->String('EmpPhone');
            $table->string('Price');
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
        Schema::dropIfExists('customers');
    }
}
