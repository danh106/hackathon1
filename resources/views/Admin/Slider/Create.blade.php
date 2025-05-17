@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/admin/slider" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Thêm mới Slider</h3>
</div>
<form action="{{route('slider.store')}}" method="post" class="pb-2" id="myform">
    @csrf
    <div class="col">
        <div class="py-1">
            <label for="" class="fw-bold">Tiêu đề Slider</label>
            <input class="form-control border-primary" type="text" name="title" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Thứ tự Slider</label>
            <input class="form-control border-primary" type="text" name="displayOrder" id="">
        </div>
         <div class="py-1">
            <label for="" class="fw-bold">Trang thai</label>
            <select class="form-select border-primary" name="isactive" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Nội dung Slider</label>
            <div id="editor"></div>
            <textarea style="height: 200px; display: none;" name="description" id="textarea"></textarea>
        </div>
        

        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Ảnh Slider</label>
            <input class="form-control border-primary" type="text" name="imagepath" id="urlCoverImage " onchange="loadimg()">
            <img style="width: 250px;" id="img" class="img-fluid mx-auto" src="" alt="">
        </div>
        <div class="py-1 d-flex flex">
            <button  type="button" class="btn btn-primary ms-auto" onclick="sumbitform()">Thêm</button>
        </div>
    </div>
</form>
@stop()