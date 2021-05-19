<style>
    .de_light .blog-list .date-box .day {
        color: #fff;
    }
    .blog-list .date-box .day {
        color: #111;
        font-weight: 600;
        font-size: 32px;
        padding-top: 45px;
        padding-bottom: 10px;
    }
    .blog-list .date-box .day, .blog-list .date-box .month {
        display: block;
        color: #fff;
        text-align: center;
        width: 60px;
        z-index: 100;
    }
    .blog-list li {
        list-style: none;
        line-height: 1.7em;
        margin-bottom: 60px;
        margin-top: 10px;
        padding-bottom: 15px;
        border-bottom: solid 1px rgba(255,255,255,.1);
    }
</style>
<div class='container' >
    <div class='wrapper animated bounceInLeft'>
        <div class='company-info'>
            để logo
        </div>

        <div class='contact'>
            <form action="{{ route('emp.news')}}" >

                <li class="item PCKT isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);">

                    <div class="post-content ">
                        <div class="post-image">
                            <img src="http://127.0.0.1:8000/images\blog\News_bg_01.jpg" alt="background">
                            <input type="text" name="image" value="link">
                        </div>
                        <div class="date-box">
                            <div class="day" style="font-size: 20px">25/02</div>
                            <div class="month" style="font-size: 15px; letter-spacing: 5px; padding-left: 7px">2020</div>
                        </div>
                        <div class="post-text">
                            <label for="titleNews">Tiêu Đề:</label>
                            <input type="text" name="titleNews" value="Forest House - Ngôi nhà trong mơ của những người yêu thiên nhiên">

                            <label for="Discrib">Mô Tả:</label>
                            <input type="text" name="titleNews" value="Với chủ đề “ngôi nhà sống động”, cabin này là dự án dự kiến cho CASA COR 2018, mọi thứ được tận dụng một cách tối đa và vô cùng thưởng thức.">
                        </div>
                        <a class="btn-more">Chi tiết</a>
                    </div>

                </li>

                <button>Submit</button><button>GetBack</button>
            </form>
        </div>
    </div>

</div>
