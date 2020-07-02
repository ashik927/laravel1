<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dreams Template">
    <meta name="keywords" content="Dreams, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dreams | Template</title>

    <!-- Google Font -->
    <link href="{{URL::asset('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap')}}" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__search">
            <i class="fa fa-search search-switch"></i>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="./courses">Courses</a></li>
                <li class="active"><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./about.html">About</a></li>
                        <li><a href="./instructor.html">Instructor</a></li>
                        <li><a href="./pricing.html">Pricing</a></li>
                        <li><a href="./faq.html">FAQ</a></li>
                        <li><a href="./course-details.html">Course Details</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
        <div class="offcanvas__btn">
            <a href="#" class="primary-btn">Get Started</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./">Home</a></li>
                            <li><a href="./courses">Courses</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./instructor.html">Instructor</a></li>
                                    <li><a href="./pricing.html">Pricing</a></li>
                                    <li><a href="./faq.html">FAQ</a></li>
                                    <li><a href="./course-details.html">Course Details</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./news">News</a></li>
                            <li><a href="./contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-5">
                    <div class="header__right">
                        <div class="header__right__search">
                            <i class="fa fa-search search-switch"></i>
                        </div>
                        <div class="header__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                        <div class="header__right__btn">
                            <a href="#" class="primary-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <!-- <section class="hero set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero__text">
                        <h5>Best options for you</h5>
                        <h2>drive safe & get license</h2>
                        <a href="#" class="primary-btn">Contact us</a>
                        <a href="#" class="primary-btn second-bg">See Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Hero Section End -->
    @yield('content')
   

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-6">
                    <div class="footer__widget">
                        <h5>COMPANY</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Press & Blog</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Faq</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Courses</h5>
                        <ul>
                            <li><a href="#">Winter driving</a></li>
                            <li><a href="#">Program for seniors</a></li>
                            <li><a href="#">Adult in car lesons</a></li>
                            <li><a href="#">Defensive driving</a></li>
                            <li><a href="#">Stick shit lessons</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>USEFUL LINKS</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Drupal Themes</a></li>
                            <li><a href="#">WordPress Themes</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Address : 15 Division Street, New York, NY 12032, United States of America</p>
                        <ul>
                            <li>Phone : +0 (123) 456789</li>
                            <li>Email : Kaseo@gmail.com</li>
                            <li>Fax : +8 (123) 456 789</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://ashikmahmud.com" target="_blank">ASHIK</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>