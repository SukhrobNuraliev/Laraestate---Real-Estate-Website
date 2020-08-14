<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title> @yield('title') </title>

    <!-- Favicon  -->
    <link rel="icon" href="/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div> 

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="mailto:contact@southtemplate.com">laraestate@gmail.com</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="/img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+45 677 8993000 223">+998 97 777 77 77</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="/img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="/">Главный</a></li>
                                <li><a href="/about">О Нас</a></l>
                                <li><a href="/properties">Имущество</a></li>
                                <li><a href="/posts">Блог</a></li>
                                <li><a href="{{ route('contact.create') }}">СВЯЗАТЬСЯ</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->



    @yield('content')


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>О Нас</h6>
                            </div>

                            <img style="width: 50%" src="/img/bg-img/1.jfif" alt="">
                            <div class="footer-logo my-4">
                                <img src="/img/core-img/logo.png" alt="">
                            </div>
                            <p>Дом — мечта многих жителей Узбекистана. Желание жить в собственном доме является естественным и может.</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="/img/icons/phone-call.png" alt=""> +998 97 777 77 77</h6>
                                <h6><img src="/img/icons/envelope.png" alt=""> laraestate@gmail.com</h6>
                                <h6><img src="/img/icons/location.png" alt=""> Мирзо-улугбекский район
                                    Дархан-3</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p>Sukhrob Nuraliev.</p>
        </div>
        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->



    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="/js/plugins.js"></script>
    <script src="/js/classy-nav.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>

</body>

</html>