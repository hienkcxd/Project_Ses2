<div class="main__cards">

    <div class="card">
        <i class="fa fa-user-o fa-2x text-lightblue" aria-hidden="true"></i>
        <div class="card_inner">
            <p class="text-primary-p">
                <select name="districts" id="districts">
                    @foreach ($disList as $item)
                        <option value="{{ $item->DistrictID }}"> {{ $item->DistrictName }} </option>
                    @endforeach
                </select>
            </p>
        </div>
    </div>

    <div class="card">
        <i class="fa fa-calendar fa-2x text-red" aria-hidden="true"></i>
        <div class="card_inner">
            <p class="text-primary-p">
                <select name="wardList" id="wardList">

                </select>
            </p>
        </div>
    </div>

    <div class="card">
        <i
            class="fa fa-video-camera fa-2x text-yellow"
            aria-hidden="true"
        ></i>
        <div class="card_inner">
            <p class="text-primary-p">Giá Trung Bình: 120(Triệu/m<sup>2</sup>)</p>
        </div>
    </div>

    <div class="card">
        <i
            class="fa fa-thumbs-up fa-2x text-green"
            aria-hidden="true"
        ></i>
        <div class="card_inner">
            <p class="text-primary-p">So Sánh</p>
            <span class="font-bold text-title">Q1</span>
            <span class="font-bold text-title">Q2</span>
        </div>
    </div>
</div>

<script text="javascript">

    $(function(){
        //load danh sach quan huyen cua thanh pho dau tien (sau khi load xong webpage)
        let name = $("#districts").val();
        getData(name);
        $("#districts").change(function (e) {
            e.preventDefault();
            let name = $("#districts").val();
            getData(name);

        });

        function getData(name){
            url = "/Market/test/" + name;
            $.get(url)
                .done(function( data ) {
                    console.log(data);
                    var bodyData = '';
                    $.each(JSON.parse(data),function(index,row){
                        bodyData+="<option value=" + row.id + ">" + row.name +"</option>"
                    })
                    $("#wardList").empty().append(bodyData);
                });
        }

    });
</script>
