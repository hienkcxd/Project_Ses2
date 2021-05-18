@extends('Layout.Owens')

@section('content')
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
                                <option value="{{ $value->DistrictName }}">--- {{ $value->DistrictName }} ---</option>
                                @foreach ($disList as $item)
                                    <option value="{{ $item->DistrictName }}"> {{ $item->DistrictName }} </option>
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
                                <option value="2020"> 2020</option>
                                <option value="2021"> 2021</option>
                            </select>
                        </p>
                    </div>

                    <div class="secondRow">
                        <p>
                            <label>Tháng 1</label><input type="number" name='Thang_1' min="0"
                                                         value="{{ $value->Thang_01 }}">
                        </p>

                        <p>
                            <label>Tháng 2</label><input type="number" name='Thang_2' min="0"
                                                         value="{{ $value->Thang_02 }}">
                        </p>

                        <p>
                            <label>Tháng 3</label><input type="number" name='Thang_3' min="0"
                                                         value="{{ $value->Thang_03 }}">
                        </p>

                        <p>
                            <label>Tháng 4</label><input type="number" name='Thang_4' min="0"
                                                         value="{{ $value->Thang_04 }}">
                        </p>
                    </div>

                    <div class="secondRow">
                        <p>
                            <label>Tháng 5</label><input type="number" name='Thang_5' min="0"
                                                         value="{{ $value->Thang_05 }}">
                        </p>

                        <p>
                            <label>Tháng 6</label><input type="number" name='Thang_6' min="0"
                                                         value="{{ $value->Thang_06 }}">
                        </p>

                        <p>
                            <label>Tháng 7</label><input type="number" name='Thang_7' min="0"
                                                         value="{{ $value->Thang_07 }}">
                        </p>

                        <p>
                            <label>Tháng 8</label><input type="number" name='Thang_8' min="0"
                                                         value="{{ $value->Thang_08 }}">
                        </p>
                    </div>

                    <div class="secondRow">
                        <p>
                            <label>Tháng 9</label><input type="number" name='Thang_9' min="0"
                                                         value="{{ $value->Thang_07 }}">
                        </p>

                        <p>
                            <label>Tháng 10</label><input type="number" name='Thang_10' min="0"
                                                          value="{{ $value->Thang_08 }}">
                        </p>

                        <p>
                            <label>Tháng 11</label><input type="number" name='Thang_11' min="0"
                                                          value="{{ $value->Thang_09 }}">
                        </p>

                        <p>
                            <label>Tháng 12</label><input type="number" name='Thang_12' min="0"
                                                          value="{{ $value->Thang_10 }}">
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
                let name = $("#districts").val();
                let Wname = $("#wardList").val();
                let Dname = $('select[name=districts] option:selected').text();

                $("#districts").change(function (e) {
                    e.preventDefault();
                    $(document).ajaxComplete(function (Wname) {
                        Wname = $("#wardList").val();;
                    });
                        name = $("#districts").val();
                        Dname = $('select[name=districts] option:selected').text();
                    console.log(Dname + Wname)
                });


            });

        </script>
@endsection
@section('title', 'Owens_Market_Detail')
