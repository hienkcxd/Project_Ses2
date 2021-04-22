<?php

namespace Database\Seeders\Project;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_details')->insert([
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======

=======
<<<<<<< HEAD
=======
>>>>>>> origin/Vuong
>>>>>>> origin/Duy
//            [   'ProDetailID' => 'DCH01', 'ProjectID'       => 'DCH01',
//                'DateFinish'  => 'January 2020', 'Location' => 'Lê Duẩn, Quận 1', 'Price' => '500 triệu VND', 'Client' => 'Mr.Hien', 'tagName' => 'Decor Căn Hộ',
//                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_01.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_01.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'DCH02', 'ProjectID'       => 'DCH02',
//                'DateFinish'  => 'March 2020', 'Location' => 'Mai Chí Thọ, Quận 2', 'Price' => '600 triệu VND', 'Client' => 'Mr.Duy', 'tagName' => 'Decor Căn Hộ',
//                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_02.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_02.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'DCH03', 'ProjectID'       => 'DCH03',
//                'DateFinish'  => 'April 2021', 'Location' => 'Huỳnh Tấn Phát, Quận 7', 'Price' => '800 triệu VND', 'Client' => 'Mr.Vuong', 'tagName' => 'Decor Căn Hộ',
//                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_03.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_03.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'DCH04', 'ProjectID'       => 'DCH04',
//                'DateFinish'  => 'January 2021', 'Location' => 'Nguyễn Thị Thập, Quận 8', 'Price' => '900 triệu VND', 'Client' => 'Mr.Minh', 'tagName' => 'Decor Căn Hộ',
//                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_04.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_04.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'DCH05', 'ProjectID'       => 'DCH05',
//                'DateFinish'  => 'March 2021', 'Location' => 'Hai Bà Trưng, Quận 9', 'Price' => '400 triệu VND', 'Client' => 'Mr.An', 'tagName' => 'Decor Căn Hộ',
//                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_05.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_05.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'DCH06', 'ProjectID'       => 'DCH06',
//                'DateFinish'  => 'February 2021', 'Location' => 'Hoàng Hoa Thám, Quận 10', 'Price' => '700 triệu VND', 'Client' => 'Mr.Thuy', 'tagName' => 'Decor Căn Hộ',
//                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_06.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_06.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'DCH07', 'ProjectID'       => 'DCH07',
//                'DateFinish'  => 'April 2021', 'Location' => 'Lương Định Của, Quận 11', 'Price' => '300 triệu VND', 'Client' => 'Mr.Lanh', 'tagName' => 'Decor Căn Hộ',
//                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_07.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_07.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//
//            [   'ProDetailID' => 'NP01', 'ProjectID'       => 'NP01',
//                'DateFinish'  => 'April 2021', 'Location' => 'Lê Duẩn, Quận 1', 'Price' => '3,4 tỷ VND', 'Client' => 'Mr.Hien', 'tagName' => 'Nhà Phố',
//                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_01.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_01.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'NP02', 'ProjectID'       => 'NP02',
//                'DateFinish'  => 'March 2021', 'Location' => 'Mai Chí Thọ, Quận 2', 'Price' => '3,2 tỷ VND', 'Client' => 'Mr.Minh', 'tagName' => 'Nhà Phố',
//                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_02.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_02.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'NP03', 'ProjectID'       => 'NP03',
//                'DateFinish'  => 'February 2021', 'Location' => 'Huỳnh Tấn Phát, Quận 7', 'Price' => '3 tỷ VND', 'Client' => 'Mr.Vuong', 'tagName' => 'Nhà Phố',
//                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_03.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_03.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'NP04', 'ProjectID'       => 'NP04',
//                'DateFinish'  => 'January 2021', 'Location' => 'Nguyễn Thị Thập, Quận 8', 'Price' => '2,9 tỷ VND', 'Client' => 'Mr.Duy', 'tagName' => 'Nhà Phố',
//                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_04.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_04.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'NP05', 'ProjectID'       => 'NP05',
//                'DateFinish'  => 'March 2021', 'Location' => 'Hai Bà Trưng, Quận 9', 'Price' => '2,5 tỷ VND', 'Client' => 'Mr.An', 'tagName' => 'Nhà Phố',
//                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_05.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_05.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'NP06', 'ProjectID'       => 'NP06',
//                'DateFinish'  => 'April 2021', 'Location' => 'Hoàng Hoa Thám, Quận 10', 'Price' => '2,1 tỷ VND', 'Client' => 'Mr.Thuy', 'tagName' => 'Nhà Phố',
//                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_06.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_06.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'NP07', 'ProjectID'       => 'NP07',
//                'DateFinish'  => 'February 2021', 'Location' => 'Lương Định Của, Quận 11', 'Price' => '2,3 tỷ VND', 'Client' => 'Mr.Lanh', 'tagName' => 'Nhà Phố',
//                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_07.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_07.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
//
//            [   'ProDetailID' => 'NP08', 'ProjectID'       => 'NP08',
//                'DateFinish'  => 'January 2021', 'Location' => 'Lý Phục Man, Quận 12', 'Price' => '2,4 tỷ VND', 'Client' => 'Mr.Chi', 'tagName' => 'Nhà Phố',
//                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_08.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_08.jpg',
//                'contentTop'  => 'Đây là nội dung bên trên',
//                'contentBot'  => 'Đây là nội dung giới thiệu bên dưới' ],
>>>>>>> main
<<<<<<< HEAD
=======

>>>>>>> origin/Duy


        ]);
    }
}
