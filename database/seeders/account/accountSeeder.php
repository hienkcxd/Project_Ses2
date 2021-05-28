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

            ['Account' => 'hien03kc', 'Password' => '$2y$10$/T0ahVQMnhoteuBse9Yf5.LJaq.wrFqiUnzqzF3A0chsYcvu7rH0O','Email' => 'hien03kc@gmail.com', 'EmployeeID' => 'A01','Role' => '2'],
            ['Account' => 'demo0001', 'Password' => '$2y$10$/T0ahVQMnhoteuBse9Yf5.LJaq.wrFqiUnzqzF3A0chsYcvu7rH0O','Email' => 'employ001@gmail.com', 'EmployeeID' => 'A02','Role' => '1'],
            ['Account' => 'demo0002', 'Password' => '$2y$10$/T0ahVQMnhoteuBse9Yf5.LJaq.wrFqiUnzqzF3A0chsYcvu7rH0O','Email' => 'employ002@gmail.com', 'EmployeeID' => 'A03','Role' => '1'],
            ['Account' => 'demo0003', 'Password' => '$2y$10$/T0ahVQMnhoteuBse9Yf5.LJaq.wrFqiUnzqzF3A0chsYcvu7rH0O','Email' => 'employ003@gmail.com', 'EmployeeID' => 'A04','Role' => '1'],

        ]);
    }
}
