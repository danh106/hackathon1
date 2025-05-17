@php
    use Illuminate\Support\Str;
@endphp
@extends('Layout.Layout')
@section('body')
<div class="page-content bg-white">

    <!--Swiper Banner Start -->
    <div class="swiper slide" id="mainslider" style="max-width: 100%;overflow: hidden;">
        <div class="swiper-wrapper" style="max-width: 100%;">
                @foreach ($slider as $item)
                <div class="swiper-slide bg-blue "
                    style="background-size: cover;background-image: url(/bookland_assets/images/background/waveelement.png);height:auto;">
                    <div class="container p-4 h-100" >
                        <div class="row h-100">
                            <div class="col-12 col-md-6">
                                <div class="pb-4 d-flex flex-column h-100">
                                    <div class="m-auto">
                                        <h2 class="title mb-0 text-white pb-2" data-swiper-parallax="-20">{{$item->title}}</h2>
                                        <div class="text-slide  mb-0" data-swiper-parallax="-40">{!!$item->description!!}
                                        </div>
                                    </div>
                                    <div class="d-none d-lg-block" style="height: 160px; width: 100%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="d-flex" data-swiper-parallax="-100">
                                    <img class="m-auto" style="max-height: 500px;" src="{{$item->imagepath}}" alt="banner-media">
                                </div>
                                <img class="pattern" style="z-index: -1000;" src="/bookland_assets/images/Group.png"
                                    data-swiper-parallax="-100" alt="dots">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
    <section class="content-inner-1 py-3">
        <div class="container" style="overflow: hidden;">
            <div class="d-flex py-3">
                <h3 class="mx-auto fs-3 text-white py-1 px-4 title" style="background-color: #ab7a32;border-radius: 10px;"><b>Sách mới nhất</b></h3>
            </div>
            <div class="swiper slide" id="newslide1">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach ($newdocument as $item)
                    <div class=" swiper-slide" style="background: none;border: none;">
                        <a  class="position-relative" href="/document/{{ Str::slug($item->title) }}/{{$item->documentid}}">
                            <img src="{{$item->image}}" style="aspect-ratio: 9 / 12;object-fit: cover;display: block;border-radius: 10px;" class="card-img-top" alt="..." >
                            <b style="left: 4px; top: 4px;" class="position-absolute badge bg-secondary">New</b>
                        </a>
                        <div class="card-body px-0">
                            <a class="nav-link text-dark p-0" href="/document/{{ Str::slug($item->title) }}/{{$item->documentid}}">
                                <h5 style="font-size: 16px;"  class="multi-line-ellipsis text-dark">{{$item->title}}</h5>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> 
    <section class="content-inner-1 py-3">
        <div class="container" style="overflow: hidden;">
            <div class="d-flex py-3">
                <h3 class="mx-auto fs-3 text-white py-1 px-4 title" style="background-color: #ab7a32;border-radius: 10px;"><b>Mới cập nhật</b></h3>
            </div>
            <div class="swiper slide" id="newslide1">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach ($newupdatedocument as $item)
                    <div class=" swiper-slide" style="background: none;border: none;">
                        <a  class="position-relative" href="/document/{{ Str::slug($item->title) }}/{{$item->documentid}}">
                            <img src="{{$item->image}}" style="aspect-ratio: 9 / 12;object-fit: cover;display: block;border-radius: 10px;" class="card-img-top" alt="..." >                </a>
                        <div class="card-body px-0">
                            <a class="nav-link text-dark p-0" href="/document/{{ Str::slug($item->title) }}/{{$item->documentid}}">
                                <h5 style="font-size: 16px;"  class="multi-line-ellipsis text-dark">{{$item->title}}</h5>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>      
    <section class="content-inner-1 py-3">
        <div class="container">
            @foreach ($data as $item)
            @if (count($item->tbldocumentcategories)==0)
                @continue
            @endif
            <div class="p-4 row mb-3" style="background:	rgb(242, 241, 241) ;border-radius: 20px;">
                <h3 class="ps-2 fs-4 mb-0">{{$item->name}}</h3>
                <a class=" ps-2 nav-link text-dark pt-0" href="">
                    <b style="font-size: 17px;">Xem thêm ></b>
                </a>
                @foreach ($item->tbldocumentcategories as $item2)
                <div class="card col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 " style="background: none;border: none;">
                    <a class="position-relative" href="/document/{{ Str::slug($item2->document->title) }}/{{$item2->document->documentid}}">
                        <img src="{{$item2->document->image}}" style="aspect-ratio: 9 / 12;object-fit: cover;display: block;border-radius: 10px;" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body px-0 pb-0" style="background: none;">
                        <a class="nav-link text-dark p-0" href="/document/{{$item2->document->alias}}/{{$item2->document->documentid}}">
                            <h5 class="multi-line-ellipsis text-dark" style="font-size: 16px;">{{$item2->document->title}}</h5>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        @endforeach
        </div>
    </section>
</div>


<script>
    const newslide1 = new Swiper('#newslide1', {
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false
        },
        breakpoints: {
            360: {
                slidesPerView: 2,
            },
            600: {
                slidesPerView: 2,
            },
            767: {
                slidesPerView: 3,
            },
            991: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 5,
            },
            1400: {
                slidesPerView: 6,
            }
        },
        spaceBetween: 20,
        speed: 800
    });
    const slide = new Swiper('#mainslider', {
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        speed: 800
    });
</script>
@stop()