@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/admin/movie/{{$movieid}}/episode" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Thêm tập phim mới</h3>
</div>
<form action="/admin/movie/episode/store" method="post" id="myform" class="row pb-2">
    @csrf
    <div class="col-12">
        <input type="hidden" value="{{$movieid}}" name="movieid">
        <div class="py-1">
            <label for="" class="fw-bold">Tên tập phim</label>
            <input class="form-control border-primary" type="text" name="title" id="">
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Ảnh thumbnail phim</label>
            <input class="form-control border-primary" type="text" name="thumbnail" id="urlCoverImage " onchange="loadimg()">
            <img style="width: 250px; background-image: url();" id="img" class="img-fluid mx-auto" src="" alt="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Ngày tạo</label>
            <input class="form-control border-primary" type="datetime-local"  name="releasedate" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Thứ tự tập phim</label>
            <input class="form-control border-primary" type="number" name="episodenumber" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Trạng thái</label>
            <select class="form-select border-primary" name="isactive" aria-label="Default select example">
                <option selected value="1">Hiện</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
         <div class="py-1">
            <label for="" class="fw-bold">Mã video</label>
            <input class="form-control border-primary" type="text" name="videoid" id="">
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">keywords</label>
            <textarea  class="form-control border-primary"  name="keywords"></textarea>
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Mô tả ngắn</label>
            <textarea  class="form-control border-primary"  name="description"></textarea>
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Mô tả chi tiết</label>
            <div id="editor"></div>
            <textarea  class="d-none" name="detail" id="textarea"></textarea>
        </div>
        <div class="py-1 d-flex">
            <button type="button" class="btn btn-primary ms-auto" onclick="sumbitform()">Thêm mới</button>
        </div>
    </div>
</form>
@stop()