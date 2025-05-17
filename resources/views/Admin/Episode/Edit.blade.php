@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/admin/movie/{{$episode->movieid}}/episode" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Chỉnh sửa tập phim</h3>
</div>
<form action="/admin/episode/update/{{$episode->episodeid}}" id="myform" onsubmit="false" method="post" class="row pb-2">
    @csrf
    <div class="col-12">
        <div class="py-1">
            <label for="" class="fw-bold">Tên tập phim</label>
            <input class="form-control border-primary" value="{{$episode->title}}" type="text" name="title" id="">
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Ảnh thumbnail phim</label>
            <input class="form-control border-primary" type="text" value="{{$episode->thumbnail}}" name="thumbnail" id="urlCoverImage " onchange="loadimg()">
            <img style="width: 250px; background-image: url();" id="img" class="img-fluid mx-auto" src="{{$episode->thumbnail}}" alt="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Ngày tạo</label>
            <input class="form-control border-primary" type="datetime-local" value="{{$episode->releasedate}}" name="releasedate" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Thứ tự tập phim</label>
            <input class="form-control border-primary" type="number" value="{{$episode->episodenumber}}" name="episodenumber" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Trạng thái</label>
            <select class="form-select border-primary" name="IsActive" aria-label="Default select example">
            @if ($episode->isactive) 
                <option  selected value="True">Hiện</option>
                <option  value="False">Ẩn</option>
            @else 
                <option  value="True">Hiện</option>
                <option selected value="False">Ẩn</option>
            @endif
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Mã video</label>
            <input class="form-control border-primary" value="{{$episode->videoid}}" type="text" name="videoid" id="">
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">keywords</label>
            <textarea  class="form-control border-primary" name="keywords">{{$episode->keywords}}</textarea>
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Mô tả ngắn</label>
            <textarea  class="form-control border-primary"  name="description">{{$episode->description}}</textarea>
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Mô tả chi tiết</label>
            <div id="editor">{!!$episode->detail!!}</div>
            <textarea  class="d-none" name="detail" id="textarea"></textarea>
        </div>
        <div class="py-1 d-flex">
            <button type="button" class="btn btn-primary ms-auto" onclick="sumbitform()">Thêm mới</button>
        </div>
    </div>
</form>
@stop()
