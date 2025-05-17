@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <div class="d-flex">
        <a href="/admin/document/" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
        <h3 class="m-0">Thêm mới tài liệu</h3>
    </div>
    <button id="Aicontents" class="btn btn-primary ms-auto">Dùng AI để tự động hóa nhập dữ liệu</button>
</div>
<form action="{{route('document.store')}}" method="post" id="myform" class="row pb-2" enctype="multipart/form-data">
    @csrf
    <div class="col-12 col-md-6">
        <div class="py-1">
            <label for="" class="fw-bold">Tên tài liệu</label>
            <input class="form-control border-primary" type="text" name="title" id="title">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Tác giả</label>
            <select class="form-select border-primary" name="authorid" aria-label="Default select example">
                <option selected  value="">--</option>
                @foreach ($author as $item) 
                    <option value="{{$item->authorid}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Nhà xuất bản</label>
            <select class="form-select border-primary" name="publisherid" aria-label="Default select example">
                <option selected value="">--</option>
                @foreach ($publisher as $item) 
                    <option value="{{$item->publisherid}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Ngày xuất bản</label>
            <input class="form-control border-primary" type="datetime-local" name="publishdate" id="publishdate">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Ngôn ngữ</label>
            <select class="form-select border-primary" name="languageid" aria-label="Default select example">
                <option selected value="">--</option>
                @foreach ($language as $item) 
                    <option value="{{$item->languageid}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Số trang</label>
            <input class="form-control border-primary" type="number" name="pagecount" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Trạng thái</label>
            <select class="form-select border-primary" name="isactive" aria-label="Default select example">
                <option selected value="1">Hiện</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Tài liệu mới</label>
            <select class="form-select border-primary" name="isnew" aria-label="Default select example">
                <option selected value="1">Mới</option>
                <option value="0">Bình thường</option>
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Thê loại</label>
            <div>
                @foreach ($category as $item) 
                <div class="me-2" style="display: inline-block;">
                    <input class="form-check-input border-dark" type="checkbox" name="categoryid[]" value="{{$item->categoryid}}">
                    <label class="form-check-label" for="category1">
                        {{$item->name}}
                    </label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="py-1">
            <label for="" class="fw-bold">Tải tài liệu lên</label>
            <input type="file" id="document" name="document" class="form-control" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt">
        </div>
         <div class="py-1 d-flex flex-column ">
            <label for="" class="fw-bold">Nội dung chính</label>
            <div  id="editor"></div>
            <textarea class="d-none" name="maindetail" id="textarea"></textarea>
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Mô tả ngắn</label>
            <textarea class="form-control border-primary" id="description" name="description"></textarea>
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Tải ảnh bìa lên</label>
            <input class="form-control border-primary" type="file" name="image" id="fileimage" onchange="loadimg()">
            <img style="width: 250px;" id="img" class="img-fluid mx-auto" src="" alt="">
        </div>
        <!-- <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Anh bia</label>
            <input class="form-control border-primary" type="text" name="image" id="urlCoverImage " onchange="loadimg()">
            <img style="width: 250px; background-image: url();" id="img" class="img-fluid mx-auto" src="" alt="">
        </div> -->
        <div class="py-1 d-flex">
            <button type="button" class="btn btn-primary ms-auto" onclick="sumbitform()">Thêm</button>
        </div>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script>
    function extractJsonFromMarkdown(markdown) {
        const match = markdown.match(/```json\s*([\s\S]*?)```/);
        if (!match) return null;

        try {
            return JSON.parse(match[1]);
        } catch (e) {
            console.error("JSON parse error:", e.message);
            return null;
        }
    }
$('#Aicontents').click(function () {
    const fileInput = $('#document')[0].files[0];
    if (!fileInput) {
        alert("Vui lòng chọn một tài liệu.");
        return;
    }

    const formData = new FormData();
    formData.append('document', fileInput);

    $.ajax({
        url: 'http://127.0.0.1:3500/api/extract-ai',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            const parsedData = extractJsonFromMarkdown(response.result);
            console.log(parsedData);
            $('#title').val(parsedData.title);
            $('#description').text(parsedData.description);
            const html = marked.parse(parsedData.maindetail);
            quill.clipboard.dangerouslyPasteHTML(html);

        },
        error: function (xhr) {
            alert('Lỗi xử lý AI hoặc gửi file: ' + xhr.statusText);
        }
    });
});
</script>
@stop()