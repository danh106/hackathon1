@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/admin/user" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Thêm mới người dùng</h3>
</div>
<form action="{{route('user.store')}}" method="post" class="pb-2" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="py-1">
                <label for="" class="fw-bold">Tên người dùng</label>
                <input class="form-control border-primary" value="" type="text" name="name" id="">
            </div>
            <div class="py-1">
                <label for="" class="fw-bold">Địa chỉ</label>
                <input class="form-control border-primary" value="" type="text" name="address" id="">
            </div>
            <div class="py-1">
                <label for="" class="fw-bold">Số điện thoại</label>
                <input class="form-control border-primary" value="" type="text" name="phonenumber" id="">
            </div>
            <div class="py-1">
                <label for="" class="fw-bold">Email</label>
                <input class="form-control border-primary" value="" type="text" name="email" id="">
            </div>
            <div class="py-1">
                <label for="" class="fw-bold">Tài khoản</label>
                <input class="form-control border-primary" value="" type="text" name="username" id="">
            </div>
            <div class="py-1">
                <label for="" class="fw-bold">Mật khẩu</label>
                <input class="form-control border-primary" value="" type="text" name="password" id="">
            </div>
            <div class="py-1">
                <label for="" class="fw-bold">Trạng thái</label>
                <select class="form-select border-primary" name="isactive" aria-label="Default select example">
                    <option selected value="1">Hoạt động</option>
                    <option value="0">Ngừng hoạt động</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="py-1">
                <label for="" class="fw-bold">Quyền</label>
                <select class="form-select border-primary" name="roleid" aria-label="Default select example">
                    <option selected value="">--</option>
                    @foreach ($role as $item) 
                        <option value="{{$item->roleid}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="py-1">
                <label for="" class="fw-bold">Ngày tạo</label>
                <input class="form-control border-primary" value="" type="datetime-local" name="createddate" id="">
            </div>
            <div class="py-1 d-flex flex-column">
                <label for="" class="fw-bold">Anh đại diện</label>
                <input class="form-control border-primary" type="file" name="avatar" id="fileimage" onchange="loadimg()">
                <img style="width: 250px;" id="img" class="img-fluid mx-auto" src="" alt="">
            </div>
        </div>
        <div class="py-1 d-flex flex">
            <button type="submit" class="btn btn-primary ms-auto">Thêm</button>
        </div>
    </div>
</form>
@stop()