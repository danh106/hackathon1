@extends('Admin.Layout.Layout')
@section('body')
<h3>Quản lý menu</h3>
<div class="d-sm-flex flex-row d-block align-items-center">
    <form action="" method="get" class="d-flex flex-row align-items-center">
        <input name="search" type="search" class="form-control border-dark me-2" style="width: 250px;"
               id="exampleFormControlInput1" placeholder="id name...">
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-search"></i></button>
        <a href="/admin/menu" class="btn btn-primary ms-2"><i class="fa-solid fa-rotate-right"></i></a>
    </form>
    <a href="/admin/menu/create" class="btn btn-success mx-0 my-2 ms-sm-auto text-nowrap"><i class="fa-solid fa-plus me-2"></i>Thêm</a>
</div>
<div class="table-responsive">
    <table class="table" style="width: 100%;">
        <thead class="border-bottom-2 border-dark">
            <tr>
                <th scope="col">Mã Menu</th>
                <th scope="col">Tên</th>
                <th scope="col">Đường dẫn</th>
                <th scope="col">Cấp</th>
                <th scope="col">Menu Cha</th>
                <th scope="col">Trạng thái</th>
                <th scope="col" class="text-end">Chức năng</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
            @php
                $menu = $data->where('menuid', $item->parentid)->first();
            @endphp
            <tr>
                <th class="align-middle" scope="row">{{$item->menuid}}</th>
                <td class="align-middle" >{{$item->title}}</td>
                <td class="align-middle" >{{$item->link}}</td>
                <td class="align-middle">{{$item->levels}}</td>
                <td class="align-middle">{{$menu!=null?$menu->title:""}}</td>
                <td class="align-middle"><div class=" badge p-2 my-1 {{$item->isactive==true?'bg-success':'bg-warning text-dark'}}">{{($item->isactive==true)?'Hiện':'Ẩn'}}</div></td>
                <td class="align-middle text-nowrap text-end" >
                    <a href="/admin/menu/isactive/{{$item->menuid}}" class="btn {{$item->isactive==true?'btn-warning':'btn-success'}} mx-1 px-2 py-1">
                        <i class="fa-regular {{$item->isactive==true?'fa-eye-slash':'fa-eye'}} fs-6"></i>
                    </a>
                    <a href="{{route('menu.edit',$item->menuid)}}" class="btn btn-primary mx-1 px-2 py-1"><i class="fa-regular fa-edit fs-6"></i></a>
                    <form class="mx-1 d-inline-block" action="{{route('menu.destroy',$item->menuid)}}" method="post">
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