<div id="content">
        <div class="container">
            <div class="row">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                                <li><a href="#" data-filter="*" class="selected">All Projects</a></li>
                                <li><a href="#" data-filter=".NP">Nhà Phố</a></li>
                                <li><a href="#" data-filter=".DCH">Decor Căn Hộ</a></li>
                                <li><a href="#" data-filter=".BT">Biệt Thự</a></li>
                                <li><a href="#" data-filter=".NTC">Nhà Tân Cổ</a></li>
                            </ul>
                        </div>
                    </div>
{{--                @dd($news)--}}
                    @foreach($news as $p)
                    <ul class="blog-list">
                        <li>
                            <div class="post-content">
                                <div class="post-image">
                                    <img src="{{ asset("$p->images") }}" alt="" />
                                </div>


                                <div class="date-box">
                                    <div class="day" style="font-size: 20px">{{ $p->Day }}</div>
                                    <div class="month" style="font-size: 10px">{{ $p->Year }}</div>
                                </div>

                                <div class="post-text">
                                    <h3><a href="#">{{ $p->NewsName }}</a></h3>
                                    <p>{{ $p->Description }}</p>
                                </div>

                                <a href="#" class="btn-more">Chi tiết</a>

                            </div>
                        </li>
                    </ul>
                @endforeach

                    <div class="text-center">
                        <ul class="pagination">
                            <li><a href="#">Trước</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Sau</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
