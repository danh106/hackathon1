@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/admin/category" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Chinh sửa thể loại</h3>
</div>
<form action="{{route('category.update',$category->categoryid)}}" method="post" class="pb-2" id="myform" onsubmit="false">
    @csrf @method("PUT")
    <div class="col">
        <div class="py-1">
            <label for="" class="fw-bold">Tên thể loại</label>
            <input class="form-control border-primary" value="{{$category->name}}" type="text" name="name" id="">
        </div>
         <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Mô tả thể loại</label>
            <div id="editor">{!!$category->description!!}</div>
            <textarea style="height: 200px; display: none;" name="description" id="textarea"></textarea>
        </div>
        <div class="py-1 d-flex flex">
            <button  type="button" class="btn btn-primary ms-auto" onclick="sumbitform()">Cập nhật</button>
        </div>
    </div>
</form>
@stop()
