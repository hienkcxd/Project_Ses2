<style>
    .uk-table tr th{
        font-size: 0.8rem;
    }
    .uk-table tr td{
        font-size: 0.8rem;
    }
</style>
<div>
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
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $value)
        <tr>
            <td>{{ $value->DistrictName }}</td>
            <td>{{ $value->WardName }}</td>
            <td>{{ $value->Year }}</td>
            <td>{{ $value->Thang_01 }}</td>
            <td>{{ $value->Thang_02 }}</td>
            <td>{{ $value->Thang_03 }}</td>
            <td>{{ $value->Thang_04 }}</td>
            <td>{{ $value->Thang_05 }}</td>
            <td>{{ $value->Thang_06 }}</td>
            <td>{{ $value->Thang_07 }}</td>
            <td>{{ $value->Thang_08 }}</td>
            <td>{{ $value->Thang_09 }}</td>
            <td>{{ $value->Thang_10 }}</td>
            <td>{{ $value->Thang_11 }}</td>
            <td>{{ $value->Thang_12 }}</td>
            <td><a class="btn btn-sm btn-outline-primary" href="{{ route('admin_market_id', ['marketID' => $value->MarketID]) }}">Detail</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

