<?php

namespace Database\Seeders\Project;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_lists')->insert([


            //Insert data nhà phố
            ['ProjectID' => 'NP01', 'ProjectName' => 'Nhà Phố Quận 1',         'TagName' => 'NP', 'images' => 'images\Project\nhapho\NP_bg_01.jpg'],
            ['ProjectID' => 'NP02', 'ProjectName' => 'Nhà Phố Quận 2',         'TagName' => 'NP', 'images' => 'images\Project\nhapho\NP_bg_02.jpg'],
            ['ProjectID' => 'NP03', 'ProjectName' => 'Nhà Phố Quận 3',         'TagName' => 'NP', 'images' => 'images\Project\nhapho\NP_bg_03.jpg'],
            ['ProjectID' => 'NP04', 'ProjectName' => 'Nhà Phố Quận 4',         'TagName' => 'NP', 'images' => 'images\Project\nhapho\NP_bg_04.jpg'],
            ['ProjectID' => 'NP05', 'ProjectName' => 'Nhà Phố Quận 5',         'TagName' => 'NP', 'images' => 'images\Project\nhapho\NP_bg_05.jpg'],
            ['ProjectID' => 'NP06', 'ProjectName' => 'Nhà Phố Quận 6',         'TagName' => 'NP', 'images' => 'images\Project\nhapho\NP_bg_06.jpg'],
            ['ProjectID' => 'NP07', 'ProjectName' => 'Nhà Phố Quận 7',         'TagName' => 'NP', 'images' => 'images\Project\nhapho\NP_bg_07.jpg'],
            ['ProjectID' => 'NP08', 'ProjectName' => 'Nhà Phố Quận 8',         'TagName' => 'NP', 'images' => 'images\Project\nhapho\NP_bg_08.jpg'],

//            //Insert data decor căn hộ
            ['ProjectID' => 'DCH01', 'ProjectName' => 'Căn Hộ Vinhomes Quận 1',         'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_01.jpg'],
            ['ProjectID' => 'DCH02', 'ProjectName' => 'Căn Hộ Masteri Quận 2',          'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_02.jpg'],
            ['ProjectID' => 'DCH03', 'ProjectName' => 'Căn Hộ Lumiere Resident Quận 7', 'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_03.jpg'],
            ['ProjectID' => 'DCH04', 'ProjectName' => 'Căn Hộ D-Aqua Quận 8',           'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_04.jpg'],
            ['ProjectID' => 'DCH05', 'ProjectName' => 'Căn Hộ Villa Park Quận 9',       'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_05.jpg'],
            ['ProjectID' => 'DCH06', 'ProjectName' => 'Căn Hộ King Center Quận 10',     'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_06.jpg'],
            ['ProjectID' => 'DCH07', 'ProjectName' => 'Căn Hộ Begenco Quận 11',         'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_07.jpg'],

//              insert data biet thu
            ['ProjectID' => 'BT01', 'ProjectName' => 'Biệt Thự Hiện Đại Quận 1',  'TagName' => 'BT', 'images' => 'images\Project\bietthu\BT_bg_01.jpg'],
            ['ProjectID' => 'BT02', 'ProjectName' => 'Biệt Thự Hiện Đại Quận 2',  'TagName' => 'BT', 'images' => 'images\Project\bietthu\BT_bg_02.jpg'],
            ['ProjectID' => 'BT03', 'ProjectName' => 'Biệt Thự Hiện Đại Quận 3',  'TagName' => 'BT', 'images' => 'images\Project\bietthu\BT_bg_03.jpg'],
            ['ProjectID' => 'BT04', 'ProjectName' => 'Biệt Thự Hiện Đại Quận 4 ', 'TagName' => 'BT', 'images' => 'images\Project\bietthu\BT_bg_04.jpg'],
            ['ProjectID' => 'BT05', 'ProjectName' => 'Biệt Thự Hiện Đại Quận 5 ', 'TagName' => 'BT', 'images' => 'images\Project\bietthu\BT_bg_05.jpg'],
            ['ProjectID' => 'BT06', 'ProjectName' => 'Biệt Thự Hiện Đại Quận 6 ', 'TagName' => 'BT', 'images' => 'images\Project\bietthu\BT_bg_06.jpg'],
            ['ProjectID' => 'BT07', 'ProjectName' => 'Biệt Thự Hiện Đại Quận 7 ', 'TagName' => 'BT', 'images' => 'images\Project\bietthu\BT_bg_07.jpg'],
            ['ProjectID' => 'BT08', 'ProjectName' => 'Biệt Thự Hiện Đại Quận 8',  'TagName' => 'BT', 'images' => 'images\Project\bietthu\BT_bg_08.jpg'],


        //insert data nhà tân cổ
            ['ProjectID' => 'NTC01', 'ProjectName' => 'Nhà Tân Cổ Quận 1 ',   'TagName' => 'NTC', 'images' => 'images\Project\tanco\NTC_bg_01.jpg'],
            ['ProjectID' => 'NTC02', 'ProjectName' => 'Nhà Tân Cổ Quận 2 ',   'TagName' => 'NTC', 'images' => 'images\Project\tanco\NTC_bg_02.jpg'],
            ['ProjectID' => 'NTC03', 'ProjectName' => 'Nhà Tân Cổ Quận 3',    'TagName' => 'NTC', 'images' => 'images\Project\tanco\NTC_bg_03.jpg'],
            ['ProjectID' => 'NTC04', 'ProjectName' => 'Nhà Tân Cổ Quận 4',    'TagName' => 'NTC', 'images' => 'images\Project\tanco\NTC_bg_04.jpg'],
            ['ProjectID' => 'NTC05', 'ProjectName' => 'Nhà Tân Cổ Quận 5',    'TagName' => 'NTC', 'images' => 'images\Project\tanco\NTC_bg_05.jpg'],
            ['ProjectID' => 'NTC06', 'ProjectName' => 'Nhà Tân Cổ Quận 6',    'TagName' => 'NTC', 'images' => 'images\Project\tanco\NTC_bg_06.jpg'],
            ['ProjectID' => 'NTC07', 'ProjectName' => 'Nhà Tân Cổ Quận 7',    'TagName' => 'NTC', 'images' => 'images\Project\tanco\NTC_bg_07.jpg'],
            ['ProjectID' => 'NTC08', 'ProjectName' => 'Nhà Tân Cổ Quận 8 ',   'TagName' => 'NTC', 'images' => 'images\Project\tanco\NTC_bg_08.jpg'],


    ]);
    }
}
