<div class="tableInLine">
        <table id="distTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered" style="width: 100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">DANH SÁCH QUẬN - <a class="btn-insert btn btn-outline-info" href="{{ route('admin_market.create') }}">Create New</a>
            </caption>
            <thead>
            <tr>
                <th>DistrictID</th>
                <th>Quận</th>
            </tr>
            </thead>
            <tbody>
            @foreach($distList as $a)
                <tr>
                    <td>{{ $a->DistrictID }}</td>
                    <td>{{ $a->DistrictName }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <table id="wardTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered" style="width: 100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">DANH SÁCH
                PHƯỜNG - <a class="btn-insert btn btn-outline-info" href="{{ route('admin_market.create') }}">Create New</a>
            </caption>
            <thead>
            <tr>
                <th>WardID</th>
                <th>Quận</th>
                <th>ID Quận</th>
                <th>Phường</th>
            </tr>
            </thead>
            <tbody>
            @foreach($wardList as $v)
            <tr>
                <td>{{ $v->WardID }}</td>
                <td>{{ $v->DistrictName }}</td>
                <td>{{ $v->DistrictID }}</td>
                <td>{{ $v->WardName }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

<script type="text/javascript">
    $(document).ready(function () {
        // DataTable
        var tableWard = $('#wardTable').DataTable({
            "scrollX": true,
            lengthMenu: [5, 10, 20, 50],
            "bInfo": false,
            "sort":false,
        });

        var tableDist = $('#distTable').DataTable({
            "scrollX": true,
            lengthMenu: [5, 10, 20, 50],
            "bInfo": false,
            "sort":false,
        });

    });

</script>
