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
        $('#titleChartCompare').append("Trung Bình", Dname, " Và Phường ", Wname,);
        $('#wardPrice').empty();
        chartWard(Dname, Wname, year);
        $('#compareChart').empty();
        comparePrice(Dname, Wname, year);
    });

    chartDistrict(Dname, year);
    compareWardAndWard(Dname, year)

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
        $('#titleWardList').append("Giá Đất Các Phường - ", Dname);

        $(document).ajaxComplete(function (Wname) {
            //insert name ward in first load district.
            Wname = $('select[name=wardList] option:selected').text();
            $('#wardName').empty();
            $('#wardName').append(Wname);
            $('#titleChartCompare').empty();
            $('#titleChartCompare').append("Trung Bình", Dname, " Và Phường ", Wname,);

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
        let Wname = $('select[name=wardList] option:selected').text();
        let year = $('select[name=Year] option:selected').text();

        $('#wardName').empty();
        $('#wardName').append(Wname);
        $('#titleChartCompare').empty();
        $('#titleChartCompare').append("Trung Bình", Dname, " Và Phường ", Wname,);

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
