@extends('Admin.Layout.Layout')
@section('body')
<h3>Quản lý tài liệu</h3>
<div class="d-sm-flex flex-row d-block align-items-center">
    <form action="" method="get" class="d-flex flex-row align-items-center">
        <input name="search" type="search" class="form-control border-dark me-2" style="width: 250px;"
            id="exampleFormControlInput1" placeholder="id name....">
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-search"></i></button>
        <a href="/admin/document" class="btn btn-primary ms-2"><i class="fa-solid fa-rotate-right"></i></a>
    </form>
    <a href="/admin/document/create" class="btn btn-success mx-0 my-2 ms-sm-auto text-nowrap"><i class="fa-solid fa-plus me-2"></i>Thêm</a>
</div>
<div class="table-responsive">
    <table class="table" style="width: 100%;">
        <thead class="border-bottom-2 border-dark">
            <tr>
                <th scope="col" style="width: 100px;min-width: 100px;">Mã tài liệu</th>
                <th>Ảnh bìa</th>
                <th scope="col">Tiêu đề tài liệu</th>
                <th scope="col">Tác giả</th>
                <th scope="col">Nha xuất bản</th>
                <th scope="col">Thể loại</th>
                <th scope="col">Ngôn ngữ</th>
                <th scope="col">Số trang</th>
                <th scope="col">Người đăng</th>
                <th>Trạng thái</th>
                <th scope="col " class="text-end p-3">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <th class="align-middle" scope="row">{{$item->documentid}}</th>
                <td class="align-middle" style="min-width: 100px;width: 100px;"><img class="w-100 img-fluid" src="{{$item->image}}" alt="">
                </td>
                <td class="align-middle text-truncate text-nowrap" style="max-width: 250px;min-width: 250px;">{{$item->title}}</td>
                <td class="align-middle">{{$item->author?->name}}</td>
                <td class="align-middle">{{$item->publisher?->name}}</td>
                <td class="align-middle">
                    @foreach ($item->tbldocumentcategories as $i) 
                        <div class="fs-7 my-1 p-2 badge bg-secondary">{{$i->category?->name}}</div>
                    @endforeach
                </td>
                <td class="align-middle">{{$item->language?->name}}</td>
                <td class="align-middle">{{$item->pagecount}}</td>
                <td class="align-middle">{{$item->user?->name}}</td>
                <td class="align-middle">
                    <div class="fs-7 my-1 p-2  badge {{($item->isactive==true? 'bg-success' : 'text-dark bg-warning')}}">{{($item->isactive==true?'Hiện':'Ẩn')}}</div>
                    <div class="fs-7 my-1 p-2 badge bg-primary {{($item->isnew==true?'':'d-none')}}">New</div>
                </td>
                <td class="align-middle text-nowrap text-end">
                    <a href="/admin/document/isactive/{{$item->documentid}}" class="btn {{($item->isactive==true? 'btn-warning': 'btn-success' )}} mx-1 px-2 py-1"><i
                            class="fa-regular {{($item->isactive==true? 'fa-eye-slash' : 'fa-eye' )}} fs-6"></i></a>
                    <a href="{{route('document.edit',$item->documentid)}}" class="btn btn-primary mx-1 px-2 py-1"><i class="fa-regular fa-edit fs-6"></i></a>
                    <form action="{{route('document.destroy',$item->documentid)}}" method="post" class="mx-1" style="display: inline-block;">
                        @csrf @method('delete')
                        <button type="submit" class="btn btn-danger px-2 py-1"><i class="fa-regular fa-trash-can fs-6"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop()