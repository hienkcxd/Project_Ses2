<div class="main__cards">

    <div class="card">
        <i class="fa fa-user-o fa-2x text-lightblue" aria-hidden="true"> - Quận:</i>
        <div class="card_inner">
            <p class="text-primary-p">
                <select name="districts" id="districts">
                    @foreach ($disList as $item)
                        <option value="{{ $item->DistrictID }}"> {{ $item->DistrictName }} </option>
                    @endforeach
                </select>
            </p>
        </div>
    </div>

    <div class="card">
        <i class="fa fa-calendar fa-2x text-red" aria-hidden="true"> - Phường:</i>
        <div class="card_inner">
            <p class="text-primary-p">
                <select name="wardList" id="wardList"></select>
            </p>
        </div>
    </div>

    <div class="card">
        <i class="fa fa-video-camera fa-2x text-yellow" aria-hidden="true"> - Năm:</i>
        <div class="card_inner">
            <p class="text-primary-p">
                <select name="Year" id="Year">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
            </p>
        </div>
    </div>

    <div class="card">
        <i
            class="fa fa-thumbs-up fa-2x text-green"
            aria-hidden="true"
        ></i>
        <div class="card_inner">
            <p class="text-primary-p">So Sánh</p>
            <span class="font-bold text-title">Q1</span>
            <span class="font-bold text-title">Q2</span>
        </div>
    </div>
</div>

