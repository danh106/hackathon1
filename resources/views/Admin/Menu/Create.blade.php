@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/admin/menu" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Thêm mới menu</h3>
</div>
<form action="{{route('menu.store')}}" method="post" class="pb-2">
    @csrf
    <div class="col">
        <div class="py-1">
            <label for="" class="fw-bold">Tiêu đề</label>
            <input class="form-control border-primary" type="text" name="title" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Cấp</label>
            <input class="form-control border-primary" type="text" name="levels" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Menu Cha</label>
            <select class="form-select border-primary select-primary" name="parentid" aria-label="Default select example">
                <option selected value="">--</option>
                @foreach ($data ?? [] as $item) 
                    <option value="{{$item->menuid}}">{{$item->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">vị trí</label>
            <select class="form-select border-primary select-primary" name="position" aria-label="Default select example">
                <option value="1" selected>Menu tóp</option>
                <option value="2">Footer</option>
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Đường dẫn</label>
            <input class="form-control border-primary" type="text" name="link" placeholder="Mặc định: /category/alias/menuid" id="">
        </div>
         <div class="py-1">
            <label for="" class="fw-bold">Trang thai</label>
            <select class="form-select border-primary" name="isactive" aria-label="Default select example">
                <option value="1" selected>Hiện</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
        <div class="py-1 d-flex flex">
            <button type="submit" class="btn btn-primary ms-auto">Thêm</button>
        </div>
    </div>
</form>
@stop()