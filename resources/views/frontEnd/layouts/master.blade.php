<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTurnX-Vendor-Shope</title>
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/style.css') }}" />

</head>

<body>
    <!-- HEADER SECTION-->

    <header class="main-header">
        <div class="logo-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo-header">
                            <div class="main-logo">
                                <a href="">
                                    <img src="{{ asset('public/frontEnd')}}/images/logo.png " alt="">
                                </a>
                            </div>
                            <div class="main-search">
                                <form action="">
                                    <button><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg></button>
                                    <input type="text" placeholder="Search Product..."
                                        class="msearch_keyword msearch_click" name="keyword">
                                </form>
                                <div class="search_result"></div>
                            </div>
                            <div class="header-list-items">
                                <ul>
                                    <li class="track_btn">
                                        <a href=""> <i class="fa fa-truck"></i></a>
                                    </li>
                                    <li class="for_order">
                                        <p>
                                            <a href="">
                                                <i class="fa-regular fa-circle-user"></i>
                                            </a>
                                        </p>
                                    </li>

                                    <li class="cart-dialog" id="cart-qty">
                                        <a href="">
                                            <p class="margin-shopping">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                                <span>0</span>
                                            </p>
                                        </a>
                                        <div class="cshort-summary">
                                            <ul>
                                            </ul>
                                            <p><strong>SubTotal : ৳0.00</strong></p>
                                            <a href="" class="go_cart">Process To
                                                Order </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu">
                            <ul>
                                <li><a href="">Gatgets <i class="fa-solid fa-angle-down cat_down"></i></a>
                                    <div class="mega_menu">
                                        <ul>
                                            <li>
                                                <a href=""
                                                    class="cat-title">
                                                    Airpods
                                                </a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <a href=""
                                                    class="cat-title">
                                                    Headphone
                                                </a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <a href=""
                                                    class="cat-title">
                                                    Speaker
                                                </a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <a href=""
                                                    class="cat-title">
                                                    Neckband
                                                </a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <a href=""
                                                    class="cat-title">
                                                    LCD Tab
                                                </a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <a href=""
                                                    class="cat-title">
                                                    Trimmer
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="">Tiles</a></li>
                                <li><a href=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- MASTER BODY WORK START -->
    <section class="master-body">
        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </section>
    <!-- MASTER BODY WORK END -->
    <!-- FOOTER SECTION -->






    <script src="{{asset('public/frontend')}}/js/jquery-3.7.1.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/all.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/script.js"></script>
    <script src="{{asset('public/frontend')}}/js/jquery.meanmenu.js"></script>
    <script>
</body >

</html >