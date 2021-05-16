{{--<style>--}}
{{--    .uk-table tr th{--}}
{{--        font-size: 0.8rem;--}}
{{--    }--}}
{{--    .uk-table tr td{--}}
{{--        font-size: 0.8rem;--}}
{{--    }--}}
{{--</style>--}}
<table id="" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered" style="width:100%">
    <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">DỮ LIỆU GIÁ ĐẤT ĐAI TP.HỒ CHÍ MINH</caption>
    <thead>
    <tr>
        <th>Quận</th>
        <th>Phường</th>
        <th>Năm</th>
        <th>Tháng 1</th>
        <th>Tháng 2</th>
        <th>Tháng 3</th>
        <th>Tháng 4</th>
        <th>Tháng 5</th>
        <th>Tháng 6</th>
        <th>Tháng 7</th>
        <th>Tháng 8</th>
        <th>Tháng 9</th>
        <th>Tháng 10</th>
        <th>Tháng 11</th>
        <th>Tháng 12</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function(){
        // DataTable
        $('.uk-table').DataTable({
            "soft":false,
            "scrollX": true,
            processing: true,
            serverSide: true,
            ajax: "{{route('admin_market.getMarket')}}",
            columns: [
                { data: 'DistrictName' },
                { data: 'WardName' },
                { data: 'Year' },
                { data: 'Thang_01' },
                { data: 'Thang_02' },
                { data: 'Thang_03' },
                { data: 'Thang_04' },
                { data: 'Thang_05' },
                { data: 'Thang_06' },
                { data: 'Thang_07' },
                { data: 'Thang_08' },
                { data: 'Thang_09' },
                { data: 'Thang_10' },
                { data: 'Thang_11' },
                { data: 'Thang_12' },
            ]
        });
    });
</script>
