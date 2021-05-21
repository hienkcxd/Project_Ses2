
<div class="container">

    <div class="projectForm">
        <form action="#">
            <div class="title">Thông Tin Dự Án:</div>
            <div class="project-infor">
                <div class="input-box">
                    <span class="details">Project ID:</span>
                    <input type="text"  name="ProjectID" value="{{ $projectDetail->	ProjectID }}" readonly>
                </div>
                <div class="input-box">
                    <span class="details">Project Name:</span>
                    <input type="text" name="ProjectName" value="{{ $projectList->ProjectName }}">
                </div>
                <div class="input-box">
                    <span class="details">Khách Hàng:</span>
                    <input type="text" name="Client" value="{{ $projectDetail->Client }}">
                </div>
                <div class="input-box">
                    <span class="details">Location:</span>
                    <input type="text" name="Location" value="{{ $projectDetail->Location }}">
                </div>
                <div class="input-box">
                    <span class="details">Ngày Hoàn Thành:</span>
                    <input type="text" name="DateFinish" value="{{ $projectDetail->DateFinish }}">
                </div>
                <div class="input-box">
                    <span class="details">Giá:</span>
                    <input type="text" name="Price" value="{{ $projectDetail->Price }}">
                </div>
                <div class="input-box">
                    <span class="details" style="font-weight: bold">Tag Name:</span>
                    <select name="TagName" id="TagName">
                        <option value="{{ $projectList->TagName }}">---{{ $projectList->TagName }}---</option>
                        <option value="NP">NP</option>
                        <option value="DCH">DCH</option>
                        <option value="NTC">NTC</option>
                        <option value="BT">BT</option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="details">Category:</span>
                    <input type="text" name="category" id="category" value="{{ $projectDetail->tagName }}">
                </div>
            </div>

            <div class="title">Nội Dung Dự Án:</div>
            <div class="project-content">
                <div class="input-box">
                    <span class="details">Image Background:</span>
                    <input type="text"  name="ProjectID" value="{{ $projectList->images }}">
                </div>
                <div class="input-box">
                    <span class="details">Image Top:</span>
                    <input type="text"  name="ProjectID" value="{{ $projectDetail->imageTop }}">
                </div>
                <div class="input-box">
                    <span class="details">Image Bot:</span>
                    <input type="text" name="ProjectName" value="{{ $projectDetail->imageBot }}">
                </div>
                <div class="input-box">
                    <span class="details">Content Top:</span>
                    <input type="text" name="Client" value="{{ $projectDetail->contentTop }}">
                </div>
                <div class="input-box">
                    <span class="details">Content Bot:</span>
                    <input type="text" name="Location" value="{{ $projectDetail->contentBot }}">
                </div>
            </div>
            <div class="button">
                    <button class="btn btn-warning">Submit</button>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function () {

            $("#TagName").change(function (e) {
                e.preventDefault();
                let TagName = $('select[name=TagName] option:selected').val();
                console.log(TagName)
                let category = "";
                if(TagName === 'NP'){
                    $("#category").val(function() {
                        category = 'Nhà Phố';
                        this.value = "";
                        return this.value + category;
                    });
                }
                else if(TagName === 'DCH'){
                    $("#category").val(function() {
                        category = 'Decor Căn Hộ';
                        this.value = "";
                        return this.value + category;
                    });
                }
                else if(TagName === 'NTC'){
                    $("#category").val(function() {
                        category = 'Nhà Tân Cổ';
                        this.value = "";
                        return this.value + category;
                    });
                }
                else if (TagName === 'BT'){
                    $("#category").val(function() {
                        category = 'Biệt Thự';
                        this.value = "";
                        return this.value + category;
                    });
                }

            });

        });
    </script>
</div>

