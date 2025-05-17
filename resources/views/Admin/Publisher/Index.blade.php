@extends('Admin.Layout.Layout')
@section('body')
<h3>Quản lý nhà sản xuất</h3>
<div class="d-sm-flex flex-row d-block align-items-center">
    <form action="" method="get" class="d-flex flex-row align-items-center">
        <input name="search" type="text" class="form-control border-dark me-2" style="width: 250px;"
            id="exampleFormControlInput1" placeholder="name@example.com">
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-search"></i></button>
        <a href="/admin/publisher" class="btn btn-primary ms-2"><i class="fa-solid fa-rotate-right"></i></a>
    </form>
    <a href="/admin/publisher/create" class="btn btn-success mx-0 my-2 ms-sm-auto text-nowrap"><i class="fa-solid fa-plus me-2"></i>Thêm</a>
</div>
<div class="table-responsive">
    <table class="table" style="width: 100%;">
        <thead class="border-bottom-2 border-dark">
            <tr>
                <th scope="col">Mã nhà sản xuất</th>
                <th scope="col">Tên</th>
                <th scope="col">Eamil</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item) 
                <tr>
                    <th class="align-middle" scope="row">{{$item->publisherid}}</th>
                    <td class="align-middle">{{$item->name}}</td>
                    <td class="align-middle">{{$item->email}}</td>
                    <td class="align-middle">{!!$item->description!!}</td>
                    <td class="align-middle text-nowrap text-end">
                        <a href="{{route('publisher.edit',$item->publisherid)}}" class="btn btn-primary mx-1 px-2 py-1"><i class="fa-regular fa-edit fs-6"></i></a>
                        <form class=" mx-1 d-inline-block" action="{{route('publisher.destroy',$item->publisherid)}}" method="post">
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