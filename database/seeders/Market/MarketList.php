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

        ]);
    }
}
