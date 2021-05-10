
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
        <i class="fa fa-thumbs-up fa-2x text-green" aria-hidden="true"> - So Sánh: </i>
        <div class="card_inner">
            <p class="text-primary-p">
                <a href="{{ route('compare') }}"><button id="button">Access</button></a>
            </p>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.1.0/echarts.min.js"></script>
    <!-- Charting library -->
    <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{--<script src="{{ asset('/js/chart.js') }}"></script>--}}
<script >

    $(function () {
        //load danh sach quan huyen cua thanh pho dau tien (sau khi load xong webpage)
        let name = $("#districts").val();
        getData(name);

        let Dname = $('select[name=districts] option:selected').text();
        $('#distName').append(Dname);
        $('#titleWardList').append("Giá Đất Các Phường - ", Dname);
        let Wname = $('select[name=wardList] option:selected').text();
        let year = $('select[name=Year] option:selected').text();

        $(document).ajaxComplete(function (Wname) {
            //insert name ward in first load district.
            Wname = $('select[name=wardList] option:selected').text();
            $('#wardName').empty();
            $('#wardName').append(Wname);
            $('#titleChartCompare').empty();
            $('#titleChartCompare').append("Trung Bình", Dname, " Và ", Wname,);
            $('#wardPrice').empty();
            chartWard(Dname, Wname, year);
            $('#compareChart').empty();
            comparePrice(Dname, Wname, year);
        });

        chartDistrict(Dname, year);
        compareWardAndWard(Dname, year)

        function getData(name) {
            url = "/Market/" + name;
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
            $('#titleWardList').append("Giá Đất Các Phường - ", Dname);

            $(document).ajaxComplete(function (Wname) {
                //insert name ward in first load district.
                Wname = $('select[name=wardList] option:selected').text();
                $('#wardName').empty();
                $('#wardName').append(Wname);
                $('#titleChartCompare').empty();
                $('#titleChartCompare').append("Trung Bình", Dname, " Và ", Wname,);

                $('#wardPrice').empty();
                chartWard(Dname, Wname, year);
                $('#compareChart').empty();
                comparePrice(Dname, Wname, year);
            });

            $('#avgPrice').empty();
            chartDistrict(Dname, year);
            $('#wardCompareChart').empty();
            compareWardAndWard(Dname, year)
        })

        $("#wardList").change(function (e) {
            e.preventDefault();
            let Dname = $('select[name=districts] option:selected').text();
            let year = $('select[name=Year] option:selected').text();
            let Wname = $('select[name=wardList] option:selected').text();
            $(document).ajaxComplete(function (Wname) {
                //insert name ward in first load district.
                Wname = $('select[name=wardList] option:selected').text();
                $('#wardName').empty();
                $('#wardName').append(Wname);
            });
            $('#titleChartCompare').empty();
            $('#titleChartCompare').append("Trung Bình", Dname, " Và ", Wname,);

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
            $('#wardCompareChart').empty();
            compareWardAndWard(Dname, year)
        });

        //Chart 1: Giá đất trung bình từng quận
        function chartDistrict(Dname, year) {

            let distUrl = "@chart('avgPrice')?DistrictName=" + Dname + "&Year=" + year;
            const avgPrice = new Chartisan({
                el: '#avgPrice',
                url: distUrl,
                hooks: new ChartisanHooks()
                    .responsive(true)
                    .beginAtZero()
                    .legend({position: 'bottom'})
                    .datasets([{
                        type: 'line',
                        fill: false,
                        borderColor: 'rgba(30,136,229 ,1)',
                        backgroundColor: '#81D4FA',
                        borderWidth: 1,
                        tension: 0,
                        //point trên đường chart
                        pointBorderColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(255, 159, 64, 0.7)',
                            'rgba(255, 205, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(230,74,25 ,0.7)',
                            'rgba(85,139,47 ,0.7)',
                            'rgba(0,151,167 ,0.7)',
                            'rgba(26,35,126 ,0.7)',
                            'rgba(255,61,0 ,0.7)',
                            'rgba(61,90,254 ,0.7)',
                            'rgba(245,0,87 ,0.7)',
                            'rgba(244,81,30 ,0.7)',
                        ],
                        pointBackgroundColor: 'white',
                        pointBorderWidth: 1,
                        pointRadius: 3.5,
                        //hover
                        pointHoverRadius: 5,
                        // pointHoverBorderColor: '#EC407A',
                        pointHoverBorderWidth: 2,
                        pointHoverBackgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 205, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(230,74,25 ,1)',
                            'rgba(85,139,47 ,1)',
                            'rgba(0,151,167 ,1)',
                            'rgba(26,35,126 ,1)',
                            'rgba(255,61,0 ,1)',
                            'rgba(61,90,254 ,1)',
                            'rgba(245,0,87 ,1)',
                            'rgba(244,81,30 ,1)',
                        ],
                    }]),
            });
        }

        //Chart 2: Giá đất Từng Phường
        function chartWard(Dname, Wname, year) {

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
                    .datasets([{
                        type: 'line',
                        fill: false,
                        borderColor: '#4A148C',
                        backgroundColor: '#81D4FA',
                        borderWidth: 1,
                        tension: 0,
                        //point trên đường chart
                        pointBorderColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(255, 159, 64, 0.7)',
                            'rgba(255, 205, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(230,74,25 ,0.7)',
                            'rgba(85,139,47 ,0.7)',
                            'rgba(0,151,167 ,0.7)',
                            'rgba(26,35,126 ,0.7)',
                            'rgba(255,61,0 ,0.7)',
                            'rgba(61,90,254 ,0.7)',
                            'rgba(245,0,87 ,0.7)',
                            'rgba(244,81,30 ,0.7)',
                        ],
                        pointBackgroundColor: 'white',
                        pointBorderWidth: 1,
                        pointRadius: 3.5,
                        //hover
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 2,
                        pointHoverBackgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 205, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(230,74,25 ,1)',
                            'rgba(85,139,47 ,1)',
                            'rgba(0,151,167 ,1)',
                            'rgba(26,35,126 ,1)',
                            'rgba(255,61,0 ,1)',
                            'rgba(61,90,254 ,1)',
                            'rgba(245,0,87 ,1)',
                            'rgba(244,81,30 ,1)',
                        ],
                    }]),
            });
        }

        //Chart 3: So sánh giá trung bình quận và giá từng phường
        function comparePrice(Dname, Wname, year) {

            let compUrl = "@chart('comparePriceDistAndWard')?DistrictName=" + Dname + "&WardName=" + Wname + "&Year=" + year;
            const AvgWithWard = new Chartisan({
                el: '#compareChart',
                url: compUrl,
                hooks: new ChartisanHooks()
                    .responsive(true)
                    .beginAtZero()
                    .colors(['#FF5722', '#7B1FA2'])
                    .legend({position: 'bottom'})
                    .borderColors()
                    .datasets([{
                        type: 'line',
                        fill: false,
                        borderColor: '#EF6C00',
                        backgroundColor: '#81D4FA',
                        borderWidth: 1,
                        tension: 0,
                        //point trên đường chart
                        pointBorderColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(255, 159, 64, 0.7)',
                            'rgba(255, 205, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(230,74,25 ,0.7)',
                            'rgba(85,139,47 ,0.7)',
                            'rgba(0,151,167 ,0.7)',
                            'rgba(26,35,126 ,0.7)',
                            'rgba(255,61,0 ,0.7)',
                            'rgba(61,90,254 ,0.7)',
                            'rgba(245,0,87 ,0.7)',
                            'rgba(244,81,30 ,0.7)',
                        ],
                        pointBackgroundColor: 'white',
                        pointBorderWidth: 1,
                        pointRadius: 3.5,
                        //hover
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 2,
                        pointHoverBackgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 205, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(230,74,25 ,1)',
                            'rgba(85,139,47 ,1)',
                            'rgba(0,151,167 ,1)',
                            'rgba(26,35,126 ,1)',
                            'rgba(255,61,0 ,1)',
                            'rgba(61,90,254 ,1)',
                            'rgba(245,0,87 ,1)',
                            'rgba(244,81,30 ,1)',
                        ],
                    },
                    {
                        type: 'line',
                        fill: false,
                        borderColor: '#4A148C',
                        backgroundColor: '#81D4FA',
                        borderWidth: 1,
                        tension: 0,
                        //point trên đường chart
                        pointBorderColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(255, 159, 64, 0.7)',
                            'rgba(255, 205, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(230,74,25 ,0.7)',
                            'rgba(85,139,47 ,0.7)',
                            'rgba(0,151,167 ,0.7)',
                            'rgba(26,35,126 ,0.7)',
                            'rgba(255,61,0 ,0.7)',
                            'rgba(61,90,254 ,0.7)',
                            'rgba(245,0,87 ,0.7)',
                            'rgba(244,81,30 ,0.7)',
                        ],
                        pointBackgroundColor: 'white',
                        pointBorderWidth: 1,
                        pointRadius: 3.5,
                        //hover
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 2,
                        pointHoverBackgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 205, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(230,74,25 ,1)',
                            'rgba(85,139,47 ,1)',
                            'rgba(0,151,167 ,1)',
                            'rgba(26,35,126 ,1)',
                            'rgba(255,61,0 ,1)',
                            'rgba(61,90,254 ,1)',
                            'rgba(245,0,87 ,1)',
                            'rgba(244,81,30 ,1)',
                        ],
                    }]),
            });
        }

        // Chart 4: So sánh giá trung bình quận và giá từng phường
        function compareWardAndWard(Dname, year) {
            let compWardUrl = "@chart('wardCompareChart')?DistrictName=" + Dname + "&WardName=" + Wname + "&Year=" + year;
            const wardCompare = new Chartisan({
                el: '#wardCompareChart',
                url: compWardUrl,
                hooks: new ChartisanHooks()
                    .responsive(true)
                    .beginAtZero()
                    .colors(['#FF5722'])
                    .legend({position: 'bottom'})
                    .borderColors()
                    .datasets([{
                        type: 'bar',
                        fill: false,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.3)',
                            'rgba(255, 159, 64, 0.3)',
                            'rgba(255, 205, 86, 0.3)',
                            'rgba(75, 192, 192, 0.3)',
                            'rgba(54, 162, 235, 0.3)',
                            'rgba(153, 102, 255, 0.3)',
                            'rgba(230,74,25 ,0.3)',
                            'rgba(85,139,47 ,0.3)',
                            'rgba(0,151,167 ,0.3)',
                            'rgba(26,35,126 ,0.3)',
                            'rgba(255,61,0 ,0.3)',
                            'rgba(61,90,254 ,0.3)',
                            'rgba(245,0,87 ,0.3)',
                            'rgba(244,81,30 ,0.3)',
                            'rgba(255, 99, 132, 0.3)',
                            'rgba(255, 159, 64, 0.3)',
                            'rgba(255, 205, 86, 0.3)',
                            'rgba(75, 192, 192, 0.3)',
                            'rgba(54, 162, 235, 0.3)',
                            'rgba(153, 102, 255, 0.3)',
                            'rgba(230,74,25 ,0.3)',
                            'rgba(85,139,47 ,0.3)',
                            'rgba(0,151,167 ,0.3)',
                            'rgba(26,35,126 ,0.3)',
                            'rgba(255,61,0 ,0.3)',
                            'rgba(61,90,254 ,0.3)',
                            'rgba(245,0,87 ,0.3)',
                            'rgba(244,81,30 ,0.3)',
                        ],
                        hoverBackgroundColor:[
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(255, 159, 64, 0.7)',
                            'rgba(255, 205, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(230,74,25 ,0.7)',
                            'rgba(85,139,47 ,0.7)',
                            'rgba(0,151,167 ,0.7)',
                            'rgba(26,35,126 ,0.7)',
                            'rgba(255,61,0 ,0.7)',
                            'rgba(61,90,254 ,0.7)',
                            'rgba(245,0,87 ,0.7)',
                            'rgba(244,81,30 ,0.7)',
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(255, 159, 64, 0.7)',
                            'rgba(255, 205, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(230,74,25 ,0.7)',
                            'rgba(85,139,47 ,0.7)',
                            'rgba(0,151,167 ,0.7)',
                            'rgba(26,35,126 ,0.7)',
                            'rgba(255,61,0 ,0.7)',
                            'rgba(61,90,254 ,0.7)',
                            'rgba(245,0,87 ,0.7)',
                            'rgba(244,81,30 ,0.7)',
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 6)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(230,74,25)',
                            'rgb(85,139,47)',
                            'rgb(0,151,167)',
                            'rgb(26,35,126)',
                            'rgb(255,61,0)',
                            'rgb(61,90,254)',
                            'rgb(245,0,87)',
                            'rgb(244,81,30)',
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 6)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(230,74,25)',
                            'rgb(85,139,47)',
                            'rgb(0,151,167)',
                            'rgb(26,35,126)',
                            'rgb(255,61,0)',
                            'rgb(61,90,254)',
                            'rgb(245,0,87)',
                            'rgb(244,81,30)',
                        ],
                        borderWidth: 1,
                    }]),
            });
        }

    });

</script>

