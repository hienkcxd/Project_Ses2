<?php

    namespace Database\Seeders\Market;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarketList extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('market_lists')->insert([
        //update các phường quận 1.
            ['MarketID'=> 1, 'DistrictName'=> 'Quận 1', 'WardName'=>'Bến Nghé', 'Year'=>'2020',
             'Thang_1'=>25000, 'Thang_2'=>25000, 'Thang_3'=>25000, 'Thang_4'=>25000,
             'Thang_5'=>25000, 'Thang_6'=>25000, 'Thang_7'=>25000, 'Thang_8'=>25000,
             'Thang_9'=>25000, 'Thang_10'=>25000, 'Thang_11'=>25000, 'Thang_12'=>25000,
                ],




        ]);
    }
}
