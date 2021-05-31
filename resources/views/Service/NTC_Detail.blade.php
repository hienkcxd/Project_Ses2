@extends('Layout.main')

@section('sub-header')
    @include('Service.SubHeader')
@endsection

@section('content')
    <div id="content">
        <div class="container">
            <div class="row">
                <div id="sidebar" class="col-md-3 wow fadeInUp">
                    <ul id="services-list">

                        <li><a href="{{ route('Service_nhapho') }}">NHÀ PHỐ</a></li>
                        <li><a href="{{ route('Service_canho') }}">DECOR CĂN HỘ</a></li>
                        <li class="active"><a href="{{ route('Service_NTC') }}">NHÀ TÂN CỔ</a></li>
                        <li><a href="{{ route('Service_BT') }}">BIỆT THỰ</a></li>

                    </ul>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <p>Giá thiết kế kiến trúc trên thị trường giao động từ <b>140.000 đến 300.000 VND/m<sup>2</sup></b>.</p>
                            <p>Đối với đơn giá thi công phần thô và kiến trúc có nhiều yếu tố tác động, ví dụ như địa hình: vị trí trong hẻm hay đường lớn,
                            khối lượng thi công: 100m<sup>2</sup> trên 1 sàn, hoặc dưới 100m<sup>2</sup> trên 1 sàn...Các yếu tố này sẽ ảnh hưởng đến giá thành rất nhiều.
                            Giá giao động từ <b>6.000.000 đến 8.000.000 VNĐ</b></p>
                            <p>Công ty sẽ tặng cho quý khách chi phí thiết kế, xin phép nếu quý khách hàng ký hợp đồng thi công với công ty.
                            </p>
                        </div>
                        <div class="col-md-6 pic-services wow fadeInUp" data-wow-delay=".6s">
                            <img src="{{ asset('images/services/p4_a.jpg') }}" class="img-responsive" alt="">
                            <img src="{{ asset('images/services/p4_b.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection




@section('title','Service_Detail_Contructure')

@section('title','Service_Contructure')

@section('title','Service_Detail_Contructure')

@section('idBody')class = "page-services"@endsection
@section('header-bg')class = "header-bg"@endsection
