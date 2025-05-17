@extends('Admin.Layout.Layout')
@section('body')
<h3>Quản lý sách</h3>
<div class="d-sm-flex flex-row d-block align-items-center">
    <form action="" method="get" class="d-flex flex-row align-items-center">
        <input name="search" type="text" class="form-control border-dark me-2" style="width: 250px;"
            id="exampleFormControlInput1" placeholder="name@example.com">
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-search"></i></button>
        <a href="/admin/blog" class="btn btn-primary ms-2"><i class="fa-solid fa-rotate-right"></i></a>
    </form>
    <a href="/admin/blog/create" class="btn btn-success mx-0 my-2 ms-sm-auto text-nowrap"><i class="fa-solid fa-plus me-2"></i>Thêm</a>
</div>
<div class="table-responsive">
    <table class="table " style="width: 100%;">
        <thead class="border-bottom-2 border-dark">
            <tr>
                <th scope="col">Mã Blog</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Người tạo</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Người sửa</th>
                <th scope="col">Ngày sửa</th>
                <th scope="col" class="text-center">Trạng thái</th>
                <th scope="col " class="text-end pe-3">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item) 
                <tr>
                    <th class="align-middle">{{$item->blogid}}</th>
                    <td class="align-middle"><img class="img-fluid" style="min-width: 100px;max-width: 100px" src="{{$item->image}}" alt=""></td>
                    <td class="align-middle">{{$item->title}}</td>
                    <td class="align-middle">{{$item->user?->name}}</td>
                    <td class="align-middle">{{ date_format($item->createddate, 'd/m/Y') }}</td>
                    <td class="align-middle">{{$item->modifiedby}}</td>
                    <td class="align-middle">{{date_format($item->modifieddate,'d/m/y')}}</td>
                    <td class="align-middle text-center">
                        <div class="fs-7 my-1 p-2 badge {{($item->isactive==true? 'bg-success': 'text-dark bg-warning')}}">{{($item->isactive==true?'Hiện':'Ẩn')}}</div>
                    </td>
                    <td class="align-middle text-nowrap text-end" >
                        <a href="/admin/Blog/isactive/@item.BlogId" class="btn {{($item->isactive==true? 'btn-warning' : 'btn-success' )}} mx-1 px-2 py-1"><i
                                class="fa-regular {{($item->isactive==true? 'fa-eye-slash' : 'fa-eye' )}} fs-6"></i></a>
                        <a href="/admin/blog/{{$item->BlogId}}/edit" class="btn btn-primary mx-1 px-2 py-1"><i class="fa-regular fa-edit fs-6"></i></a>
                        <a href="/Admin/Blog/Delete/@item.BlogId" class="btn btn-danger mx-1 px-2 py-1"><i
                                class="fa-regular fa-trash-can fs-6"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop()