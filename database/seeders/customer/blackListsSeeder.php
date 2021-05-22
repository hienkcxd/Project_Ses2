<?php

namespace Database\Seeders\customer;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class blackListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('black_lists')->insert([
            ['BlackCusID' => 1, 'BlackCusName' => 'Mr.Vũ','BlackCusPhone' => '0990911214', 'BlackCusDesc'=>'Giá đưa ra thấp hơn thị trường, nhưng đòi hỏi chất lượng quá cao',],
            ['BlackCusID' => 2, 'BlackCusName' => 'Mr.Tuấn','BlackCusPhone' => '0988312343', 'BlackCusDesc'=>'Đã hoàn thành tư vấn, thiết kế sơ bộ, nhưng lại chọn nhà thầu khác và không trả tiền',],
            ['BlackCusID' => 3, 'BlackCusName' => 'Ms.Phương','BlackCusPhone' => '0168990321', 'BlackCusDesc'=>'Xin nhiều lần các bản thiết kế nhưng chưa hợp tác lần nào',],
            ['BlackCusID' => 4, 'BlackCusName' => 'Mr.Thuận','BlackCusPhone' => '0909132876', 'BlackCusDesc'=>'Khu vực nhà có tranh chấp, chi phí xử lý tranh chấp cao và bắt nhà thầu phải chịu',],
            ['BlackCusID' => 5, 'BlackCusName' => 'MrPhong','BlackCusPhone' => '0989136788', 'BlackCusDesc'=>'Khách hàng từng nợ tiền lâu mới trả trước đây',],
            ['BlackCusID' => 6, 'BlackCusName' => 'Ms.Hương','BlackCusPhone' => '0909132876', 'BlackCusDesc'=>'Khách hàng khó tính, không thể hợp tác',],
            ['BlackCusID' => 7, 'BlackCusName' => 'Ms.Hoài','BlackCusPhone' => '0133987998', 'BlackCusDesc'=>'Khách hàng đã từng hợp tác với công ty đối tác, nhận xét làm chỉ toàn lỗ',],
            ['BlackCusID' => 8, 'BlackCusName' => 'Mr.Cao','BlackCusPhone' => '0902977332', 'BlackCusDesc'=>'Khách hàng không có kiến thức chuyên môn, nhưng không gnhe tư vấn và đưa ra những yêu cầu vô lý',],
            ['BlackCusID' => 9, 'BlackCusName' => 'Mr.Tín','BlackCusPhone' => '0909132333', 'BlackCusDesc'=>'Khách hàng nợ tiền dai trên 5 năm',],
            ['BlackCusID' => 10, 'BlackCusName' => 'Ms.Linh','BlackCusPhone' => '0912872324', 'BlackCusDesc'=>'Khách hàng tìm mọi cách phạt và cắt bớt chi phí trong hợp đồng khi thi công thực tế.',],
        ]);
    }
}
