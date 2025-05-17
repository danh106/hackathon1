<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Sep 2024 17:14:20 GMT -->

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="" />
    <meta name="description" content="Bookland-Book Store Ecommerce Website" />
    <meta property="og:title" content="Bookland-Book Store Ecommerce Website" />
    <meta property="og:description" content="Bookland-Book Store Ecommerce Website" />
    <!-- <meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html"/> *@ -->
    <meta name="format-detection" content="telephone=no">
    <script src="/swiper/swiper-bundle.min.js"></script>

    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="/bookland_assets/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Bookland Book Store Ecommerce Website</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="/bookland_assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="/bookland_assets/icons/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="/bookland_assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="/bookland_assets/icons/themify/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/bookland_assets/css/style.css">

    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"> -->
<style>
     @import url('https://fonts.googleapis.com/css2?family=Cuprum:wght@700&display=swap');

        body {
            font-family: 'Cuprum', sans-serif;
            font-weight: 700;
        }
        .multi-line-ellipsis {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
</style>
</head>

<body>

    <div class="page-wraper">
        <!-- Header -->
        <header class="site-header mo-left header style-1">
            <!-- Main Header -->
            <div class="header-info-bar">
                <div class="container clearfix">
                    <!-- Website Logo -->
                    <div class="logo-header logo-dark">
                        <a href="/"><img src="/bookland_assets/images/logo.png" alt="logo"></a>
                    </div>

                    <!-- EXTRA NAV -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <ul class="navbar-nav header-right">
                                @if (auth()->check()) 
                                    <li class="nav-item">
                                        <a class="nav-link" href="/FavoriteBook/">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                                                fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path
                                                    d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z" />
                                            </svg>
                                            <span class="badge">0</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/RentalOrder/" type="button" class="nav-link box cart-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                                                fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path
                                                    d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                            </svg>
                                            <span class="badge">0</span>
                                        </a>
                                    </li>
                                @endif
                                <li class="nav-item dropdown profile-dropdown  ms-4">
                                    @if (auth()->check()) 
                                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="@Model.Image" alt="/">
                                        <div class="profile-info">
                                            <h6 class="title"></h6>
                                            <span></span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu py-0 dropdown-menu-end">
                                        <div class="dropdown-header">
                                            <h6 class="m-0"></h6>
                                            <span></span>
                                        </div>
                                        <div class="dropdown-body">
                                            <a href="/RentalOrder/"
                                                class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px"
                                                        fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                                    </svg>
                                                    <span class="ms-2">Giỏ Sách của tôi</span>
                                                </div>
                                            </a>
                                            <a href="/FavoriteBook/"
                                                class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px"
                                                        fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z" />
                                                    </svg>
                                                    <span class="ms-2">Sách yêu thích</span>
                                                </div>
                                            </a>
                                            <a href="/Rental/" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                                <div>
                                                    <i class="fa-solid fa-clock-rotate-left ms-1 text-primary"></i>
                                                    <span class="ms-2">Đơn thuê Sách của tôi</span>
                                                </div>
                                            </a>
                                            <a href="/Extension/" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                                <div>
                                                    <i class="fa-solid fa-clock-rotate-left ms-1 text-primary"></i>
                                                    <span class="ms-2">Yêu cầu gia hạn Sách</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dropdown-footer">
                                            <a class="btn btn-primary w-100 btnhover btn-sm" href="/User/Logout">Đăng xuất</a>
                                        </div>
                                    </div>
                                    @else 
                                    <a class="btn btn-primary w-100 btnhover btn-sm" href="/login">Đăng nhập</a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- header search nav -->
                    <div class="header-search-nav">
                        <form class="header-item-search">
                            <div class="input-group search-input">
                                <select class="default-select">
                                    <option>Category</option>
                                    <option>Photography </option>
                                    <option>Arts</option>
                                    <option>Adventure</option>
                                    <option>Action</option>
                                    <option>Games</option>
                                    <option>Movies</option>
                                    <option>Comics</option>
                                    <option>Biographies</option>
                                    <option>Children’s Books</option>
                                    <option>Historical</option>
                                    <option>Contemporary</option>
                                    <option>Classics</option>
                                    <option>Education</option>
                                </select>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
                                <button class="btn" type="button"><i class="flaticon-loupe"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Main Header End -->

            <!-- Main Header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix">
                    <div class="container clearfix">
                        <!-- Website Logo -->
                        <div class="logo-header logo-dark">
                            <a href="index.html"><img src="/bookland_assets/images/logo.png" alt="logo"></a>
                        </div>

                        <!-- Nav Toggle Button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <!-- EXTRA NAV -->
                        <!-- <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="contact-us.html" class="btn btn-primary btnhover">Get In Touch</a>
                            </div>
                        </div> -->

                        <!-- Main Nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                            <div class="logo-header logo-dark">
                                <a href="index.html"><img src="/bookland_assets/images/logo.png" alt=""></a>
                            </div>
                            <form class="search-input">
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
                                    <button class="btn" type="button"><i class="flaticon-loupe"></i></button>
                                </div>
                            </form>
                            <ul class="nav navbar-nav">
                                @foreach ($menu->where('levels','=','1')->get() as $item) 
                                    <?php $query=$menu->where('parentid','=',$item->menuid)->get();?>
                                    @if (count($query)==0) 
                                        <li><a href="{{$item->link}}"><span>{{$item->title}}</span></a></li>
                                    @else 
                                        <li class="sub-menu-down">
                                            <a><span>{{$item->title}}</span></a>
                                            <ul class="sub-menu">
                                                @foreach ($query as $item1) 
                                                    <li><a href="{{$item->link}}"><span>{{$item->title}}</span></a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="dz-social-icon">
                                <ul>
                                    <li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/dexignzone"></a></li>
                                    <li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/dexignzones"></a></li>
                                    <li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
                                    <li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/website_templates__/"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Header End -->

        </header>
        <!-- Header End -->
         @yield('body')
        <!-- Footer -->
        <footer class="site-footer style-1">
            <!-- Footer Category -->
            <div class="footer-category">
                <div class="container">
                    <div class="category-toggle">
                        <a href="javascript:void(0);" class="toggle-btn">Books categories</a>
                        <div class="toggle-items row">
                            <div class="footer-col-book">
                                <ul>
                                    <li><a href="books-grid-view.html">Architecture</a></li>
                                    <li><a href="books-grid-view.html">Art</a></li>
                                    <li><a href="books-grid-view.html">Action</a></li>
                                    <li><a href="books-grid-view.html">Biography</a></li>
                                    <li><a href="books-grid-view.html">Body, Mind & Spirit</a></li>
                                    <li><a href="books-grid-view.html">Business & Economics</a></li>
                                    <li><a href="books-grid-view.html">Children Fiction</a></li>
                                    <li><a href="books-grid-view.html">Children Non-Fiction</a></li>
                                    <li><a href="books-grid-view.html">Comics & Graphics</a></li>
                                    <li><a href="books-grid-view.html">Cooking</a></li>
                                    <li><a href="books-grid-view.html">Crafts & Hobbies</a></li>
                                    <li><a href="books-grid-view.html">Design</a></li>
                                    <li><a href="books-grid-view.html">Drama</a></li>
                                    <li><a href="books-grid-view.html">Education</a></li>
                                    <li><a href="books-grid-view.html">Family & Relationships</a></li>
                                    <li><a href="books-grid-view.html">Fiction</a></li>
                                    <li><a href="books-grid-view.html">Foreign Language</a></li>
                                    <li><a href="books-grid-view.html">Games</a></li>
                                    <li><a href="books-grid-view.html">Gardening</a></li>
                                    <li><a href="books-grid-view.html">Health & Fitness</a></li>
                                    <li><a href="books-grid-view.html">History</a></li>
                                    <li><a href="books-grid-view.html">House & Home</a></li>
                                    <li><a href="books-grid-view.html">Humor</a></li>
                                    <li><a href="books-grid-view.html">Literary Collections</a></li>
                                    <li><a href="books-grid-view.html">Mathematics</a></li>
                                    <li><a href="books-grid-view.html">Medical</a></li>
                                    <li><a href="books-grid-view.html">Nature</a></li>
                                    <li><a href="books-grid-view.html">Performing Arts</a></li>
                                    <li><a href="books-grid-view.html">Pets</a></li>
                                    <li><a href="books-grid-view.html">Show others</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Category End -->

            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="widget widget_about">
                                <div class="footer-logo logo-white">
                                    <a href="index.html"><img src="/bookland_assets/images/logo.png" alt=""></a>
                                </div>
                                <p class="text">Bookland is a Book Store Ecommerce Website Template by DexignZone lorem ipsum dolor sit</p>
                                <div class="dz-social-icon style-1">
                                    <ul>
                                        <li><a href="https://www.facebook.com/dexignzone" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCGL8V6uxNNMRrk3oZfVct1g" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="https://www.linkedin.com/showcase/3686700/admin/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                        <li><a href="https://www.instagram.com/website_templates__/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="widget widget_services">
                                <h5 class="footer-title">Our Links</h5>
                                <ul>
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="contact-us.html">Contact us</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="pricing.html">Pricing Table</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="widget widget_services">
                                <h5 class="footer-title">Bookland ?</h5>
                                <ul>
                                    <li><a href="index.html">Bookland</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="books-detail.html">Book Details</a></li>
                                    <li><a href="blog-detail.html">Blog Details</a></li>
                                    <li><a href="books-grid-view.html">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="widget widget_services">
                                <h5 class="footer-title">Resources</h5>
                                <ul>
                                    <li><a href="services.html">Download</a></li>
                                    <li><a href="help-desk.html">Help Center</a></li>
                                    <li><a href="shop-cart.html">Shop Cart</a></li>
                                    <li><a href="shop-login.html">Login</a></li>
                                    <li><a href="about-us.html">Partner</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="widget widget_getintuch">
                                <h5 class="footer-title">Get in Touch With Us</h5>
                                <ul>
                                    <li>
                                        <i class="flaticon-placeholder"></i>
                                        <span>832 Thompson Drive, San Fransisco CA 94107,US</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-phone"></i>
                                        <span>+123 345123 556<br>
                                            +123 345123 556</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <span>support@bookland.id<br>
                                            info@bookland.id</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Top End -->

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row fb-inner">
                        <div class="col-lg-6 col-md-12 text-start">
                            <p class="copyright-text">Bookland Book Store Ecommerce Website - © 2022 All Rights Reserved</p>
                        </div>
                        <div class="col-lg-6 col-md-12 text-end">
                            <p>Made with <span class="heart"></span> by <a href="https://dexignzone.com/">DexignZone</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom End -->

        </footer>
        <!-- Footer End -->

        <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="/bookland_assets/js/jquery.min.js"></script>
    <script src="/bookland_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/bookland_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/bookland_assets/vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script>BOOTSTRAP TOUCHSPIN JS
    <script src="/bookland_assets/js/dz.carousel.js"></script>
    <script src="/bookland_assets/vendor/counter/waypoints-min.js"></script>
    <script src="/bookland_assets/vendor/counter/counterup.min.js"></script>
    <script src="/bookland_assets/js/wow.min.js"></script>
    <script src="/bookland_assets/js/dz.ajax.js"></script>
    <script src="/bookland_assets/js/custom.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css">
    <script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"></script>
    @RenderSection("Scripts", required: false)
</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Sep 2024 17:14:40 GMT -->

</html>