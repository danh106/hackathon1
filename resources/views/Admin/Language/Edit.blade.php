@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/admin/language" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Chinh sửa ngôn ngữ</h3>
</div>
<form action="{{route('language.update',$language->languageid)}}" method="post" class="pb-2" >
    @csrf @method("PUT")
    <div class="col">
        <div class="py-1">
            <label for="" class="fw-bold">Tên ngôn ngữ</label>
            <input class="form-control border-primary" value="{{$language->name}}" type="text" name="name" id="">
        </div>
        <div class="py-1 d-flex flex">
            <button type="submit" class="btn btn-primary ms-auto">Cập nhật</button>
        </div>
    </div>
</form>
@stop()
