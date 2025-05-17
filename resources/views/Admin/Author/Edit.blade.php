@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/admin/author" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Cập nhật tác giả</h3>
</div>
<form action="{{route('author.update',$author->authorid)}}" method="post" class="pb-2" id="myform" onsubmit="false">
    @csrf @method('PUT')
    <div class="col">
        <div class="py-1">
            <label for="" class="fw-bold">Tên tác giả</label>
            <input class="form-control border-primary" type="text" value="{{$author->name}}" name="name" id="">
        </div>
         <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Tiểu sử tác giả</label>
            <div id="editor">{!!$author->biography!!}</div>
            <textarea style="height: 200px; display: none;" name="biography" id="textarea"></textarea>
        </div>
         <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Anh bia</label>
            <input class="form-control border-primary" type="text" value="{{$author->image}}" name="image" id="urlCoverImage " onchange="loadimg()">
            <img style="width: 250px;" id="img" class="img-fluid mx-auto" src="{{$author->image}}" alt="">
        </div>
        <div class="py-1 d-flex flex">
            <button  type="button" class="btn btn-primary ms-auto" onclick="sumbitform()">Cập nhật</button>
        </div>
    </div>
</form>
@stop()