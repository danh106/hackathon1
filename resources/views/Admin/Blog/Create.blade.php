@{
    Layout = "~/Areas/Admin/Views/Shared/_Layout.cshtml";
}
<div class="d-flex mb-1">
    <a href="/Admin/Blog" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Chinh sửa bài viết</h3>
</div>
<form action="/Admin/blog/Create" method="post" class="row pb-2" id="myform" onsubmit="false">
    <div class="col-12 col-md-6">
        <div class="py-1">
            <label for="" class="fw-bold">Tiêu đề</label>
            <input class="form-control border-primary type="text" name="Title" id="">
        </div>
         <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Mo ta</label>
            <textarea class="form-control border-primary" name="Description"></textarea>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Trang thai</label>
            <select class="form-select border-primary" name="IsActive" aria-label="Default select example">
                <option value="">--</option>
                <option selected value="True">Hiện</option>
                <option value="Fasle">Ẩn</option>
            </select>
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Anh bia</label>
            <input class="form-control border-primary" type="text" name="Image" id="urlCoverImage " onchange="loadimg()">
            <img style="width: 250px;" id="img" class="img-fluid mx-auto" alt="">
        </div>
    </div>
    <div class="col-12">
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Nội dung bài viết</label>
            <div id="editor"></div>
            <textarea class="d-none" name="Detail" id="textarea"></textarea>
        </div>
        <div class="py-1 d-flex">
            <button type="button" class="btn btn-primary ms-auto" onclick="sumbitform()">Cập nhật</button>
        </div>
    </div>
</form>