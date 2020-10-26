<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Millennial</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../assets2/img/logo/logo.png">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset ('assets2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/style1.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets2/css/owl.css')}}">

    <link rel="stylesheet" href="{{ asset ('assets2/css/responsive.css')}}">
    
  <!--== jquery-ui -->
  <link rel="stylesheet" href="{{ asset ('assets2/css/jquery-ui.css')}}">
  <!-- <link href="http://japmedia.co.id/shop/assets/css/jquery-ui.css" rel="stylesheet" type="text/css" /> -->

<!--== owl-carousel -->
<link rel="stylesheet" href="{{ asset ('assets2/css/owl-carousel/owl.carousel.css')}}">
<!-- <link href="http://japmedia.co.id/shop/assets/css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" /> -->

<!--== slit-slider -->
<link rel="stylesheet" href="{{ asset ('assets2/css/slit-slider/slit-slider.css')}}">
<!-- <link href="http://japmedia.co.id/shop/assets/css/slit-slider/slit-slider.css" rel="stylesheet" type="text/css" /> -->

<!--== slick-slider -->
<link rel="stylesheet" href="{{ asset ('assets2/css/slick-slider/slick.css')}}">
<link rel="stylesheet" href="{{ asset ('assets2/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{ asset ('assets2/css/base.css')}}">
link rel="stylesheet" href="{{ asset ('assets2/css/base1.css')}}">


  <!--== style -->
  <link rel="stylesheet" href="{{ asset ('assets2/css/style2.css')}}">

   
</head>

<body>

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">

                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                    <a href="index.html"><img src="../assets2/img/logo/logo.png" style="position:0 auto; height: 100%; width: 70px;" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">Beranda</a></li>
                                            <li><a href="/Catagori">Katalog</a></li>
                                            <li><a href="/Komunitas">Komunitas</a></li>
                                            <li class="hot"><a href="#">Latest</a>
                                                <ul class="submenu">
                                                    <li><a href="/product_list"> Product list</a></li>
                                                    <li><a href="/single-product"> Product Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/blog">Tentang Millennial</a>
                                                <ul class="submenu">
                                                    <li><a href="/blog">Blog</a></li>
                                                    <li><a href="/single-blog">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="/login">Login</a></li>
                                                    <li><a href="/cart">Card</a></li>
                                                    <li><a href="/elements">Element</a></li>
                                                    <li><a href="/about">About</a></li>
                                                    <li><a href="/confirmation">Confirmation</a></li>
                                                    <li><a href="/cart">Shopping Cart</a></li>
                                                    <li><a href="/checkout">Product Checkout</a></li>
                                                </ul>
                                            </li>

                                        </ul>


                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-card">
                                            <a href="/cart"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>
                                    <li class="d-none d-lg-block"> <a href="/login" class="btn header-btn">Sign in</a></li>
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    @yield('utama')

    @include('Ecommerce/footer')



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset ('assets2/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset ('assets2/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset ('assets2/js/popper.min.js')}}"></script>
    <script src="{{ asset ('assets2/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset ('assets2/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset ('assets2/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('assets2/js/slick.min.js')}}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset ('assets2/js/wow.min.js')}}"></script>
    <script src="{{ asset ('assets2/js/animated.headline.js')}}"></script>
    <script src="{{ asset ('assets2/js/jquery.magnific-popup.js')}}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset ('assets2/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset ('assets2/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset ('assets2/js/jquery.sticky.js')}}"></script>

    <!-- contact js -->
    <script src="{{ asset ('assets2/js/contact.js')}}"></script>
    <script src="{{ asset ('assets2/js/jquery.form.js')}}"></script>
    <script src="{{ asset ('assets2/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset ('assets2/js/mail-script.js')}}"></script>
    <script src="{{ asset ('assets2/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset ('assets2/js/plugins.js')}}"></script>
    <script src="{{ asset ('assets2/js/main.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset ('assets2/js/custom.js')}}"></script>
    <script src="{{ asset ('assets2/js/owl.js')}}"></script>
    <script src="{{ asset ('assets2/js/slick.js')}}"></script>
    <script src="{{ asset ('assets2/js/isotope.js')}}"></script>
    <script src="{{ asset ('assets2/js/accordions.js')}}"></script>

    <!--== owl-carousel -->
<script src="{{ asset ('assets2/js/owl-carousel/owl.carousel.min.js')}}"></script>

<!--== slit-slider -->
<script src="{{ asset ('assets2/js/slit-slider/jquery.ba-cond.min.js')}}"></script>
<script src="{{ asset ('assets2/js/slit-slider/jquery.slitslider.js')}}"></script>

<!--== slick-slider -->
<script src="{{ asset ('assets2/js/slick-slider/slick.js')}}"></script>

<!--== countdown -->
<script src="{{ asset ('assets2/js/slick-slider/jquery.countdown.min.js')}}"></script>
    <!--== theme-script -->
<script src="{{ asset ('assets2/js/theme-script.js')}}"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>
</body>

</html>
