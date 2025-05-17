@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/Admin/Menu" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Chỉnh sửa menu</h3>
</div>
<form action="{{route('menu.update',$menu->menuid)}}" method="post" class="pb-2">
     @csrf @method('PUT')
    <div class="col">
        <div class="py-1">
            <label for="" class="fw-bold">Tiêu đề</label>
            <input class="form-control border-primary" type="text" name="title" value="{{$menu->title}}" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Cấp</label>
            <input class="form-control border-primary" type="text" name="levels" value="{{$menu->levels}}" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Menu Cha</label>
            <select class="form-select border-primary select-primary" name="parentid" aria-label="Default select example">
                <option selected value="">--</option>
                @foreach ($menus as $item) 
                   @if ($menu->parentid==$item->menuid) 
                        <option selected value="{{$item->menuid}}">{{$item->title}}</option>
                   @else 
                        <option value="{{$item->menuid}}">{{$item->title}}</option>
                   @endif 
                @endforeach
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">vị trí</label>
            <select class="form-select border-primary select-primary" name="position" aria-label="Default select example">
                <option selected>--</option>
                @if ($menu->position==1) 
                    <option selected value="1">Menu tóp</option>
                    <option value="2">Footer</option>
                @else 
                    <option value="1">Menu tóp</option>
                    <option selected value="2">Footer</option>
                @endif
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Đường dẫn</label>
            <input class="form-control border-primary" type="text" name="link" value="{{$menu->link}}" id="">
        </div>
         <div class="py-1">
            <label for="" class="fw-bold">Trạng thái</label>
            <select class="form-select border-primary" name="isactive" aria-label="Default select example">
                <option selected>--</option>
                @if ($menu->isactive==1) 
                    <option selected value="1">Hiện</option>
                    <option value="0">Ẩn</option>
                @else 
                    <option value="1">Hiện</option>
                    <option selected value="0">Ẩn</option>
                @endif
            </select>
        </div>
        <div class="py-1 d-flex flex">
            <button type="submit" class="btn btn-primary ms-auto">Cập nhật</button>
        </div>
    </div>
</form>
@stop()