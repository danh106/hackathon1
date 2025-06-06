@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/admin/author" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Thêm mới tác giả</h3>
</div>
<form action="{{route('author.store')}}" method="post" class="pb-2" id="myform" onsubmit="false">
    @csrf
    <div class="col">
        <div class="py-1">
            <label for="" class="fw-bold">Tên tác giả</label>
            <input class="form-control border-primary" type="text" name="name" id="">
        </div>
         <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Tiểu sử tác giả</label>
            <div id="editor"></div>
            <textarea style="height: 200px; display: none;" name="biography" id="textarea"></textarea>
        </div>
         <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Anh bia</label>
            <input class="form-control border-primary" type="text" name="image" id="urlCoverImage " onchange="loadimg()">
            <img style="width: 250px;" id="img" class="img-fluid mx-auto" src="" alt="">
        </div>
        <div class="py-1 d-flex flex">
            <button  type="button" class="btn btn-primary ms-auto" onclick="sumbitform()">Thêm</button>
        </div>
    </div>
</form>
@stop()