@extends('Admin.Layout.Layout')
@section('body')
<div class="d-flex mb-1">
    <a href="/admin/document/" class="btn btn-primary me-2"><i class="fa-solid fa-left-long"></i></a>
    <h3 class="m-0">Chỉnh sửa tài liệu</h3>
</div>
<form action="{{route('document.update',$document->documentid)}}" method="post" id="myform" class="row pb-2" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="col-12 col-md-6">
        <div class="py-1">
            <label for="" class="fw-bold">Tên tài liệu</label>
            <input class="form-control border-primary" type="text" value="{{$document->title}}" name="title" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Tác giả</label>
            <select class="form-select border-primary" name="authorid" aria-label="Default select example">
                <option selected  value="">--</option>
                @foreach ($author as $item) 
                    @if ($document->authorid==$item->authorid) 
                        <option selected value="{{$item->authorid}}">{{$item->name}}</option>
                    @else 
                        <option value="{{$item->authorid}}">{{$item->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Nhà xuất bản</label>
            <select class="form-select border-primary" name="publisherid" aria-label="Default select example">
                <option selected  value="">--</option>
                @foreach ($publisher as $item) 
                    @if ($document->publisherid==$item->publisherid) 
                        <option selected value="{{$item->publisherid}}">{{$item->name}}</option>
                    @else 
                        <option value="{{$item->publisherid}}">{{$item->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Ngày xuất bản</label>
            <input class="form-control border-primary" type="datetime-local" value="{{$document->publishdate}}" name="publishdate" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Ngôn ngữ</label>
            <select class="form-select border-primary" name="languageid" aria-label="Default select example">
                <option selected value="">--</option>
                @foreach ($language as $item) 
                    @if ($document->languageid==$item->languageid) 
                        <option selected value="{{$item->languageid}}">{{$item->name}}</option>
                    @else 
                        <option value="{{$item->languageid}}">{{$item->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Số trang</label>
            <input class="form-control border-primary" type="number" value="{{$document->pagecount}}" name="pagecount" id="">
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Trạng thái</label>
            <select class="form-select border-primary" name="isactive" aria-label="Default select example">
                @if ($document->isactive==true) 
                    <option selected value="1">Hiện</option>
                    <option value="0">Ẩn</option>
                @else 
                    <option value="1">Hiện</option>
                    <option selected value="0">Ẩn</option>
                @endif
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">tài liệu mới</label>
            <select class="form-select border-primary" name="isnew" aria-label="Default select example">
                @if ($document->isnew==true) 
                    <option selected value="1">Mới</option>
                    <option value="0">Bình thường</option>
                @else 
                    <option  value="1">Mới</option>
                    <option selected value="0">Bình thường</option>
                @endif
            </select>
        </div>
        <div class="py-1">
            <label for="" class="fw-bold">Thê loại</label>
            <div>
                @foreach ($category as $item) 
                <div class="me-2" style="display: inline-block;">
                    @if (($document->tbldocumentcategories()->where('categoryid',$item->categoryid)->get())?->count()!=0) 
                        <input checked class="form-check-input border-dark" type="checkbox" name="categoryid[]" value="{{$item->categoryid}}">
                    @else 
                        <input class="form-check-input border-dark" type="checkbox" name="categoryid[]" value="{{$item->categoryid}}">
                    @endif
                    <label class="form-check-label" for="category1">
                        {{$item->name}}
                    </label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="py-1">
            <label for="" class="fw-bold">Tải tài liệu lên</label>
            <input type="file" id="document" name="document" class="form-control" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt">
        </div>
         <div class="py-1 d-flex flex-column ">
            <label for="" class="fw-bold">Nội dung chính</label>
            <div  id="editor">{!!$document->maindetail!!}</div>
            <textarea class="d-none" name="maindetail" id="textarea"></textarea>
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Mô tả ngắn</label>
            <textarea class="form-control border-primary" name="description">{{$document->description}}</textarea>
        </div>
        <div class="py-1 d-flex flex-column">
            <label for="" class="fw-bold">Tải ảnh bìa lên</label>
            <input class="form-control border-primary" type="file" name="image" id="fileimage" onchange="loadimg()">
            <img style="width: 250px;" id="img" class="img-fluid mx-auto" src="{{$document->image}}" alt="">
        </div>
        <div class="py-1 d-flex">
            <button type="button" class="btn btn-primary ms-auto" onclick="sumbitform()">Cập nhật</button>
        </div>
    </div>
</form>
@stop()