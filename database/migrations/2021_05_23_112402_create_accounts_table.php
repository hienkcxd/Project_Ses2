<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Account')->unique();
            $table->string('Password');
            $table->string('Email');
            $table->string('EmployeeID');
            $table->string('Role');
            $table->foreign('EmployeeID')->references('EmployeeID')->on('employee_lists');
            $table->foreign('Role')->references('Role')->on('roles');
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
        Schema::dropIfExists('accounts');
    }
}
