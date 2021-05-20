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

            [
                'ProDetailID' => 'DCH01', 'ProjectID'       => 'DCH01',
                'DateFinish'  => 'January 2020', 'Location' => 'Lê Duẩn, Quận 1', 'Price' => '500 triệu VND', 'Client' => 'Mr.Hien', 'tagName' => 'Decor Căn Hộ',
                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_01.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_01.jpg',
                'contentTop'  => 'Diện tích 121m2 với 3 phòng ngủ, phòng khách, 2 nhà vệ sinh và nhà bếp. Hướng nhà đông-bắc view Bitexco, hướng ban công Tây-Nam view sông quận 2. Đầy đủ nội thất vô cùng tiện nghi.',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],

            [   'ProDetailID' => 'DCH02', 'ProjectID'       => 'DCH02',
                'DateFinish'  => 'March 2020', 'Location' => 'Mai Chí Thọ, Quận 2', 'Price' => '600 triệu VND', 'Client' => 'Mr.Duy', 'tagName' => 'Decor Căn Hộ',
                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_02.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_02.jpg',
                'contentTop'  => 'Diện tích 145m2 với 2 phòng ngủ, hai nhà vệ sinh. View  nhìn thẳng về sông và Đảo Kim Cương vô cùng thoáng mát và yên tĩnh. Nội thất decor đơn giản, hiện đại tạo cảm giác rộng rãi cho gia đình',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],

            [   'ProDetailID' => 'DCH03', 'ProjectID'       => 'DCH03',
                'DateFinish'  => 'April 2021', 'Location' => 'Huỳnh Tấn Phát, Quận 7', 'Price' => '800 triệu VND', 'Client' => 'Mr.Vuong', 'tagName' => 'Decor Căn Hộ',
                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_03.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_03.jpg',
                'contentTop'  => 'Diện tích 320 m2, trần cao gần 5 m nên có thể tăng diện tích sử dụng lên thành 450 m2, ban công hướng Đông Bắc, cửa Tây Nam, view sông Sài Gòn cực đẹp, view trọn 1 nửa TP.HCM.  Chất lượng xây dựng theo tiêu chuẩn Singapore của chủ đầu tư  Kepple Land - công ty danh tiếng đến từ Singapore. ',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],

            [   'ProDetailID' => 'DCH04', 'ProjectID'       => 'DCH04',
                'DateFinish'  => 'January 2021', 'Location' => 'Nguyễn Thị Thập, Quận 8', 'Price' => '900 triệu VND', 'Client' => 'Mr.Minh', 'tagName' => 'Decor Căn Hộ',
                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_04.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_04.jpg',
                'contentTop'  => 'Căn hộ chung cư Quận 8, căn góc, hướng hồ bơi, diện tích 124m2, 3 phòng ngủ, 2 nhà vệ sinh, phòng khách và phòng bếp. Nhà có đầy đủ nội thất, khu an ninh, không ngập nước, không kẹt xe.',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],

            [   'ProDetailID' => 'DCH05', 'ProjectID'       => 'DCH05',
                'DateFinish'  => 'March 2021', 'Location' => 'Hai Bà Trưng, Quận 9', 'Price' => '400 triệu VND', 'Client' => 'Mr.An', 'tagName' => 'Decor Căn Hộ',
                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_05.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_05.jpg',
                'contentTop'  => 'Căn hộ chung cư Quận 9, căn góc, hướng hồ bơi, diện tích 140m2, 4 phòng ngủ, 2 nhà vệ sinh, phòng khách và phòng bếp. Nhà có đầy đủ nội thất, khu an ninh, không ngập nước, không kẹt xe.',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],

            [   'ProDetailID' => 'DCH06', 'ProjectID'       => 'DCH06',
                'DateFinish'  => 'February 2021', 'Location' => 'Hoàng Hoa Thám, Quận 10', 'Price' => '700 triệu VND', 'Client' => 'Mr.Thuy', 'tagName' => 'Decor Căn Hộ',
                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_06.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_06.jpg',
                'contentTop'  => 'Căn hộ chung cư Quận 10, căn góc, hướng hồ bơi, diện tích 100m2, 2 phòng ngủ, 2 nhà vệ sinh, phòng khách và phòng bếp. Nhà có đầy đủ nội thất, khu an ninh, không ngập nước, không kẹt xe.',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],

            [   'ProDetailID' => 'DCH07', 'ProjectID'       => 'DCH07',
                'DateFinish'  => 'April 2021', 'Location' => 'Lương Định Của, Quận 11', 'Price' => '300 triệu VND', 'Client' => 'Mr.Lanh', 'tagName' => 'Decor Căn Hộ',
                'imageTop'    => 'images\Project\canho\Detail\DCH_detail_top_07.jpg', 'imageBot' => 'images\Project\canho\Detail\DCH_detail_bot_07.jpg',
                'contentTop'  => 'Căn hộ chung cư Quận 11, căn góc, hướng hồ bơi, diện tích 150m2, 4 phòng ngủ, 2 nhà vệ sinh, phòng khách và phòng bếp. Nhà có đầy đủ nội thất, khu an ninh, không ngập nước, không kẹt xe.',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],


            [   'ProDetailID' => 'NP01', 'ProjectID'       => 'NP01',
                'DateFinish'  => 'April 2021', 'Location' => 'Lê Duẩn, Quận 1', 'Price' => '1,4 tỷ VND', 'Client' => 'Mr.Hien', 'tagName' => 'Nhà Phố',
                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_01.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_01.jpg',
                'contentTop'  => 'Diện tích: 70m2,4 tầng 1 trệt 3 lầu, 2 phòng ngủ, 3 nhà vệ sinh. Nhà gần Trường Đại học Khoa học xã hội nhân văn nên tiện kinh doanh buôn bán cho sinh viên thuê nguyên căn cực kì tốt luôn',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],

            [   'ProDetailID' => 'NP02', 'ProjectID'       => 'NP02',
                'DateFinish'  => 'March 2021', 'Location' => 'Mai Chí Thọ, Quận 2', 'Price' => '1,2 tỷ VND', 'Client' => 'Mr.Minh', 'tagName' => 'Nhà Phố',
                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_02.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_02.jpg',
                'contentTop'  => 'Diện tích 100m2 gồm 2 phòng ngủ 2 vệ sinh, nội thất cơ bản.Nằm gần ký túc xã GTVT nên có thể cho thuê trọ,xung quanh dân đông,dân trí cao có camera an ninh nên về sống cực yên tâm',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],

            [   'ProDetailID' => 'NP03', 'ProjectID'       => 'NP03',
                'DateFinish'  => 'February 2021', 'Location' => 'Huỳnh Tấn Phát, Quận 7', 'Price' => '2,3 tỷ VND', 'Client' => 'Mr.Vuong', 'tagName' => 'Nhà Phố',
                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_03.jpg', 'imageBot' => 'images\Project\nhapho\Dettail\NP_detail_bot_03.jpg',
                'contentTop'  => 'Nhà siêu đẹp hướng ĐÔNG TỨ TRẠCH ( hướng Nam ) hẻm xe hơi. do Kiến trúc sư thiết kế. Nhà 1 trệt, 3 lầu,và sân thượng. Có chỗ để xe hơi. Chủ nhà xây ở, bao đẹp, bao kiên cố mát mẻ sinh khí, phong cảnh hữu tình, phong thủy tốt lành, thích hợp cho gia đình có nhiều em bé hoặc người già ở.',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],

            [   'ProDetailID' => 'NP04', 'ProjectID'       => 'NP04',
                'DateFinish'  => 'January 2021', 'Location' => 'Nguyễn Thị Thập, Quận 8', 'Price' => '2,9 tỷ VND', 'Client' => 'Mr.Duy', 'tagName' => 'Nhà Phố',
                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_04.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_04.jpg',
                'contentTop'  => 'Diện tích 10m2 kết cấu 3 phòng ngủ 3 toilet, sân thượng và ban công. Dân cư đông đúc, gần chợ bình điền, trường học, bệnh viện, bách hoá xanh',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.i' ],

            [   'ProDetailID' => 'NP05', 'ProjectID'       => 'NP05',
                'DateFinish'  => 'March 2021', 'Location' => 'Hai Bà Trưng, Quận 9', 'Price' => '2,5 tỷ VND', 'Client' => 'Mr.An', 'tagName' => 'Nhà Phố',
                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_05.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_05.jpg',
                'contentTop'  => 'Nhà có 2 phòng ngủ 2 vệ sinh phòng khách và phòng bếp riêng rộng rãi thoải mãi. Đường lớn 6m gần đại học GTVT,bệnh viện q9 nên có thể kinh doanh buôn bán quán ăn quán uống hoặc cho thuê trọ rất tốt',
                'contentBot'  => 'ĐPhòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],

            [   'ProDetailID' => 'NP06', 'ProjectID'       => 'NP06',
                'DateFinish'  => 'April 2021', 'Location' => 'Hoàng Hoa Thám, Quận 10', 'Price' => '2,1 tỷ VND', 'Client' => 'Mr.Thuy', 'tagName' => 'Nhà Phố',
                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_06.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_06.jpg',
                'contentTop'  => 'Diện tích: 105m2 với 1 trệt 2 lầu, 4 phòng ngủ, 4 nhà vệ sinh có sân thượng, nhà đẹp nở hậu. Gần trung tâm thương mại, trường học, bệnh viện,... thuận lợi di chuyển sang các quận. Khu dân cư đông đúc, dân trí cao. Đường rộng rãi thoáng mát.',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],

            [   'ProDetailID' => 'NP07', 'ProjectID'       => 'NP07',
                'DateFinish'  => 'February 2021', 'Location' => 'Lương Định Của, Quận 11', 'Price' => '2,3 tỷ VND', 'Client' => 'Mr.Lanh', 'tagName' => 'Nhà Phố',
                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_07.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_07.jpg',
                'contentTop'  => 'Diện tích: 110m2 với 1 trệt 2 lầu. Gần trung tâm thương mại, trường học, bệnh viện,... thuận lợi di chuyển sang các quận. Khu dân cư đông đúc, dân trí cao. Đường rộng rãi thoáng mát.',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],

            [   'ProDetailID' => 'NP08', 'ProjectID'       => 'NP08',
                'DateFinish'  => 'January 2021', 'Location' => 'Lý Phục Man, Quận 12', 'Price' => '2,4 tỷ VND', 'Client' => 'Mr.Chi', 'tagName' => 'Nhà Phố',
                'imageTop'    => 'images\Project\nhapho\Detail\NP_detail_top_08.jpg', 'imageBot' => 'images\Project\nhapho\Detail\NP_detail_bot_08.jpg',
                'contentTop'  => 'Diện tích từng căn:250m2. 1 trệt, 3 lầu, 1 phòng khách, 2 phòng đa năng, 6 phòng ngủ, 7 nhà vệ sinh, phòng thờ, phòng giặt, sân thượng trước – sau. Căn nhà được tích hợp thanh máy và các thiết bị cảm ứng thông minh, hiện đại nhất (Smart Home), đầy đủ tính năng cho gia đình 3 thế hệ.',
                'contentBot'  => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.' ],



//                  Insert data biệt thự

                ['ProDetailID' => 'BT01', 'ProjectID' => 'BT01',
                    'DateFinish' => 'February 2021', 'Location' => 'Trần Hưng Đạo, Quận 1', 'Price' => '19 tỷ VND', 'Client' => 'Ms.Hoa', 'tagName' => 'Biệt Thự',
                    'imageTop' => 'images\Project\bietthu\Detail\Detail_BT_top_01.jpg', 'imageBot' => 'images\Project\bietthu\Detail\Detail_BT_bot_01.jpg',
                    'contentTop' => 'Diện tích 500m2 với 3 lầu 1 trệt 2 lầu 6 phòng ngủ, phòng ăn, nhà bếp, sân thượng, chỗ để xe. Biệt thự được tích hợp thanh máy và các thiết bị cảm ứng thông minh, hiện đại nhất (Smart Home), đầy đủ tính năng cho gia đình 3 thế hệ.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],


                ['ProDetailID' => 'BT02', 'ProjectID' => 'BT02',
                    'DateFinish' => 'January 2021', 'Location' => 'Mai Chí Thọ, Quận 2', 'Price' => '27 tỷ VND', 'Client' => 'Mr.Phong', 'tagName' => 'Biệt Thự',
                    'imageTop' => 'images\Project\bietthu\Detail\Detail_BT_top_02.jpg', 'imageBot' => 'images\Project\bietthu\Detail\Detail_BT_bot_02.jpg',
                    'contentTop' => 'Diện tích 500m2 với nhà 1 trệt, 1 lầu và 1 tầng mái. Biệt thự có 3 phòng ngủ, 1 phòng khách. Nhà đẹp, nội thất cao cấp, có sân vườn rộng rãi. Vị trí đắc địa, khu dân cư trí thức, an ninh, sạch sẽ, gần nhiều văn phòng, nhà hàng, khách sạn, siêu thị, chợ, gần khu hành chính nhà nước...',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],

                ['ProDetailID' => 'BT03', 'ProjectID' => 'BT03',
                    'DateFinish' => 'March 2021', 'Location' => 'Trương Định, Quận 3', 'Price' => '30tỷ VND', 'Client' => 'Mr.Toàn', 'tagName' => 'Biệt Thự',
                    'imageTop' => 'images\Project\bietthu\Detail\Detail_BT_top_03.jpg', 'imageBot' => 'images\Project\bietthu\Detail\Detail_BT_bot_03.jpg',
                    'contentTop' => 'Diện tích : 260m2 với 1 trệt 3 lầu, mái ngói cực sang trọng. Thiết kế : 1 gara oto, 5 phòng ngủ , 1 phòng khách , 1 phòng ăn sang trọng , 1 phòng đọc sách. cầu thang gỗ sang trọng. View cực kỳ thoáng đãng, hướng không khí cây xanh trong lành.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],

                ['ProDetailID' => 'BT04', 'ProjectID' => 'BT04',
                    'DateFinish' => 'April 2021', 'Location' => 'Nguyễn Thị Thập, Quận 4', 'Price' => '35tỷ VND', 'Client' => 'Ms.Ngân', 'tagName' => 'Biệt Thự',
                    'imageTop' => 'images\Project\bietthu\Detail\Detail_BT_top_04.jpg', 'imageBot' => 'images\Project\bietthu\Detail\Detail_BT_bot_04.jpg',
                    'contentTop' => 'Diện tích : 3000m2 với 1 trệt 5 lầu, mái ngói cực sang trọng. Thiết kế : 1 gara oto, 6 phòng ngủ , 1 phòng khách , 1 phòng ăn sang trọng , 1 phòng đọc sách. cầu thang gỗ sang trọng. View cực kỳ thoáng đãng, hướng không khí cây xanh trong lành.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],

                ['ProDetailID' => 'BT05', 'ProjectID' => 'BT05',
                    'DateFinish' => 'April 2021', 'Location' => 'Kinh Dương Vương, Quận 5', 'Price' => '40tỷ VND', 'Client' => 'Ms.Hoa', 'tagName' => 'Biệt Thự',
                    'imageTop' => 'images\Project\bietthu\Detail\Detail_BT_top_05.jpg', 'imageBot' => 'images\Project\bietthu\Detail\Detail_BT_bot_05.jpg',
                    'contentTop' => 'Diện tích : 300m2 với 1 trệt 3 lầu, mái ngói cực sang trọng. Thiết kế : 1 gara oto, 5 phòng ngủ , 1 phòng khách , 1 phòng ăn sang trọng , 1 phòng đọc sách. cầu thang gỗ sang trọng. View cực kỳ thoáng đãng, hướng không khí cây xanh trong lành.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],

                ['ProDetailID' => 'BT06', 'ProjectID' => 'BT06',
                    'DateFinish' => 'May 2021', 'Location' => 'An Dương Vương, Quận 6', 'Price' => '45tỷ VND', 'Client' => 'Mr.Vương', 'tagName' => 'Biệt Thự',
                    'imageTop' => 'images\Project\bietthu\Detail\Detail_BT_top_06.jpg', 'imageBot' => 'images\Project\bietthu\Detail\Detail_BT_bot_06.jpg',
                    'contentTop' => 'Diện tích : 350m2 với 1 trệt 3 lầu, mái ngói cực sang trọng. Thiết kế : 1 gara oto, 5 phòng ngủ , 1 phòng khách , 1 phòng ăn sang trọng , 1 phòng đọc sách. cầu thang gỗ sang trọng. View cực kỳ thoáng đãng, hướng không khí cây xanh trong lành.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],

                ['ProDetailID' => 'BT07', 'ProjectID' => 'BT07',
                    'DateFinish' => 'June 2021', 'Location' => 'Huỳnh Tấn Phát, Quận 7', 'Price' => '50tỷ VND', 'Client' => 'Mr.Nghĩa', 'tagName' => 'Biệt Thự',
                    'imageTop' => 'images\Project\bietthu\Detail\Detail_BT_top_07.jpg', 'imageBot' => 'images\Project\bietthu\Detail\Detail_BT_bot_07.jpg',
                    'contentTop' => 'Diện tích : 260m2 với 1 trệt 4 lầu, mái ngói cực sang trọng. Thiết kế : 1 gara oto, 5 phòng ngủ , 1 phòng khách , 1 phòng ăn sang trọng , 1 phòng đọc sách. cầu thang gỗ sang trọng. View cực kỳ thoáng đãng, hướng không khí cây xanh trong lành.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],


                ['ProDetailID' => 'BT08', 'ProjectID' => 'BT08',
                    'DateFinish' => 'May 2021', 'Location' => 'Nguyễn Tri Phương, Quận 8', 'Price' => '55tỷ VND', 'Client' => 'Mr.Thịnh', 'tagName' => 'Biệt Thự',
                    'imageTop' => 'images\Project\bietthu\Detail\Detail_BT_top_08.jpg', 'imageBot' => 'images\Project\bietthu\Detail\Detail_BT_bot_08.jpg',
                    'contentTop' => 'Diện tích : 400m2 với 1 trệt 3 lầu, mái ngói cực sang trọng. Thiết kế : 1 gara oto, 6 phòng ngủ , 1 phòng khách , 1 phòng ăn sang trọng , 1 phòng đọc sách. cầu thang gỗ sang trọng. View cực kỳ thoáng đãng, hướng không khí cây xanh trong lành.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],

//                   Insert data nhà tân cổ
                ['ProDetailID' => 'NTC01', 'ProjectID' => 'NTC01',
                    'DateFinish' => 'June 2021', 'Location' => 'Cách Mạng Tháng 8, Quận 1', 'Price' => '27 tỷ VND', 'Client' => 'Ms.Thắm', 'tagName' => 'Nhà Tân Cổ',
                    'imageTop' => 'images\Project\tanco\Detail\Detail_NTC_top_01.jpg', 'imageBot' => 'images\Project\tanco\Detail\Detail_NTC_bot_01.jpg',
                    'contentTop' => 'Dinh thự tư nhân tráng lệ bao quanh các sảnh đường bằng đá cẩm thạch nguy nga với các cột Doric, Ionic hoặc Corinthian, được tô điểm bằng các mái vòm, hàng cột, mái vòm và cổng vòm.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],


                ['ProDetailID' => 'NTC02', 'ProjectID' => 'NTC02',
                    'DateFinish' => 'June 2021', 'Location' => 'Đỗ Xuân Hợp, Quận 2', 'Price' => '18 tỷ VND', 'Client' => 'Ms.Hà', 'tagName' => 'Nhà Tân Cổ',
                    'imageTop' => 'images\Project\tanco\Detail\Detail_NTC_top_02.jpg', 'imageBot' => 'images\Project\tanco\Detail\Detail_NTC_bot_02.jpg',
                    'contentTop' => 'Nội thất xa hoa bao gồm nhiều phòng tiếp khách, dãy phòng 4 phòng ngủ, rạp chiếu phim, phòng chơi, sân bóng quần, phòng tập thể dục và hồ bơi trong nhà xa hoa.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],


                ['ProDetailID' => 'NTC03', 'ProjectID' => 'NTC03',
                    'DateFinish' => 'June 2021', 'Location' => 'Cao Thắng, Quận 3', 'Price' => '19 tỷ VND', 'Client' => 'Ms.Khánh', 'tagName' => 'Nhà Tân Cổ',
                    'imageTop' => 'images\Project\tanco\Detail\Detail_NTC_top_03.jpg', 'imageBot' => 'images\Project\tanco\Detail\Detail_NTC_bot_03.jpg',
                    'contentTop' => 'Dinh thự ba tầng dành cho quan tòa được xây dựng. Kiến trúc trang trí công phu, từ mặt tiền bằng gạch trang nghiêm, các cột Ionic và cổ thiên nga đến hàng hiên rộng và hàng rào sắt rèn thủ.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],


                ['ProDetailID' => 'NTC04', 'ProjectID' => 'NTC04',
                    'DateFinish' => 'June 2021', 'Location' => 'Hoàn Diệu, Quận 4', 'Price' => '15 tỷ VND', 'Client' => 'Mr.Minh', 'tagName' => 'Nhà Tân Cổ',
                    'imageTop' => 'images\Project\tanco\Detail\Detail_NTC_top_04.jpg', 'imageBot' => 'images\Project\tanco\Detail\Detail_NTC_bot_04.jpg',
                    'contentTop' => 'Dinh thự tư nhân tráng lệ bao quanh các sảnh đường bằng đá cẩm thạch nguy nga với các cột Doric, Ionic hoặc Corinthian, được tô điểm bằng các mái vòm, hàng cột, mái vòm và cổng vòm.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],


                ['ProDetailID' => 'NTC05', 'ProjectID' => 'NTC05',
                    'DateFinish' => 'June 2021', 'Location' => 'Trần Hưng Đạo, Quận 5', 'Price' => '25 tỷ VND', 'Client' => 'Mr.Duy', 'tagName' => 'Nhà Tân Cổ',
                    'imageTop' => 'images\Project\tanco\Detail\Detail_NTC_top_05.jpg', 'imageBot' => 'images\Project\tanco\Detail\Detail_NTC_bot_05.jpg',
                    'contentTop' => 'Nội thất xa hoa bao gồm nhiều phòng tiếp khách, dãy phòng 4 phòng ngủ, rạp chiếu phim, phòng chơi, sân bóng quần, phòng tập thể dục và hồ bơi trong nhà xa hoa.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],


                ['ProDetailID' => 'NTC06', 'ProjectID' => 'NTC06',
                    'DateFinish' => 'June 2021', 'Location' => 'Cao Văn Lầu, Quận 6', 'Price' => '15 tỷ VND', 'Client' => 'Mr.Hiển', 'tagName' => 'Nhà Tân Cổ',
                    'imageTop' => 'images\Project\tanco\Detail\Detail_NTC_top_06.jpg', 'imageBot' => 'images\Project\tanco\Detail\Detail_NTC_bot_06.jpg',
                    'contentTop' => 'Dinh thự tư nhân tráng lệ bao quanh các sảnh đường bằng đá cẩm thạch nguy nga với các cột Doric, Ionic hoặc Corinthian, được tô điểm bằng các mái vòm, hàng cột, mái vòm và cổng vòm.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],

                ['ProDetailID' => 'NTC07', 'ProjectID' => 'NTC07',
                    'DateFinish' => 'June 2021', 'Location' => 'Nguyễn Văn Linh, Quận 7', 'Price' => '12 tỷ VND', 'Client' => 'Mr.Long', 'tagName' => 'Nhà Tân Cổ',
                    'imageTop' => 'images\Project\tanco\Detail\Detail_NTC_top_07.jpg', 'imageBot' => 'images\Project\tanco\Detail\Detail_NTC_bot_08.jpg',
                    'contentTop' => 'Dinh thự ba tầng dành cho quan tòa được xây dựng. Kiến trúc trang trí công phu, từ mặt tiền bằng gạch trang nghiêm, các cột Ionic và cổ thiên nga đến hàng hiên rộng và hàng rào sắt rèn thủ.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],

                ['ProDetailID' => 'NTC08', 'ProjectID' => 'NTC08',
                    'DateFinish' => 'June 2021', 'Location' => 'Phạm Thế Hiển, Quận 8', 'Price' => '25 tỷ VND', 'Client' => 'Ms.Linh', 'tagName' => 'Nhà Tân Cổ',
                    'imageTop' => 'images\Project\tanco\Detail\Detail_NTC_top_08.jpg', 'imageBot' => 'images\Project\tanco\Detail\Detail_NTC_bot_08.jpg',
                    'contentTop' => 'Nội thất xa hoa bao gồm nhiều phòng tiếp khách, dãy phòng 4 phòng ngủ, rạp chiếu phim, phòng chơi, sân bóng quần, phòng tập thể dục và hồ bơi trong nhà xa hoa.',
                    'contentBot' => 'Phòng khách với diện tích rộng lớn, trang hoàng lộng lẫy để tiếp đón bị khách đến chơi nhà và không gian phòng bếp + bàn ăn bố trí cuối nhà tiện lợi, không gây ám mùi lên không gian bên trên. Không gian này với diện tích rộng rãi giúp gia chủ đón tiếp người thân, bạn bè cùng nhau ăn uống, tụ tập vào dịp quan trọng hay ngày cuối tuần bên mâm cơm ấm cúng.'],
            ]);
        }
    }
