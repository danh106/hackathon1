@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/admin/publisher" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Chỉnh sử<a href=" "></a>nhà xuất bản</h3>
</div>
<form action="{{route('publisher.update',$publisher->publisherid)}}" method="post" class="pb-2" id="myform" onsubmit="false">
    @csrf @method('PUT')
    <div class="col">
        <div class="py-1">
            <label for="" class="fw-bold">Tên tác nhà xuất bản</label>
            <input class="form-control border-primary" value="{{$publisher->name}}" type="text" name="name" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Email nhà xuất bản</label>
            <input class="form-control border-primary" value="{{$publisher->email}}" type="text" name="email" id="">
        </div>
         <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Mô tả</label>
            <div id="editor">{!!$publisher->description!!}</div>
            <textarea style="height: 200px; display: none;" name="description" id="textarea"></textarea>
        </div>
        <div class="py-1 d-flex flex">
            <button  type="button" class="btn btn-primary ms-auto" onclick="sumbitform()">Cập nhật</button>
        </div>
    </div>
</form>
@stop()
