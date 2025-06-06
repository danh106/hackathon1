<?php $user = auth('admin')->user();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- bootstrap and fontawersome -->

  <link rel="stylesheet" href="/assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <!-- <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}"> -->
  <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="/assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{$user->avatar}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{$user->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{$user->name}}</h6>
              <span>{{$user?->role->name}}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/admin/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Đăng xuất</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class=" sidebar">
    <ul class="accordion sidebar-nav" id="accordionExample">
      <li class="nav-item">
        <button class="accordion-button collapsed nav-link " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false">
          <i class="fa-solid fa-bars me-2 fs-5"></i> Quản lý menu
        </button>
        <ul id="collapseOne" class="nav-item accordion-collapse collapse" data-bs-parent="#accordionExample">
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/menu"><i class="me-2"></i>Danh sách</a>
          </li>
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/menu/create"><i class="me-2"></i>Thêm mới</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <button class="accordion-button collapsed nav-link " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
          <i class="fa-solid fa-sliders me-2 fs-5"></i>Quản lý slider
        </button>
        <ul id="collapseTwo" class="nav-item accordion-collapse collapse" data-bs-parent="#accordionExample">
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="{{route('slider.index')}}"><i class="me-2"></i>Danh sách</a>
          </li>
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="{{route('slider.create')}}"><i class="me-2"></i>Thêm mới</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <button class="accordion-button collapsed nav-link " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
          <i class="fa-solid fa-book-bookmark me-2 fs-5"></i> Quản lý tài liệu
        </button>
        <ul id="collapseThree" class="nav-item accordion-collapse collapse" data-bs-parent="#accordionExample">
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/document"><i class="me-2"></i>Danh sách</a>
          </li>
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/document/create"><i class="me-2"></i>Thêm mới</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <button class="accordion-button collapsed nav-link " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false">
          <i class="fa-solid fa-feather fs-5 me-2"></i> Quản lý tác giả
        </button>
        <ul id="collapseFour" class="nav-item accordion-collapse collapse" data-bs-parent="#accordionExample">
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/author"><i class="me-2"></i>Danh sách</a>
          </li>
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/author/create"><i class="me-2"></i>Thêm mới</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <button class="accordion-button collapsed nav-link " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false">
          <i class="fa-solid fa-pen me-2 fs-6"></i> Quản lý nhà xuất bản
        </button>
        <ul id="collapseFive" class="nav-item accordion-collapse collapse" data-bs-parent="#accordionExample">
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/publisher"><i class="me-2"></i>Danh sách</a>
          </li>
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/publisher/create"><i class="me-2"></i>Thêm mới</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <button class="accordion-button collapsed nav-link " type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false">
          <i class="fa-solid fa-user me-2 fs-6"></i> Quản lý người dùng
        </button>
        <ul id="collapseSix" class="nav-item accordion-collapse collapse" data-bs-parent="#accordionExample">
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/user"><i class="me-2"></i>Danh sách</a>
          </li>
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/user/create"><i class="me-2"></i>Thêm mới</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <button class="accordion-button collapsed nav-link " type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false">
          <i class="fa-brands fa-blogger fs-5 me-2 fw-blod"></i> Quản lý Blog
        </button>
        <ul id="collapseSeven" class="nav-item accordion-collapse collapse" data-bs-parent="#accordionExample">
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/blog"><i class="me-2"></i>Danh sách</a>
          </li>
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/blog/create"><i class="me-2"></i>Thêm mới</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <button class="accordion-button collapsed nav-link " type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false">
          <i class="fa-solid fa-swatchbook me-2"></i> Quản lý thể loại
        </button>
        <ul id="collapseEight" class="nav-item accordion-collapse collapse" data-bs-parent="#accordionExample">
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/category"><i class="me-2"></i>Danh sách</a>
          </li>
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/category/create"><i class="me-2"></i>Thêm mới</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <button class="accordion-button collapsed nav-link " type="button" data-bs-toggle="collapse" data-bs-target="#collapsenight" aria-expanded="false">
          <i class="fa-solid fa-swatchbook me-2"></i> Quản lý ngôn ngữ
        </button>
        <ul id="collapsenight" class="nav-item accordion-collapse collapse" data-bs-parent="#accordionExample">
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/language"><i class="me-2"></i>Danh sách</a>
          </li>
          <li class="nav-item">
            <a class="ps-0 nav-link collapsed" href="/admin/language/create"><i class="me-2"></i>Thêm mới</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/contact"><i class="fa-solid fa-bars me-2 fs-5"></i>quản lý liên hệ</a>
      </li>
    </ul>
  </aside><!-- End Sidebar-->
  <main id="main" class="main">
    @yield('body')
    </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/quill/quill.min.js"></script>
    <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/vendor/chart.js/chart.min.js"></script>
    <script src="/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> *@ -->
    <script src="https://cdn.jsdelivr.net/npm/quill-image-resize-module@3.0.0/image-resize.min.js"></script>
    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>
    <script src="/my_assets/admin/js/main.js"></script>
</body>

</html>