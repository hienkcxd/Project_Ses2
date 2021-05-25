@extends('Layout.employee')
@section('content')
    <div class="main__container">
        <!-- MAIN TITLE STARTS HERE -->
        <div class="main__title">
            <img src="{{ asset('/images/market/hello.svg') }}" alt=""/>
            <div class="main__greeting">
                <h1 style="font-weight: bold">Wellcome {{ $account->Account  }}!!!</h1>
            </div>
        </div>
        <!-- MAIN TITLE ENDS HERE -->

        <div class="main__cards">

            <div class="cardRow1">
                <div class="card">
                    <i class="fa fa-home fa-2x" aria-hidden="true"> - Tên Nhân Viên:</i>
                    <div class="card_inner">
                        <p class="text-primary-p">{{ $name->EmpName  }}
                        </p>
                    </div>
                </div>
                <div class="card">
                    <i class="fa fa-archive fa-2x" aria-hidden="true"> - Tài Khoản:</i>
                    <div class="card_inner">
                        <p class="text-primary-p">{{ $account->Account  }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="cardRow2">
                <div class="card" >
                    <i class="fa fa-calendar fa-2x " aria-hidden="true"> - Chức Vụ:</i>
                    <div class="card_inner">
                        <p class="text-primary-p">{{ $name->Position  }}
                        </p>
                    </div>
                </div>
                <div class="card">
                    <i class="fa fa-search fa-2x " aria-hidden="true"> - Đăng Xuất: </i>
                    <div class="card_inner">
                        <p class="text-primary-p"><a href="{{ route('auth.logout') }}" class="btn btn-outline-success">SignOut</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tableIndex">
        <table id="cusList" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered" style="width: 100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">DANH SÁCH DỰ ÁN QUẢN LÝ - <a class="btn-insert btn btn-outline-info" href="{{ route('owens_Emp') }}">VIEW DETAIL</a>
            </caption>
            <thead>
            <tr>
                <th>ID Công Việc</th>
                <th>Địa Chỉ</th>
                <th>SĐT Khách Hàng</th>
                <th>Tiến ĐỘ</th>
            </tr>
            </thead>
            <tbody>
            @foreach($workList as $w)
                <tr>
                    <td>{{ $w->WorkID }}</td>
                    <td>{{ $w->Address }}</td>
                    <td>{{ $w->CusPhone  }}</td>
                    <td>{{ $w->Progress  }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <table id="empList" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered" style="width: 100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">DANH SÁCH KHÁCH HÀNG - <a class="btn-insert btn btn-outline-info" href="{{ route('owens.customer') }}">VIEW DETAIL</a>
            </caption>
            <thead>
            <tr>
                <th>Tên Khách Hàng</th>
                <th>Số Điện Thoại</th>
                <th>Số Dự Án</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cusList as $cust)
                <tr>
                    <td>{{ $cust->CusName }}</td>
                    <td>{{ $cust->CusPhone }}</td>
                    <td>{{ $cust->total_CusPhone }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            // DataTable
            var tableWard = $('#cusList').DataTable({
                "scrollX": true,
                lengthMenu: [5, 10, 20, 50],
                "bInfo": false,
                "sort":false,
            });

            var tableDist = $('#empList').DataTable({
                "scrollX": true,
                lengthMenu: [5, 10, 20, 50],
                "bInfo": false,
                "sort":false,
            });

        });

    </script>
@endsection

@section('title', 'Employee_Dashboard')
