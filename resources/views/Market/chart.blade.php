<div class="charts">
{{--    Chart 1: Giá trung bình quận--}}
    <div class="charts__left">
        <div class="charts__left__title">
            <div>
                <h1>GIÁ ĐẤT TRUNG BÌNH (Triệu/m<sup>2</sup>)</h1>
                <p style="margin-bottom: 10px">Quận 1</p>
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
                <p style="margin-bottom: 10px">Bến Nghé</p>
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
                <p style="margin-bottom: 10px">TRUNG BÌNH QUẬN 1 VÀ PHƯỜNG BẾN NGHÉ</p>
            </div>
            <i class="fa fa-usd" aria-hidden="true"></i>
        </div>
        <div id="AvgWithWard" style="height: 300px"></div>
    </div>

{{--    Thống kê số liệu--}}
    <div class="charts__right">
        <div class="charts__right__title">
            <div>
                <h1>Thống Kê Số liệu</h1>
                <p>Quận 1</p>
            </div>
            <i class="fa fa-usd" aria-hidden="true"></i>
        </div>

        <div class="charts__right__cards">
            <div class="card1">
                <h1>Max</h1>
                <p>$75,300</p>
            </div>

            <div class="card2">
                <h1>min</h1>
                <p>$24,200</p>
            </div>

            <div class="card3">
                <h1>Ave</h1>
                <p>3900</p>
            </div>
            <div class="card4">
                <h1>Safe</h1>
                <p>Yes</p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.1.0/echarts.min.js" integrity="sha512-W7jN6TS8p1Qwh4GSXsXh0tWSdAXN4v0MEgq9uOsYcz8A/KxzSPzBL1jDPErfgKUMb11QV2BknSzY/HltjLKPfg==" crossorigin="anonymous"></script>
    <!-- Charting library -->
    <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
</div>
<script>
    //Chart 1: Giá trung bình quận
    const avgPrice = new Chartisan({
        el: '#avgPrice',
        url: "@chart('avgPrice')?MarketID=2",
        hooks: new ChartisanHooks()
            .responsive(true)
            .beginAtZero()
            .colors(['#7B1FA2'])
            .legend({position: 'bottom'})
            .borderColors()
            .datasets([{ type: 'line', fill: false }]),
    });

    //Chart 2: Giá Từng Phường
    const wardPrice = new Chartisan({
        el: '#wardPrice',
        url: "@chart('wardPrice')",
        hooks: new ChartisanHooks()
            .responsive(true)
            .beginAtZero()
            .colors(['#FF5722'])
            .legend({position: 'bottom'})
            .borderColors()
            .datasets([{ type: 'line', fill: false }]),
    });

    //Chart 3: So sánh giá trung bình quận và giá từng phường
    const AvgWithWard = new Chartisan({
        el: '#AvgWithWard',
        url: "@chart('AvgWithWard')",
        hooks: new ChartisanHooks()
            .responsive(true)
            .beginAtZero()
            .colors(['#FF5722', '#7B1FA2'])
            .legend({position: 'bottom'})
            .borderColors()
            .datasets([{ type: 'line', fill: false}, { type: 'line', fill: false }]),
    });
</script>
