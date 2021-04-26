<div id="content" style="padding: 45px 0 30px 0">
    <div class="container">
        <div class="row" style="width: 70%; margin: auto">

            <div class="row">
                <div class="col-md-12 text-center">
                    <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                        <li><a href="#" data-filter="*" class="selected">All Projects</a></li>
                        <li><a href="#" data-filter=".PCKT">Phong Cách Kiến Trúc</a></li>
                        <li><a href="#" data-filter=".NTGD">Nội thất gia đình</a></li>
                    </ul>
                </div>
            </div>

            <div id="gallery" data-wow-delay=".3s">
                <ul class="blog-list">
                    @foreach($data as $p)
                        <li class="item {{ $p->NewsTagName }}">

                            <div class="post-content ">
                                <div class="post-image">
                                    <img src="{{ asset("$p->images") }}" alt=""/>
                                </div>
                                <div class="date-box">
                                    <div class="day" style="font-size: 20px">{{ $p->Day }}</div>
                                    <div class="month"
                                         style="font-size: 15px; letter-spacing: 5px; padding-left: 7px">{{ $p->Year }}</div>
                                </div>
                                <div class="post-text">
                                    <h3>{{ $p->NewsName }}</h3>
                                    <p>{{ $p->Description }}</p>
                                </div>
                                <a href="{{ route('news_detail', ['NewsDetailID' => $p->NewsID ]) }}" class="btn-more">Chi
                                    tiết</a>
                            </div>

                        </li>
                    @endforeach
                </ul>
            </div>
            <div style="width: 100%; text-align: center">
            {!! $data->links() !!}
        </div>
    </div>
</div>
</div>


