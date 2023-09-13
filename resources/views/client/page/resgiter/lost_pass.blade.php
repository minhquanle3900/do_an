<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Lost-Pass</title>

    <!-- Fav Icon -->
    <link rel="icon" href="/assets_client/assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="/assets_client/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="/assets_client/assets/css/flaticon.css" rel="stylesheet">
    <link href="/assets_client/assets/css/owl.css" rel="stylesheet">
    <link href="/assets_client/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets_client/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="/assets_client/assets/css/animate.css" rel="stylesheet">
    <link href="/assets_client/assets/css/jquery-ui.css" rel="stylesheet">
    <link href="/assets_client/assets/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <link href="/assets_client/assets/css/nice-select.css" rel="stylesheet">
    <link href="/assets_client/assets/css/color.css" rel="stylesheet">
    <link href="/assets_client/assets/css/style.css" rel="stylesheet">
    <link href="/assets_client/assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>


        <!-- search-popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><i class="flaticon-close"></i></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="">
                                <input type="submit" value="Search Now!" class="theme-btn style-four">
                            </fieldset>
                        </div>
                    </form>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="index.html">Finance</a></li>
                        <li><a href="index.html">Idea</a></li>
                        <li><a href="index.html">Service</a></li>
                        <li><a href="index.html">Growth</a></li>
                        <li><a href="index.html">Plan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search-popup end -->

    @php
        $khach_hang = Auth::guard('resgiter')->user()->id;
        $so_luong = DB::table('gio_hangs')->where('id_khach_hang', $khach_hang)->sum('so_luong');
    @endphp

        <!-- main header -->
        <header class="main-header">
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <div class="top-left pull-left">
                            <ul class="info clearfix">
                                <li><i class="flaticon-email"></i><a href="mailto:support@example.com">cdio4@gmail.com</a></li>
                                <li><i class="flaticon-global"></i> CDIO4</li>
                            </ul>
                        </div>
                        <div class="top-right pull-right">
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="language">
                                <div class="lang-btn">
                                    <span class="flag"><img src="/images/covn.png" alt="" title="English"></span>
                                    <span class="txt">VietNam</span>
                                    <span class="arrow fa fa-angle-down"></span>
                                </div>
                                <div class="lang-dropdown">
                                    <ul>
                                        <li><a href="index.html">German</a></li>
                                        <li><a href="index.html">Italian</a></li>
                                        <li><a href="index.html">Chinese</a></li>
                                        <li><a href="index.html">Russian</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-box">
                                <span>VNĐ</span>
                                <ul class="price-list clearfix">
                                    <li><a href="index.html">USD</a></li>
                                    <li><a href="index.html">UK</a></li>
                                    <li><a href="index.html">URO</a></li>
                                    <li><a href="index.html">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <figure class="logo-box"><a href="/"><img src="/images/icon-1.png" alt=""></a></figure>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        @foreach ( $chuyenMuc as $key => $value )
                                        <li  class="current dropdown"><a href="/admin/chuyen-muc"target="_blank" >{{ $value->ten_chuyen_muc }}</a>
                                            <ul>
                                                @foreach ($danhMuc as $k => $v )
                                                @if ($v->id_chuyen_muc == $value->id )
                                                <li>{{ $v->ten_danh_muc }}</li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                        <li><a target="_blank" href="/contact">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <ul class="menu-right-content clearfix">
                            <li>
                                <div class="search-btn">
                                    <button type="button" class="search-toggler"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                            <li><a target="_blank" href="/client/resgiter"><i class="fa-solid fa-user"></i></a></li>
                            <li class="shop-cart">
                                <a  href="/client/thanh-toan"><i class="fa-solid fa-cart-shopping"></i><span>{{ $so_luong }}</span></a>
                            </li>
                            <li><a target="_blank" href="/client/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="/assets_client/assets/images/logo-2.png"
                            alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer"
                style="background-image: url(/assets_client/assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Tài Khoản</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="/">Home</a></li>
                        <li>Tài Khoản</li>
                        <li>Quên Tài Khoản</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- myaccount-section -->
        <section class="myaccount-section">
            <div class="auto-container">
                <div class="inner-box login-inner">
                    <div class="upper-inner">
                        <h3>Quên Mật Khẩu</h3>
                        <p>Lấy lại tài khoản để truy cập tất cả các tài nguyên của bạn</p>
                    </div>
                    <form action="/client/resgiter/lost-pass" method="post" class="default-form">
                        @csrf
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email">
                        </div>

                        <div class="form-group">
                            <div class="custom-controls-stacked">

                            </div>
                            <a href="/client/resgiter" class="recover-password">Đăng Nhập</a>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn-two">Lấy Lại Mật Khẩu<i
                                    class="flaticon-right-1"></i></button>
                        </div>
                    </form>
                    <div class="lower-inner centred">
                        <span>or</span>
                        <ul class="social-links clearfix">
                            <li><a href="/client/resgiter"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                            <li><a href="/client/resgiter"><i class="fab fa-google-plus-g"></i>Google</a></li>
                        </ul>
                        <p>Bạn chưa có tài khoản? <a href="/client/resgiter">Đăng ký ngay!</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- myaccount-section end -->


        <!-- main-footer -->
        <footer class="main-footer light">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget logo-widget">
                                        <figure class="footer-logo"><a href="/"><img src="/images/icon-1.png"
                                                    alt=""></a></figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget links-widget">
                                        <div class="widget-title">
                                            <h3>NHÓM 4</h3>
                                        </div>
                                        <div class="widget-content">
                                            <ul class="links-list clearfix">
                                                <li><a>Lê Minh Quân</a></li>
                                                <li><a>Nguyễn Văn Hướng</a></li>
                                                <li><a>Đặng Công Tuân</a></li>
                                                <li><a>Phan Hữu Lương</a></li>
                                                <li><a>Nguyễn Thị Thuy Thủy</a></li>
                                                <li><a>Thái Anh Tài</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                                    <div class="footer-widget contact-widget">
                                        <div class="widget-title">
                                            <h3>Liên Hệ</h3>
                                        </div>
                                        <ul class="info-list clearfix">
                                            <li><i class="flaticon-maps-and-flags"></i>610 Tôn Đức Thắng, <br />Đà Nẵng
                                            </li>
                                            <li><i class="flaticon-phone-ringing"></i><a href="tel:23055873407">+(84)
                                                    587-3407</a></li>
                                            <li><i class="flaticon-email"></i> <a
                                                    href="mailto:info@example.com">cdio4@gmail.com</a></li>
                                        </ul>
                                        <ul class="footer-social clearfix">
                                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                                    <div class="footer-widget newsletter-widget">
                                        <div class="widget-title">
                                            <h3>Đóng Góp</h3>
                                        </div>
                                        <div class="widget-content">
                                            <p>Mọi thông tin đóng góp của các bạn sẽ là vinh dự của chúng tôi!</p>
                                            <form action="contact.html" method="post" class="newsletter-form">
                                                <div class="form-group">
                                                    <input type="email" name="email" " required="">
                                                    <button type="submit" class="theme-btn-two">Gửi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container clearfix">
                    <ul class="cart-list pull-left clearfix">
                        <li><a href="index.html"><img src="/assets_client/assets/images/resource/card-1.png" alt=""></a></li>
                        <li><a href="index.html"><img src="/assets_client/assets/images/resource/card-2.png" alt=""></a></li>
                        <li><a href="index.html"><img src="/assets_client/assets/images/resource/card-3.png" alt=""></a></li>
                        <li><a href="index.html"><img src="/assets_client/assets/images/resource/card-4.png" alt=""></a></li>
                    </ul>
                    <div class="copyright pull-right">
                        <p><a href="index.html">LMQ</a> &copy; 2023 All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-long-arrow-alt-up"></i>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="/assets_client/assets/js/jquery.js"></script>
    <script src="/assets_client/assets/js/popper.min.js"></script>
    <script src="/assets_client/assets/js/bootstrap.min.js"></script>
    <script src="/assets_client/assets/js/owl.js"></script>
    <script src="/assets_client/assets/js/wow.js"></script>
    <script src="/assets_client/assets/js/validation.js"></script>
    <script src="/assets_client/assets/js/jquery.fancybox.js"></script>
    <script src="/assets_client/assets/js/TweenMax.min.js"></script>
    <script src="/assets_client/assets/js/appear.js"></script>
    <script src="/assets_client/assets/js/scrollbar.js"></script>
    <script src="/assets_client/assets/js/jquery.nice-select.min.js"></script>
    <script src="/assets_client/assets/js/isotope.js"></script>
    <script src="/assets_client/assets/js/jquery-ui.js"></script>
    <script src="/assets_client/assets/js/jquery.bootstrap-touchspin.js"></script>

    <!-- main-js -->
    <script src="/assets_client/assets/js/script.js"></script>
</body><!-- End of .page_wrapper -->
</html>