<div class="charts">
    {{--    Chart 1: Giá trung bình quận--}}
    <div class="charts__left">
        <div class="charts__left__title">
            <div>
                <h1>GIÁ ĐẤT TRUNG BÌNH (Triệu/m<sup>2</sup>)</h1>
                <p style="margin-bottom: 10px" id="distName"></p>
            </div>
            <i class="fa fa-usd" aria-hidden="true"></i>
        </div>
        <div id="avgPrice" style="height: 300px"></div>
    </div>

    {{--    Chart 2: Giá Từng Phường--}}
    <div class="charts__right">
        <div class="charts__right__title">
            <div>
                <h1>GIÁ ĐẤT PHƯỜNG(Triệu/m<sup>2</sup>)</h1>
                <p style="margin-bottom: 10px" id="wardName"></p>
            </div>
            <i class="fa fa-usd" aria-hidden="true"></i>
        </div>

        <div id="wardPrice" style="height: 300px"></div>
    </div>

    {{--    Chart 3: So sánh giá trung bình quận và giá từng phường--}}
    <div class="charts__left">
        <div class="charts__left__title">
            <div>
                <h1>SO SÁNH GIÁ ĐẤT(Triệu/m<sup>2</sup>)</h1>
                <p style="margin-bottom: 10px" id="titleChartCompare"></p>
            </div>
            <i class="fa fa-usd" aria-hidden="true"></i>
        </div>
        <div id="compareChart" style="height: 300px"></div>
    </div>

    {{--  Chart 4: So sánh giá đất các phường--}}
    <div class="charts__right">
        <div class="charts__right__title">
            <div>
                <h1>THỐNG KÊ PHƯỜNG(Triệu/m<sup>2</sup>)</h1>
                <p style="margin-bottom: 10px" id="titleWardList"></p>
            </div>
            <i class="fa fa-usd" aria-hidden="true"></i>
        </div>

        <div id="wardCompareChart" style="height: 300px"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.1.0/echarts.min.js"
            integrity="sha512-W7jN6TS8p1Qwh4GSXsXh0tWSdAXN4v0MEgq9uOsYcz8A/KxzSPzBL1jDPErfgKUMb11QV2BknSzY/HltjLKPfg=="
            crossorigin="anonymous"></script>
    <!-- Charting library -->
    <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script text="javascript">

    $(function () {
        //load danh sach quan huyen cua thanh pho dau tien (sau khi load xong webpage)
        let name = $("#districts").val();
        getData(name);

        let Dname = $('select[name=districts] option:selected').text();
        $('#distName').append(Dname);
        $('#titleWardList').append("Giá Đất Tại Phường - ", Dname);
        let Wname = $('select[name=wardList] option:selected').text();
        let year = $('select[name=Year] option:selected').text();

        $(document).ajaxComplete(function (Wname) {
            //insert name ward in first load district.
            Wname = $('select[name=wardList] option:selected').text();
            $('#wardName').empty();
            $('#wardName').append(Wname);
            $('#titleChartCompare').empty();
            $('#titleChartCompare').append("Trung Bình",Dname," Và Phường ",Wname,);
            $('#wardPrice').empty();
            chartWard(Dname, Wname, year);
            $('#compareChart').empty();
            comparePrice(Dname, Wname, year);
        });
        chartDistrict(Dname, year);
        wardComparePrice(Dname, Wname, year)

        function getData(name) {
            url = "/Market/getWard/" + name;
            $.get(url)
                .done(function (data) {
                    console.log("data: " + data);
                    var bodyData = '';
                    $.each(JSON.parse(data), function (index, row) {
                        bodyData += "<option value=" + row.WardID + ">" + row.WardName + "</option>"
                    })
                    $("#wardList").empty().append(bodyData);
                });
            let Wname = $('select[name=wardList] option:selected').text();
        }


        $("#districts").change(function (e) {
            e.preventDefault();
            let name = $("#districts").val();
            getData(name);

            let Dname = $('select[name=districts] option:selected').text();
            $('#distName').empty();
            $('#distName').append(Dname);
            $('#titleWardList').empty();
            $('#titleWardList').append("Giá Đất Tại Phường - ", Dname);
            $(document).ajaxComplete(function (Wname) {
                //insert name ward in first load district.
                Wname = $('select[name=wardList] option:selected').text();
                $('#wardName').empty();
                $('#wardName').append(Wname);
                $('#titleChartCompare').empty();
                $('#titleChartCompare').append("Trung Bình",Dname," Và Phường ",Wname,);
                $('#wardPrice').empty();
                chartWard(Dname, Wname, year);
                $('#compareChart').empty();
                comparePrice(Dname, Wname, year);
            });

            $('#avgPrice').empty();
            chartDistrict(Dname, year);
        })

        $("#wardList").change(function (e) {
            e.preventDefault();
            let Dname = $('select[name=districts] option:selected').text();
            let Wname = $('select[name=wardList] option:selected').text();
            let year = $('select[name=Year] option:selected').text();

            $('#wardName').empty();
            $('#wardName').append(Wname);
            $('#titleChartCompare').empty();
            $('#titleChartCompare').append("Trung Bình",Dname," Và Phường ",Wname,);

            $('#wardPrice').empty();
            chartWard(Dname, Wname, year);
            $('#compareChart').empty();
            comparePrice(Dname, Wname, year);
        });

        $("#Year").change(function (e) {
            e.preventDefault();
            let Dname = $('select[name=districts] option:selected').text();
            let Wname = $('select[name=wardList] option:selected').text();
            let year = $('select[name=Year] option:selected').text();

            $('#avgPrice').empty();
            chartDistrict(Dname, year);

            $('#wardPrice').empty();
            chartWard(Dname, Wname, year);

            $('#compareChart').empty();
            comparePrice(Dname, Wname, year)
        });


        function chartDistrict(Dname, year) {
            //Chart 1: Giá trung bình quận
            let distUrl = "@chart('avgPrice')?DistrictName=" + Dname + "&Year=" + year;

            const avgPrice = new Chartisan({
                el: '#avgPrice',
                url: distUrl,
                hooks: new ChartisanHooks()
                    .responsive(true)
                    .beginAtZero()
                    .colors(['#7B1FA2'])
                    .legend({position: 'bottom'})
                    .borderColors()
                    .datasets([{type: 'line', fill: false}]),
            });
        }

        function chartWard(Dname, Wname, year) {
            //Chart 2: Giá Từng Phường
            let wardUrl = "@chart('wardPrice')?DistrictName=" + Dname + "&WardName=" + Wname + "&Year=" + year;
            const wardPrice = new Chartisan({
                el: '#wardPrice',
                url: wardUrl,
                hooks: new ChartisanHooks()
                    .responsive(true)
                    .beginAtZero()
                    .colors(['#FF5722'])
                    .legend({position: 'bottom'})
                    .borderColors()
                    .datasets([{type: 'line', fill: false}]),
            });
        }

        function comparePrice(Dname, Wname, year) {
            //Chart 3: So sánh giá trung bình quận và giá từng phường
            let compUrl = "@chart('comparePriceDistAndWard')?DistrictName=" + Dname + "&WardName=" + Wname + "&Year=" + year
            const AvgWithWard = new Chartisan({
                el: '#compareChart',
                url: compUrl,
                hooks: new ChartisanHooks()
                    .responsive(true)
                    .beginAtZero()
                    .colors(['#FF5722', '#7B1FA2'])
                    .legend({position: 'bottom'})
                    .borderColors()
                    .datasets([{type: 'line', fill: false}, {type: 'line', fill: false}]),
            });
        }

        function wardComparePrice(Dname, Wname, year) {
            //Chart 3: So sánh giá trung bình quận và giá từng phường
            let compUrl2 = "@chart('wardCompareChart')";
            const wardCompare = new Chartisan({
                el: '#wardCompareChart',
                url: compUrl2,
                hooks: new ChartisanHooks()
                    .responsive(true)
                    .beginAtZero()
                    .colors(['#FF5722', '#7B1FA2'])
                    .legend({position: 'bottom'})
                    .borderColors()
                    .datasets([{type: 'bar', fill: false}, {type: 'bar', fill: false}]),
            });
        }
    });

</script>
