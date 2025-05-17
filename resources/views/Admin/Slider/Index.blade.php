@extends('Admin.Layout.Layout')
@section('body')
<h3>Quản lý Slider</h3>
<div class="d-sm-flex flex-row d-block align-items-center">
    <form action="" method="get" class="d-flex flex-row align-items-center">
        <input name="search" type="text" class="form-control border-dark me-2" style="width: 250px;"
            id="exampleFormControlInput1" placeholder="name@example.com">
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-search"></i></button>
        <a href="/Admin/Slider" class="btn btn-primary ms-2"><i class="fa-solid fa-rotate-right"></i></a>
    </form>
    <a href="{{route('slider.create')}}" class="btn btn-success mx-0 my-2 ms-sm-auto text-nowrap"><i class="fa-solid fa-plus me-2"></i>Thêm</a>
</div>
<div class="table-responsive">
    <table class="table" style="width: 100%;">
        <thead class="border-bottom-2 border-dark">
            <tr>
                <th scope="col">Mã Slider</th>
                <th scope="col">Tiêu đề Slide</th>
                <th scope="col">Nội dung Slide</th>
                <th scope="col">Thứ tự hiện</th>
                <th scope="col">Ảnh Silder</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item) 
               <tr>
                    <th class="align-middle" scope="row">{{$item->sliderid}}</th>
                    <td class="align-middle" style="min-width: 120px;">{{$item->title}}</td>
                    <td class="align-middle" style="min-width: 120px;">{!!$item->description!!}</td>
                    <td class="align-middle">{{$item->displayorder}}</td>
                    <td class="align-middle" style="min-width: 120px;"><img class="img-fluid " style="height: 100px;" src="{{$item->imagepath}}" alt=""></td>
                    <td class="align-middle"><div class=" badge p-2 my-1 {{$item->isactive==true?'bg-success':'bg-warning text-dark'}}">{{($item->isactive==true)?'Hiện':'Ẩn'}}</div></td>
                    <td class="align-middle text-nowrap text-end" >
                    <a href="/admin/slider/isactive/{{$item->sliderid}}" class="btn {{$item->isactive==true?'btn-warning':'btn-success'}} mx-1 px-2 py-1">
                        <i class="fa-regular {{$item->isactive==true?'fa-eye-slash':'fa-eye'}} fs-6"></i>
                    </a>
                    <a href="{{route('slider.edit',$item->sliderid)}}" class="btn btn-primary mx-1 px-2 py-1"><i class="fa-regular fa-edit fs-6"></i></a>
                    <form class="mx-1 d-inline-block" action="{{route('slider.destroy',$item->sliderid)}}" method="post">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger px-2 py-1">
                            <i class="fa-regular fa-trash-can fs-6"></i>
                        </button>
                    </form>
                </td>
                </tr> 
            @endforeach
            
        </tbody>
    </table>
</div>
@stop()