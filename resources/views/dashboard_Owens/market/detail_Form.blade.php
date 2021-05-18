@extends('Layout.Owens')

@section('content')
    @dd($wardList)
    <div class='container'>
        <div class='wrapper animated bounceInLeft'>
            <div class='company-info'>

            </div>
            <div class='contact'>
                <form method="POST" action=" {{ route('admin_market') }}">
                    @csrf
                    <div class="firstRow">
                        <p>
                            <label>Quận:</label>
                            <select name="districts" id="districts">
                                <option>--- {{ $value->DistrictName }} ---</option>
                                @foreach ($disList as $item)
                                    <option value="{{ $item->DistrictID }}"> {{ $item->DistrictName }} </option>
                                @endforeach
                            </select>
                        </p>

                        <p>
                            <label>Phường:</label>
                            <select name="wardList" id="wardList">
                                <option>--- {{ $value->WardName }} ---</option>
                            </select>
                        </p>

                        <p>
                            <label>Năm:</label>
                            <select name="Year" id="Year">
                                <option value="{{ $value->Year }}">--- {{ $value->Year }} ---</option>
                                <option value="2020"> 2020 </option>
                                <option value="2021"> 2021 </option>
                            </select>
                        </p>
                    </div>

                    <div class="secondRow">
                        <p>
                            <label>Tháng 1</label><input type="number" name='Thang_1' min="0" value="{{ $value->Thang_01 }}">
                        </p>

                        <p>
                            <label>Tháng 2</label><input type="number" name='Thang_2' min="0" value="{{ $value->Thang_02 }}">
                        </p>

                        <p>
                            <label>Tháng 3</label><input type="number" name='Thang_3' min="0" value="{{ $value->Thang_03 }}">
                        </p>

                        <p>
                            <label>Tháng 4</label><input type="number" name='Thang_4' min="0" value="{{ $value->Thang_04 }}">
                        </p>
                    </div>

                    <div class="secondRow">
                        <p>
                            <label>Tháng 5</label><input type="number" name='Thang_5' min="0" value="{{ $value->Thang_05 }}">
                        </p>

                        <p>
                            <label>Tháng 6</label><input type="number" name='Thang_6' min="0" value="{{ $value->Thang_06 }}">
                        </p>

                        <p>
                            <label>Tháng 7</label><input type="number" name='Thang_7' min="0" value="{{ $value->Thang_07 }}">
                        </p>

                        <p>
                            <label>Tháng 8</label><input type="number" name='Thang_8' min="0" value="{{ $value->Thang_08 }}">
                        </p>
                    </div>

                    <div class="secondRow">
                        <p>
                            <label>Tháng 9</label><input type="number" name='Thang_9' min="0" value="{{ $value->Thang_07 }}">
                        </p>

                        <p>
                            <label>Tháng 10</label><input type="number" name='Thang_10' min="0" value="{{ $value->Thang_08 }}">
                        </p>

                        <p>
                            <label>Tháng 11</label><input type="number" name='Thang_11' min="0" value="{{ $value->Thang_09 }}">
                        </p>

                        <p>
                            <label>Tháng 12</label><input type="number" name='Thang_12' min="0" value="{{ $value->Thang_10 }}">
                        </p>
                    </div>

                    <div class="thirdRow">
                        <p class='full'>
                            <button>Submit</button>
                        </p>
                    </div>

                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(function () {
                //load danh sach quan huyen cua thanh pho dau tien (sau khi load xong webpage)
                let name = $("#districts").val();
                getData(name);
                let Dname = $('select[name=districts] option:selected').text();
                let Wname = $('select[name=wardList] option:selected').text();

                $(document).ajaxComplete(function (Wname) {
                    Wname = $('select[name=wardList] option:selected').text();
                });

                function getData(name) {
                    url = "/Admin/owens/market/detail/" + name;
                    $.get(url)
                        .done(function (data) {
                            console.log("data: " + data);
                            var bodyData = '';
                            $.each(JSON.parse(data), function (index, row) {
                                bodyData += "<option value=" + row.WardID + ">" + row.WardName + "</option>"
                            })
                            $("#wardList").empty().append(bodyData);
                        });
                }

                $("#districts").change(function (e) {
                    e.preventDefault();
                    let name = $("#districts").val();
                    getData(name);
                    $(document).ajaxComplete(function (Wname) {
                        //insert name ward in first load district.
                        Wname = $('select[name=wardList] option:selected').text();
                    });

                })
            });

        </script>
@endsection
@section('title', 'Owens_Market_Detail')
