<div id="rs"></div>
<table id="marketTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered" style="width:100%">
    <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">DỮ LIỆU GIÁ ĐẤT ĐAI TP.HỒ
        CHÍ MINH - (Triệu/m<sup>2</sup>) - <a  class="btn-insert btn btn-outline-info" href="{{ route('admin_market.create') }}">Insert</a>
    </caption>
    <thead>
    <tr>
        <th>id</th>
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
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function () {
        // DataTable
      var table =  $('#marketTable').DataTable({
            columnDefs: [
                {orderable: false, targets: "_all"},
                {visible: false, targets: 0}
            ],
            "scrollX": true,
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{route('admin_market.getMarket')}}",
                type: "GET",
                },
            columns: [
                    {data: 'MarketID', name: 'MarketID'},
                    {data: 'DistrictName', name: 'DistrictName'},
                    {data: 'WardName', name: 'DistrictName'},
                    {data: 'Year'},
                    {data: 'Thang_01'},
                    {data: 'Thang_02'},
                    {data: 'Thang_03'},
                    {data: 'Thang_04'},
                    {data: 'Thang_05'},
                    {data: 'Thang_06'},
                    {data: 'Thang_07'},
                    {data: 'Thang_08'},
                    {data: 'Thang_09'},
                    {data: 'Thang_10'},
                    {data: 'Thang_11'},
                    {data: 'Thang_12'},
                    {data: null, defaultContent: '<a id="edit" name="edit"  class="edit btn btn-outline-info" href="">Edit</a> ' +
                            '                     <a id="delete" name="delete" class="delete btn btn-outline-danger" href="">Delete</a>'},
                ]
        //    <a class="btn btn-outline-primary" " href="{{ route('login') }}">Detail</a>
        });

        $('#marketTable tbody').on( 'click', '#edit', function getID() {
            var $MarketID = table.row( $(this).parents('tr') ).data();
            document.location = ""
            $('.edit').attr('href', function() {
                return document.location + "/detail_"+$MarketID['MarketID'];
            });

            });

        $('#marketTable tbody').on( 'click', '#delete', function getID() {
            var $MarketID = table.row( $(this).parents('tr') ).data();
            $('.delete').attr('href', function() {
                return document.location + "/delete_"+$MarketID['MarketID'];
            });
        } );
    });


</script>

