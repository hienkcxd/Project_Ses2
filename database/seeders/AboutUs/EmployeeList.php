<?php

namespace Database\Seeders\AboutUs;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeList extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_lists')->insert([
            ['EmployeeID'=>'A01','EmpName'=>'Đặng Thế Hiển','Position'=>'Tư Vấn Kết Cấu'],
            ['EmployeeID'=>'A02','EmpName'=>'Lưu Mộng Thúy','Position'=>'Tư Vấn Kiến Trức'],
            ['EmployeeID'=>'A03','EmpName'=>'Nguyễn Hùng Vương','Position'=>'Tư Vấn Kết Cấu'],
            ['EmployeeID'=>'A04','EmpName'=>'Nguyễn Hoàng Duy','Position'=>'Tư Vấn Kiến Trức'],
            ['EmployeeID'=>'A05','EmpName'=>'Phan Tấn Phát','Position'=>'Kỹ Sư Hiện Trường'],
            ['EmployeeID'=>'A06','EmpName'=>'Nguyễn Minh Huân','Position'=>'Kỹ Sư Hiện Trường'],
            ['EmployeeID'=>'A07','EmpName'=>'Võ Nhật Huy','Position'=>'Kỹ Sư Hiện Trường'],
            ['EmployeeID'=>'A08','EmpName'=>'Trương Tam Phong','Position'=>'Kỹ Sư Hiện Trường'],
        ]);
    }
}
