<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="/swiper/swiper-bundle.min.css">

<!-- Swiper JS -->
    <script src="/swiper/swiper-bundle.min.js"></script>
    
<link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cuprum:wght@700&display=swap');

        body {
            font-family: 'Cuprum', sans-serif;
            font-weight: 700;
        }
        .active{
            color: #ff9900 !important;
        }
    </style>
</head>

<body style="background: #1e293b;color:#e8e8e8;" class="fs-5">
    <header style="background-color:#293850;">
        <nav class="navbar navbar-expand-lg navbar-dark container py-0">
            <div class="container-fluid px-0">
                <a class="navbar-brand" href="/">
                    <img class="img-responsive visible-xs" src="https://wsrv.nl/?url=https://lh3.googleusercontent.com/-YEzTAydyP9c/Zm1UmYm0kiI/AAAAAAAAElk/gxClwABmigQEx5-B_JwIo8tVMiUCipWjwCNcBGAsYHQ/h240/logo.png" style="width: 90px;height:58px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @foreach ($menu as $item) 
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="{{$item->link}}">{{$item->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="container overflow-hidden">
        @yield('body')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
</html>