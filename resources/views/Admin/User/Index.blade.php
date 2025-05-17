@extends('Admin.Layout.Layout')
@section('body')
<h3>Quản lý nguòi dùng</h3>
<div class="d-sm-flex flex-row d-block align-items-center">
    <form action="" method="get" class="d-flex flex-row align-items-center">
        <input name="search" type="text" class="form-control border-dark me-2" style="width: 250px;"
            id="exampleFormControlInput1" placeholder="name@example.com">
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-search"></i></button>
        <a href="/Admin/User" class="btn btn-primary ms-2"><i class="fa-solid fa-rotate-right"></i></a>
    </form>
    <a href="{{route('user.create')}}" class="btn btn-success mx-0 my-2 ms-sm-auto text-nowrap"><i class="fa-solid fa-plus me-2"></i>Thêm</a>
</div>
<div class="table-responsive">
    <table class="table" style="width: 100%;">
        <thead class="border-bottom-2 border-dark">
            <tr>
                <th scope="col">Mã người dùng</th>
                <th scope="col">Ảnh đại diện</th>
                <th scope="col">Tên người dùng</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Emial</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Tài khoản</th>
                <th scope="col">Phân quyền</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item) 
                <tr>
                    <th class="align-middle"  scope="row">{{$item->userid}}</th>
                    <td class="align-middle"><img class="rounded-circle img-fluid" style="object-fit: cover;min-height: 60px; min-width: 60px;max-height: 60px;max-width: 60px" src="{{$item->avatar}}" alt=""></td>
                    <td class="align-middle" >{{$item->name}}</td>
                    <th class="align-middle">{{$item->phonenumber}}</th>
                    <td class="align-middle">{{$item->email}}</td>
                    <td class="align-middle" >{{$item->address}}</td>
                    <td class="align-middle">{{$item->username}}</td>
                    <td class="align-middle" >{{$item?->role?->name}}</td>
                    <td class="align-middle"><div class=" badge p-2 my-1 {{$item->isactive==true?'bg-success':'bg-danger text-white'}}">{{($item->isactive==true)?'Hoạt động':'Ngừng hoạt động'}}</div></td>
                    <td class="align-middle text-nowrap text-end">
                        <a href="{{route('user.edit',$item->userid)}}" class="btn btn-primary mx-1 px-2 py-1"><i class="fa-regular fa-edit fs-6"></i></a>
                        <form class=" mx-1 d-inline-block" action="{{route('user.destroy',$item->userid)}}" method="post">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger px-2 py-1"><i class="fa-regular fa-trash-can fs-6"></i></a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop()