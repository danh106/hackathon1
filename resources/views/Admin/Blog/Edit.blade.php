@{
    Layout = "~/Areas/Admin/Views/Shared/_Layout.cshtml";
}
@using DO_AN_WEB_THUE_SACH.Database
@model List<TblBlog>
<div class="d-flex mb-1">
    <a href="/Admin/Blog" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Chinh sửa bài viết</h3>
</div>
<form action="/Admin/blog/edit" method="post" class="row pb-2" id="myform" onsubmit="false">
    <div class="col-12 col-md-6">
        <div class="py-1 d-none">
            <input class="form-control border-primary" value="@Model[0].BlogId" type="text" name="BlogId" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Tiêu đề</label>
            <input class="form-control border-primary" value="@Model[0].Title" type="text" name="Title" id="">
        </div>
         <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Mo ta</label>
            <textarea class="form-control border-primary" name="Description">@Model[0].Description</textarea>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Trang thai</label>
            <select class="form-select border-primary" name="IsActive" aria-label="Default select example">
                <option value="">--</option>
                @if(Model[0].IsActive==true){
                    <option selected value="True">Hiện</option>
                    <option value="Fasle">Ẩn</option>
                }else{
                    <option value="True">Hiện</option>
                    <option selected value="Fasle">Ẩn</option>
                }
            </select>
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Anh bia</label>
            <input class="form-control border-primary" value="@Model[0].Image" type="text" name="Image" id="urlCoverImage " onchange="loadimg()">
            <img style="width: 250px;" id="img" class="img-fluid mx-auto" src="@Model[0].Image" alt="">
        </div>
    </div>
    <div class="col-12">
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Nội dung bài viết</label>
            <div id="editor">@Html.Raw(Model[0].Detail)</div>
            <textarea class="d-none" name="Detail" id="textarea"></textarea>
        </div>
        <div class="py-1 d-flex">
            <button type="button" class="btn btn-primary ms-auto" onclick="sumbitform()">Cập nhật</button>
        </div>
    </div>
    @Html.Raw(Model[0].Detail)
</form>