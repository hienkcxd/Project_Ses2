<?php

namespace Database\Seeders\work;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_lists')->insert([
            ['WorkID'=>'TC-DCH01', 'WorkName'=>'Decor Căn Hộ','Address'=>'Căn hộ 404 - Everich Quận 5',
             'CusID'=>'CS01','EmpID'=>'A05', 'WorkDesc'=>'Khơi công đầu tháng 6, khách hàng yêu cầu làm trong 1 tháng.'],

            ['WorkID'=>'TC-NP01', 'WorkName'=>'Thi Công Nhà Phố','Address'=>'46 Mai Chí Thọ - Quận 2',
                'CusID'=>'CS02','EmpID'=>'A06', 'WorkDesc'=>'Khởi công đầu tháng 5, cuối năm giao nhà.'],

            ['WorkID'=>'TC-BT01', 'WorkName'=>'Xây Dựng Biệt Thự','Address'=>'305 Nguyễn Văn Linh - Quận 7',
                'CusID'=>'CS03','EmpID'=>'A08', 'WorkDesc'=>'Khơi công đầu tháng 3, tháng 11 giao nhà.'],

            ['WorkID'=>'TC-DCH02', 'WorkName'=>'Decor Căn Hộ','Address'=>'Căn hộ 313 - Lê Duẫn Quận 1',
                'CusID'=>'CS04','EmpID'=>'A07', 'WorkDesc'=>'Khởi công giữa tháng 5, đầu tháng 6 giao nhà.'],

            ['WorkID'=>'BH-NP01', 'WorkName'=>'Bảo Hành Nhà Phố','Address'=>'101 Nguyễn Văn Đậu - Quận Bình Thạnh',
                'CusID'=>'CS05','EmpID'=>'A08', 'WorkDesc'=>'Bảo hành cuối tháng 5, 2 tuần bàn giao.'],

            ['WorkID'=>'TK-BT01', 'WorkName'=>'Thiết Kế Kiến Trúc Biệt Thự','Address'=>'390 Cách Mạng Tháng 8 - Quận 3',
                'CusID'=>'CS06','EmpID'=>'A08', 'WorkDesc'=>'Đầu tháng 6, 10 ngày sau chốt phương án đầu tiên'],

            ['WorkID'=>'TC-NTC01', 'WorkName'=>'Xây Dựng Nhà Tân Cổ','Address'=>'40 Đinh Tiên Hoàng - Quận 1',
                'CusID'=>'CS07','EmpID'=>'A05', 'WorkDesc'=>'Đầu tháng 6 khởi công, cuối tháng 12 giao nhà.'],

            ['WorkID'=>'TC-DCH03', 'WorkName'=>'Decor Căn Hộ','Address'=>'Căn hộ 505 - Everich Quận 5',
                'CusID'=>'CS08','EmpID'=>'A05', 'WorkDesc'=>'Khởi công tháng 4, cuối tháng 5 giao nhà'],

            ['WorkID'=>'TC-NP02', 'WorkName'=>'Thi Công Nhà Phố','Address'=>'35 Hoàng Hoa Thám - Quận Tân Bình',
                'CusID'=>'CS09','EmpID'=>'A06', 'WorkDesc'=>'Đầu tháng 5 gặp mặt lên phương án kiến trúc.'],

            ['WorkID'=>'TC-DCH04', 'WorkName'=>'Decor Căn Hộ','Address'=>'12 Bạch Đằng - Quận Bình Thạnh',
                'CusID'=>'CS10','EmpID'=>'A08', 'WorkDesc'=>'Đầu tháng 6 gặp mặt lên phương án kiến trúc.'],

            ['WorkID'=>'TC-DCH05', 'WorkName'=>'Decor Căn Hộ','Address'=>'Căn hộ 807 - lancer Quận 2',
                'CusID'=>'CS11','EmpID'=>'A06', 'WorkDesc'=>'Đầu tháng 6 khởi công, 3 tuần giao nhà'],

            ['WorkID'=>'NC-NP01', 'WorkName'=>'Nâng Cấp Nhà Phố','Address'=>'80 Điện Biên Phủ - Quận Bình Thạnh',
                'CusID'=>'CS12','EmpID'=>'A05', 'WorkDesc'=>'Đầu tháng 5 gặp mặt và bàn phương án kết cấu.'],

            ['WorkID'=>'TC-BT02', 'WorkName'=>'Xây Dựng Biệt Thự','Address'=>'31 Lê Duẫn - Quận 1',
                'CusID'=>'CS13','EmpID'=>'A07', 'WorkDesc'=>'Khởi công đầu tháng 4, tháng 11 giao nhà'],

            ['WorkID'=>'TC-NT01', 'WorkName'=>'Thi Công Nội Thất','Address'=>'44 Lê Thánh Tôn- Quận 1',
                'CusID'=>'CS14','EmpID'=>'A07', 'WorkDesc'=>'Tháng 6 thi công, 1 tháng giao nhà.'],

            ['WorkID'=>'TC-NT02', 'WorkName'=>'Thi Công Nội Thất','Address'=>'70 Bùi Viện - Quận 1',
                'CusID'=>'CS15','EmpID'=>'A07', 'WorkDesc'=>'Tháng 5 thi công, 3 tuần giao nhà.'],

        ]);
    }
}
