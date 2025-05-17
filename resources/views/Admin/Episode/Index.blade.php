@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/admin/movie" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Quản lý tập phim</h3>
</div>
<div class="d-sm-flex flex-row d-block align-items-center">
    <form action="" method="get" class="d-flex flex-row align-items-center">
        <input name="search" type="search" class="form-control border-dark me-2" style="width: 250px;"
            id="exampleFormControlInput1" placeholder="id name....">
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-search"></i></button>
        <a href="/Admin/Book" class="btn btn-primary ms-2"><i class="fa-solid fa-rotate-right"></i></a>
    </form>
    <a href="/admin/movie/{{$data->movieid}}/episode/create" class="btn btn-success mx-0 my-2 ms-sm-auto text-nowrap"><i class="fa-solid fa-plus me-2"></i>Thêm</a>
</div>
<div class="table-responsive">
    <table class="table" style="width: 100%;">
        <thead class="border-bottom-2 border-dark">
            <tr>
                <th scope="col">Mã tập phim</th>
                <th scope="col">Ảnh thumbnail</th>
                <th scope="col">Tên tập phim</th>
                <th scope="col">Tập</th>
                <th scope="col">Keywords</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Mã video</th>
                <th scope="col">Trạng thái</th>
                <th scope="col " class="text-end p-3">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data->tblepisodes as $item)
            <tr>
                <th class="align-middle" scope="row">{{$item->episodeid}}</th>
                <td class="align-middle">
                    <div class="position-relative" style="min-width: 100px;max-width: 100px;width: 100px;">
                        <img class="img-fluid"  src="{{$item->thumbnail}}" alt="">
                        <span style="right: 4px; bottom: 4px;" class="position-absolute badge bg-secondary">{{($item->duration)>3600?gmdate("H:i:s",$item->duration):gmdate("i:s",$item->duration)}}</span>
                    </div>
                </td>
                <td class="align-middle" style="min-width: 250px;">{{$item->title}}</td>
                <td class="align-middle">{{$item->episodenumber}}</td>
                <td class="align-middle">{{$item->keywords}}</td>
                <td class="align-middle">{{$item->description}}</td>
                <td class="align-middle">{{$item->videoid}}</td>
                <td class="align-middle text-center">
                    <div class="fs-7 my-1 p-2 badge {{($item->isactive==true? 'bg-success': 'text-dark bg-warning')}}">{{($item->isactive==true?'Hiện':'Ẩn')}}</div>
                </td>
                <td class="align-middle text-nowrap text-end">
                    <!-- <a href="/admin/movie/{{$item->movieid}}/episode/Create" class="btn btn-success mx-1 px-2 py-1"><i class="fa-solid fa-list fs-6"></i></a> -->
                    <a href="/admin/episode/isactive/{{$item->episodeid}}" class="btn {{($item->isactive==true? 'btn-warning': 'btn-success' )}} mx-1 px-2 py-1"><i
                            class="fa-regular {{($item->isactive==true? 'fa-eye-slash' : 'fa-eye' )}} fs-6"></i></a>
                    <a href="/admin/episode/edit/{{$item->episodeid}}" class="btn btn-primary mx-1 px-2 py-1"><i class="fa-regular fa-edit fs-6"></i></a>
                    <a href="/admin/episode/destroy/{{$item->episodeid}}" class="btn btn-danger mx-1 px-2 py-1"><i
                            class="fa-regular fa-trash-can fs-6"></i></a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop()