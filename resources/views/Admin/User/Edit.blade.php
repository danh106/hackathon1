@extends('Admin.Layout.Layout')
@section('body')
<h3></h3>
<div class="d-flex mb-1">
    <a href="/admin/user" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Chỉnh sửa người dùng</h3>
</div>
<form action="{{route('user.update',$user->userid)}}" method="post" class="pb-2" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="py-1">
                <label for="" class="fw-bold">Tên người dùng</label>
                <input class="form-control border-primary" value="{{$user->name}}" type="text" name="name" id="">
            </div>
            <div class="py-1">
                <label for="" class="fw-bold">Địa chỉ</label>
                <input class="form-control border-primary" value="{{$user->address}}" type="text" name="address" id="">
            </div>
            <div class="py-1">
                <label for="" class="fw-bold">Số điện thoại</label>
                <input class="form-control border-primary" value="{{$user->phonenumber}}" type="text" name="phonenumber"
                    id="">
            </div>
            <div class="py-1">
                <label for="" class="fw-bold">Email</label>
                <input class="form-control border-primary" value="{{$user->email}}" type="text" name="email" id="">
            </div>
            <div class="py-1">
                <label for="" class="fw-bold">Tài khoản</label>
                <input class="form-control border-primary" value="{{$user->username}}" type="text" name="username" id="">
            </div>
            <div class="py-1">
                <label for="" class="fw-bold">Trạng thái</label>
                <select class="form-select border-primary" name="isactive" aria-label="Default select example">
                    <option value="">--</option>
                    @if ($user->isactive) 
                        <option selected value="1">Hoạt động</option>
                        <option value="0">Ngừng hoạt động</option>
                    @else 
                        <option  value="1">Hoạt động</option>
                        <option selected value="0">Ngừng hoạt động</option>
                    @endif
                </select>
            </div>
             <div class="py-1">
                <label for="" class="fw-bold">Quền</label>
                <select class="form-select border-primary" name="roleid" aria-label="Default select example">
                    <option value="">--</option>
                    @foreach ($role as $item) 
                        @if ($item->roleid==$user->roleid) 
                            <option selected value="{{$item->roleid}}">{{$item->name}}</option>
                        @else 
                            <option value="{{$item->roleid}}">{{$item->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12 col-md-6">
            
            <div class="py-1 enable-button-pointers" >
                <label for="" class="fw-bold">Ngày tạo</label>
                <input disabled class="form-control border-primary" value="{{$user?->createddate?->format('d-m-Y')}}"
                    type="text" name="createddate" id="">
            </div>
            <div class="py-1 d-flex flex-column">
                <label for="" class="fw-bold">Anh đại diện</label>
                <input class="form-control border-primary" type="file" name="avatar" id="fileimage" onchange="loadimg()">
                <img style="width: 250px;" id="img" class="img-fluid mx-auto" src="{{$user->avatar}}" alt="">
            </div>
            
        </div>
        <div class="py-1 d-flex flex">
                <button type="submit" class="btn btn-primary ms-auto">Cập nhật</button>
            </div>
    </div>
    </div>
</form>
@stop()