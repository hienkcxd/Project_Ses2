<?php

namespace Database\Seeders\account;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class accountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([

            ['Account' => '123', 'Password' => '111','Email' => 'hien03kc@gmail.com', 'EmployeeID' => 'A08','Role' => '1'],
            ['Account' => '1234', 'Password' => '1111','Email' => 'hien03kc@gmail.com', 'EmployeeID' => 'A01','Role' => '2'],

        ]);
    }
}
