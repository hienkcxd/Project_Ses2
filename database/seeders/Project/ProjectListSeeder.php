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
            //Insert data decor căn hộ
//            ['ProjectID' => 'DCH01', 'ProjectName' => 'Căn Hộ Vinhomes Quận 1',         'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_01.jpg'],
//            ['ProjectID' => 'DCH02', 'ProjectName' => 'Căn Hộ Masteri Quận 2',          'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_02.jpg'],
//            ['ProjectID' => 'DCH03', 'ProjectName' => 'Căn Hộ Lumiere Resident Quận 7', 'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_03.jpg'],
//            ['ProjectID' => 'DCH04', 'ProjectName' => 'Căn Hộ D-Aqua Quận 8',           'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_04.jpg'],
//            ['ProjectID' => 'DCH05', 'ProjectName' => 'Căn Hộ Villa Park Quận 9',       'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_05.jpg'],
//            ['ProjectID' => 'DCH06', 'ProjectName' => 'Căn Hộ King Center Quận 10',     'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_06.jpg'],
//            ['ProjectID' => 'DCH07', 'ProjectName' => 'Căn Hộ Begenco Quận 11',         'TagName' => 'DCH', 'images' => 'images\Project\canho\DCH_bg_07.jpg'],
        ]);
    }
}
