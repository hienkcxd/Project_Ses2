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

            ['Account' => 'hienkcxd', 'Password' => '$2y$10$fE2Tk9eQ9Jc7IwrcpeI0C.HOMZOlytmZewu.Dt8RR2GX6NIYtzFXm','Email' => 'hien03kc@gmail.com', 'EmployeeID' => 'A01','Role' => '2'],
            ['Account' => 'employ', 'Password' => '$2y$10$fE2Tk9eQ9Jc7IwrcpeI0C.HOMZOlytmZewu.Dt8RR2GX6NIYtzFXm','Email' => 'hien@gmail.com', 'EmployeeID' => 'A02','Role' => '1'],

        ]);
    }
}
