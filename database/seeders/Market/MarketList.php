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
        //Gia dat quan 1 - 2020.
            ['MarketID'=> 1, 'DistrictName'=> 'Quận 1', 'WardName'=>'Bến Nghé', 'Year'=>'2020',
             'Thang_1'=>750, 'Thang_2'=>725, 'Thang_3'=>800, 'Thang_4'=>825,
             'Thang_5'=>775, 'Thang_6'=>800, 'Thang_7'=>850, 'Thang_8'=>900,
             'Thang_9'=>950, 'Thang_10'=>935, 'Thang_11'=>800, 'Thang_12'=>990,
                ],
            ['MarketID'=> 2, 'DistrictName'=> 'Quận 1', 'WardName'=>'Bến Thành', 'Year'=>'2020',
                'Thang_1'=>650, 'Thang_2'=>625, 'Thang_3'=>700, 'Thang_4'=>725,
                'Thang_5'=>675, 'Thang_6'=>750, 'Thang_7'=>700, 'Thang_8'=>800,
                'Thang_9'=>850, 'Thang_10'=>835, 'Thang_11'=>790, 'Thang_12'=>890,
            ],
            ['MarketID'=> 3, 'DistrictName'=> 'Quận 1', 'WardName'=>'Cầu Kho', 'Year'=>'2020',
                'Thang_1'=>250, 'Thang_2'=>225, 'Thang_3'=>280, 'Thang_4'=>225,
                'Thang_5'=>275, 'Thang_6'=>300, 'Thang_7'=>250, 'Thang_8'=>300,
                'Thang_9'=>275, 'Thang_10'=>235, 'Thang_11'=>335, 'Thang_12'=>350,
            ],
            ['MarketID'=> 4, 'DistrictName'=> 'Quận 1', 'WardName'=>'Cầu Ông Lãnh', 'Year'=>'2020',
                'Thang_1'=>300, 'Thang_2'=>325, 'Thang_3'=>350, 'Thang_4'=>325,
                'Thang_5'=>295, 'Thang_6'=>300, 'Thang_7'=>350, 'Thang_8'=>330,
                'Thang_9'=>300, 'Thang_10'=>315, 'Thang_11'=>310, 'Thang_12'=>320,
            ],
            ['MarketID'=> 5, 'DistrictName'=> 'Quận 1', 'WardName'=>'Cô Giang', 'Year'=>'2020',
                'Thang_1'=>200, 'Thang_2'=>225, 'Thang_3'=>215, 'Thang_4'=>235,
                'Thang_5'=>220, 'Thang_6'=>240, 'Thang_7'=>225, 'Thang_8'=>250,
                'Thang_9'=>265, 'Thang_10'=>255, 'Thang_11'=>250, 'Thang_12'=>245,
            ],
            ['MarketID'=> 6, 'DistrictName'=> 'Quận 1', 'WardName'=>'Đa Kao', 'Year'=>'2020',
                'Thang_1'=>300, 'Thang_2'=>325, 'Thang_3'=>315, 'Thang_4'=>335,
                'Thang_5'=>320, 'Thang_6'=>340, 'Thang_7'=>325, 'Thang_8'=>350,
                'Thang_9'=>365, 'Thang_10'=>355, 'Thang_11'=>350, 'Thang_12'=>345,
            ],
            ['MarketID'=> 7, 'DistrictName'=> 'Quận 1', 'WardName'=>'Nguyễn Cư Trinh', 'Year'=>'2020',
                'Thang_1'=>320, 'Thang_2'=>345, 'Thang_3'=>335, 'Thang_4'=>335,
                'Thang_5'=>320, 'Thang_6'=>340, 'Thang_7'=>325, 'Thang_8'=>350,
                'Thang_9'=>365, 'Thang_10'=>355, 'Thang_11'=>350, 'Thang_12'=>355,
            ],
            ['MarketID'=> 8, 'DistrictName'=> 'Quận 1', 'WardName'=>'Nguyễn Thái Bình', 'Year'=>'2020',
                'Thang_1'=>520, 'Thang_2'=>545, 'Thang_3'=>555, 'Thang_4'=>535,
                'Thang_5'=>590, 'Thang_6'=>580, 'Thang_7'=>595, 'Thang_8'=>605,
                'Thang_9'=>615, 'Thang_10'=>605, 'Thang_11'=>620, 'Thang_12'=>635,
            ],
            ['MarketID'=> 9, 'DistrictName'=> 'Quận 1', 'WardName'=>'Phạm Ngũ Lão', 'Year'=>'2020',
                'Thang_1'=>430, 'Thang_2'=>425, 'Thang_3'=>415, 'Thang_4'=>435,
                'Thang_5'=>440, 'Thang_6'=>423, 'Thang_7'=>452, 'Thang_8'=>440,
                'Thang_9'=>455, 'Thang_10'=>445, 'Thang_11'=>463, 'Thang_12'=>473,
            ],
            ['MarketID'=> 10, 'DistrictName'=> 'Quận 1', 'WardName'=>'Tân Định', 'Year'=>'2020',
                'Thang_1'=>232, 'Thang_2'=>223, 'Thang_3'=>241, 'Thang_4'=>233,
                'Thang_5'=>247, 'Thang_6'=>231, 'Thang_7'=>237, 'Thang_8'=>253,
                'Thang_9'=>262, 'Thang_10'=>271, 'Thang_11'=>260, 'Thang_12'=>275,
            ],




        ]);
    }
}
