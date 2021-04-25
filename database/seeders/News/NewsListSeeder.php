<?php

namespace Database\Seeders\News;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_lists')->insert([

            //Insert data

            ['NewsID' => 'N01', 'NewsName' => 'Forest House - Ngôi nhà trong mơ của những người yêu thiên nhiên',
                'NewsTagName' => 'PCKT',
                'Description' => 'Với chủ đề “ngôi nhà sống động”, cabin này là dự án dự kiến cho CASA COR 2018, mọi thứ được tận dụng một cách tối đa và vô cùng thưởng thức.',
                'Day' => '25/02','Year' => '2020',
                'images' => 'images\blog\News_bg_01.jpg'],

            ['NewsID' => 'N02', 'NewsName' => 'GỖ - Người bạn đa năng trong ngôi nhà',
                'NewsTagName' => 'NTGD',
                'Description' => 'Gỗ luôn là nguyên vật liệu xuất sắc khi trang trí trong không gian sống. Mang lại không gian thoải mái, ấm áp và tràn đầy vẻ đẹp thiên nhiên. Gỗ thường được nói là “dễ sống” vì bản tính kết nối dễ dàng với bất cứ phong cách nào, từ cổ điện tới đương đại.',
                'Day' => '18/08','Year' => '2020',
                'images' => 'images\blog\News_bg_02.jpg'],

            ['NewsID' => 'N03', 'NewsName' => 'Hãy chọn ghế đúng',
                'NewsTagName' => 'NTGD',
                'Description' => 'Ghế là một tuyệt phẩm, đòi hỏi kiến trúc sư cần cân bằng giữa ý tưởng và công dụng của nó. Nhiều chiếc ghế được thiết kế ra, ý tưởng vô cùng táo táo nhưng không hề thoải mái khi ngồi lên, đó là lệch tông, nhưng nhiều chiếc ghế nhìn đơn giản nhưng khiến cho nhiều người cảm thấy thích thú và đạt tiêu chuẩn, đúng với chức năng cơ bản vốn có của một chiếc ghế thông thường.',
                'Day' => '09/07','Year' => '2020',
                'images' => 'images\blog\News_bg_03.jpg'],

            ['NewsID' => 'N04', 'NewsName' => '5 cách tạo nên phòng ngủ ấm áp',
                'NewsTagName' => 'PCKT',
                'Description' => 'Phòng ngủ luôn là nơi ưa thích của mỗi người, đúng không nhỉ? Người ta thường nói “Ăn được ngủ được là tiên”, chính vì vậy mà nhiều người luôn cố gắng để trang trí, thiết kế cho mình và gia đình phòng ngủ ấm áp, mục đích cuối cùng vẫn để có được một giấc ngủ ngon và bình an. Hôm nay chúng ta cùng học cách để biến ngôi nhà của bạn thêm ấm áp và đặc biệt hơn nhé!',
                'Day' => '07/07','Year' => '2020',
                'images' => 'images\blog\News_bg_04.jpg'],

            ['NewsID' => 'N05', 'NewsName' => 'Từng bước trang trí căn phòng Vintage mơ ước',
                'NewsTagName' => 'PCKT',
                'Description' => 'Vintage là phong cách cách đây 20-100 năm, được ứng dụng rộng rãi trong nhiều lĩnh vực khác nhau từ thiết kế thời gian, thiết kế và trang trí nội thất tới nhiếp ảnh, đồ họa. Hôm nay hãy cùng 3S Real Decor từng bước trang trí để sở hữu căn phòng vintage đáng mơ ước nhé!!!',
                'Day' => '23/06','Year' => '2020',
                'images' => 'images\blog\News_bg_05.jpg'],

            ['NewsID' => 'N06', 'NewsName' => 'Đặc điểm văn phòng phong cách đương đại',
                'NewsTagName' => 'PCKT',
                'Description' => 'Phong cách đương đại (contemporary style) là phong cách thiết kế theo hình mẫu ở hiện tại, cập nhật xu hướng theo thời điểm của hiện tại. Xuất hiện từ những năm 1970, phong cách đương đại luôn đứng vững và không bao giờ lỗi thời, bởi bản chất sống cùng năm tháng được khắc họa rõ nét trên hai chữ đặc biệt ấy.',
                'Day' => '19/06','Year' => '2020',
                'images' => 'images\blog\News_bg_06.jpg'],

            ['NewsID' => 'N07', 'NewsName' => 'Stylish phòng khách hiện đại cho mọi đối tượng',
                'NewsTagName' => 'PCKT',
                'Description' => 'Với phong cách hiện đại, chúng ta được free trong việc trang trí. Hợp lý là phù hợp với phong cách và nhu cầu sử dụng của mỗi người. Đừng cố gắng ép PHẢI theo một kiểu trang trí nào đó, mỗi căn phòng được xây dựng theo kích thước, hướng khác nhau, việc đặt một khuôn mẫu chung cho tất cả căn phòng là điều dường như không thể.',
                'Day' => '06/05','Year' => '2020',
                'images' => 'images\blog\News_bg_07.jpg'],

        ]);
    }
}
