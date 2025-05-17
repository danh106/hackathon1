@extends('Admin.Layout.Layout')
@section('body')
<h3>Quản lý tác giả</h3>
<div class="d-sm-flex flex-row d-block align-items-center">
    <form action="" method="get" class="d-flex flex-row align-items-center">
        <input name="search" type="text" class="form-control border-dark me-2" style="width: 250px;"
            id="exampleFormControlInput1" placeholder="name@example.com">
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-search"></i></button>
        <a href="/admin/author" class="btn btn-primary ms-2"><i class="fa-solid fa-rotate-right"></i></a>
    </form>
    <a href="/admin/author/create" class="btn btn-success mx-0 my-2 ms-sm-auto text-nowrap"><i class="fa-solid fa-plus me-2"></i>Thêm</a>
</div>
<div class="table-responsive">
    <table class="table " style="width: 100%;">
        <thead class="border-bottom-2 border-dark">
            <tr>
                <th scope="col">Mã Tác Giả</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Tên</th>
                <th scope="col">Tiểu sử</th>
                <th scope="col" class="text-end me-1">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item) 
                <tr>
                    <th class="align-middle">{{$item->authorid}}</th>
                    <td class="align-middle"><img class="rounded-circle img-fluid" style="object-fit: cover;min-height: 60px; min-width: 60px;max-height: 60px;max-width: 60px" src="{{$item->image}}" alt=""></td>
                    <td class="align-middle">{{$item->name}}</td>
                    <td class="align-middle">{!!$item->biography!!}</td>
                    <td class="align-middle text-nowrap text-end" >
                        <a href="{{route('author.edit',$item->authorid)}}" class="btn btn-primary mx-1 px-2 py-1"><i class="fa-regular fa-edit fs-6"></i></a>
                        <form class="mx-1 d-inline-block" action="{{route('author.destroy',$item->authorid)}}" method="post">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger px-2 py-1"> <i class="fa-regular fa-trash-can fs-6"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop()