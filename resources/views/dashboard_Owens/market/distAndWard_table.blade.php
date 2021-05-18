<div class="tableInLine">
        <table id="distTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered" style="width: 100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">DANH SÁCH QUẬN
                TP.HCM - <a class="btn-insert btn btn-outline-info" href="{{ route('admin_market.create') }}">Insert</a>
            </caption>
            <thead>
            <tr>
                <th>DistrictID</th>
                <th>Quận</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($distList as $a)
                <tr>
                    <td>{{ $a->DistrictID }}</td>
                    <td>{{ $a->DistrictName }}</td>
                    <td>
                        <a id="edit" name="edit"  class="edit btn btn-outline-info" href="{{ route('admin_market.detail_District', ['DistrictID'=>$a->DistrictID]) }}">Edit</a>
                        <a id="delete" name="delete" class="delete btn btn-outline-danger" href="{{ route('admin_market.delete_District', ['DistrictID'=>$a->DistrictID]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <table id="wardTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered" style="width: 100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">DANH SÁCH
                PHƯỜNG - <a class="btn-insert btn btn-outline-info" href="{{ route('admin_market.create') }}">Insert</a>
            </caption>
            <thead>
            <tr>
                <th>WardID</th>
                <th>Quận</th>
                <th>ID Quận</th>
                <th>Phường</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($wardList as $v)
            <tr>
                <td>{{ $v->WardID }}</td>
                <td>{{ $v->DistrictName }}</td>
                <td>{{ $v->DistrictID }}</td>
                <td>{{ $v->WardName }}</td>
                <td>
                    <a id="edit" name="edit"  class="edit btn btn-outline-info" href="{{ route('admin_market.detail_Ward', ['WardID'=>$v->WardID]) }}">Edit</a>
                    <a id="delete" name="delete" class="delete btn btn-outline-danger" href="{{ route('admin_market.delete_Ward', ['WardID'=>$v->WardID]) }}">Delete</a>
                </td>
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
        });

        var tableDist = $('#distTable').DataTable({
            "scrollX": true,
            lengthMenu: [5, 10, 20, 50],
        });

    });

</script>
