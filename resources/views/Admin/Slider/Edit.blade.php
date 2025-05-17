@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/Admin/Slider" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Chỉnh sửa Slider</h3>
</div>
<form action="{{route('slider.update',$slider->sliderid)}}" method="post" class="pb-2" id="myform">
     @csrf @method('PUT')
    <div class="col">
        <div class="py-1">
            <label for="" class="fw-bold">Tiêu đề Slider</label>
            <input class="form-control border-primary"  value="{{$slider->title}}" type="text" name="title" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Thứ tự Slider</label>
            <input class="form-control border-primary" value="{{$slider->displayorder}}" type="text" name="displayorder" id="">
        </div>
         <div class="py-1">
            <label for="" class="fw-bold">Trang thai</label>
            <select class="form-select border-primary" name="isactive" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @if ($slider->isactive) 
                    <option selected value="1">Hiện</option>
                    <option value="0">Ẩn</option>
                @else 
                    <option value="1">Hiện</option>
                    <option selected value="0">Ẩn</option>
                @endif
            </select>
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Nội dung Slider</label>
            <div id="editor">{!!$slider->description!!}</div>
            <textarea style="height: 200px; display: none;" name="description" id="textarea"></textarea>
        </div>
        

        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Ảnh Slider</label>
            <input class="form-control border-primary" type="text" value="{{$slider->imagepath}}" name="imagepath" id="urlCoverImage " onchange="loadimg()">
            <img style="width: 250px;" id="img" class="img-fluid mx-auto" src="{{$slider->imagepath}}" alt="">
        </div>
        <div class="py-1 d-flex flex">
            <button  type="button" class="btn btn-primary ms-auto" onclick="sumbitform()">Cập nhật</button>
        </div>
    </div>
</form>
@stop()