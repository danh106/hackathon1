@extends('Layout.Layout')
@section('body')

<style>
.custom-scroll::-webkit-scrollbar {
    width: 6px;
}

.custom-scroll::-webkit-scrollbar-thumb {
    background-color: #888;
    border-radius: 6px;
}
</style>
<div class="d-block d-md-flex mt-3">
    <div class="flex-shrink-0">
        <img class="mx-auto img-fluid" style="width: 250px;aspect-ratio: 9 / 12;object-fit: cover;display: block;border-radius: 10px;" src="{{$data->image}}" alt="...">
    </div>
    <div class="flex-grow-1 ms-md-4 ">
        <h3 class="fs-3 text-white py-1"><b>{{$data->title}}</b></h3>
        <div class="p-4 mb-3" style="background: #293850;border-radius: 20px;">
            {!!$data->detail!!}
        </div>
    </div>
</div>
<div class="d-flex mt-4 align-items-start">
    <div class="container-fluid me-lg-3">
        <div class="row p-3 mb-3 overflow-auto custom-scroll" style="background: #293850;border-radius: 20px;max-height: 300px;">
        @if (count($data->tblepisodes)>0) 
             @foreach ($data->tblepisodes as $item)
             <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2 my-2 px-3">
                 <a href="/episode/{{$item->alias}}/{{$item->episodeid}}" class="btn btn-primary w-100">Tập {{$item->episodenumber}}</a>
             </div>
             @endforeach
           @else 
            <h3 class="ps-2 fs-4 mb-3" style="color: #ff9900;"><b>Hiện phim này chưa có danh sách tập phim !!!</b></h3>
           @endif
        </div>
        <div class="p-4 row mb-3 " style="background: #293850;border-radius: 20px;">
            <h3 class="ps-2 fs-4 text-white-50 mb-3"><b>Phim liên quan</b></h3>
            @foreach ($movierelation as $item)
            <div class="card col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3" style="background: none;border: none;">
                <a class="position-relative" href="/movie/{{$item->alias}}/{{$item->movieid}}">
                    <img src="{{$item->image}}" style="aspect-ratio: 9 / 12;object-fit: cover;display: block;border-radius: 10px;" class="card-img-top" alt="...">
                    <b style="left: 4px; top: 4px;" class="position-absolute badge bg-secondary">Tập {{$item->tblepisodes->count()}}/{{$item->expectedepisodes}}</b>
                </a>
                <div class="card-body px-0">
                    <a class="nav-link text-white p-0" href="/movie/{{$item->alias}}/{{$item->movieid}}">
                        <h5 class="card-title">{{$item->title}}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="flex-shrink-0 d-none d-lg-block py-3" style="background: #293850;border-radius: 20px;width:340px;">
        <h3 class="ps-2 fs-4 text-white mb-3"><b>Phim top hay</b></h3>
        @foreach ($movierelation as $item) 
            <div class="d-flex bd-highlight">
                <div class="p-2 flex-shrink-0 bd-highlight">
                    <a class="position-relative" href="/movie/{{$item->alias}}/{{$item->movieid}}">
                        <img class="mx-auto img-fluid" style="width: 100px;aspect-ratio: 9 / 12;object-fit: cover;display: block;border-radius: 10px;" src="{{$item->image}}" alt="...">
                    </a>    
                </div>
                <div class="p-2 w-100 bd-highlight">
                    <h3 class="ps-2 fs-5 text-white mb-0 pt-3"><b>{{$item->title}}</b></h3>
                </div>
            </div>
        @endforeach
    </div>
</div>
@stop()