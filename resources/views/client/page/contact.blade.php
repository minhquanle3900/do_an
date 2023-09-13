<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Contact</title>

<!-- Fav Icon -->
<link rel="icon" href="/assets_client/assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
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
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
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
                <div class="nav-logo"><a href="index.html"><img src="/assets_client/assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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
            <div class="pattern-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Liên Hệ Cho Chúng Tôi</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="/">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- address-section -->
        <section class="address-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Địa Chỉ của Chúng Tôi</h2>
                    <p>Địa chỉ cố định nếu bạn muốn gặp!</p>
                    <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 address-column">
                        <div class="single-adderss-block">
                            <div class="inner-box">
                                <h3>New York Office</h3>
                                <ul class="info-list clearfix">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        PO Box 16122 Collins Street West Victoria 8007 Canada
                                    </li>
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        <a href="tel:48564334212234">(+48) 564-334-21-22-34</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:info@example.com">cdio3@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 address-column">
                        <div class="single-adderss-block">
                            <div class="inner-box">
                                <h3>London Office</h3>
                                <ul class="info-list clearfix">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        PO Box 16122 Collins Street West Victoria 8007 Landon
                                    </li>
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        <a href="tel:48564334212234">(+48) 564-334-21-22-34</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:info@example.com">do_an3@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 address-column">
                        <div class="single-adderss-block">
                            <div class="inner-box">
                                <h3>VietNam Office</h3>
                                <ul class="info-list clearfix">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        220 Võ Nguyên Giáp - Đà Nẵng
                                    </li>
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        <a href="tel:48564334212234">(+84) 334-2234</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:info@example.com">do_an_3@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- address-section end -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-column">
                <div
                    class="google-map"
                    id="contact-google-map"
                    data-map-lat="40.712776"
                    data-map-lng="-74.005974"
                    data-icon-path="assets/images/icons/map-marker.png"
                    data-map-title="Brooklyn, New York, United Kingdom"
                    data-map-zoom="12"
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

                </div>
            </div>
        </section>
        <!-- google-map-section -->


        <!-- contact-section -->
        <section class="contact-section">
            <div class="auto-container">
                <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 big-column">
                    <div class="sec-title">
                        <h2>Liên Lạc</h2>
                        <p>Mọi thông tin chi tiết Hãy liên hệ Chúng Tôi!</p>
                        <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                    </div>
                    <div class="form-inner">
                        <form method="post" action="sendemail.php" id="contact-form" class="default-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Họ và Tên" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Số điện thoại" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Tin Nhắn"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                    <button type="submit" class="theme-btn-two" name="submit-form">Gửi Tin Nhắn<i class="flaticon-right-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget logo-widget">
                                        <figure class="footer-logo"><a href="/"><img src="/images/icon-1.png" alt=""></a></figure>
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
                                            <li>610 Tôn Đức Thắng, <br />Đà Nẵng</li>
                                            <li><a href="tel:23055873407">+(84) 587-3407</a></li>
                                            <li><a href="mailto:info@example.com">cdio4@gmail.com</a></li>
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
                                                    <input type="email" name="email" placeholder="Nhập vào email của bạn" required="">
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

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="/assets_client/assets/js/gmaps.js"></script>
    <script src="/assets_client/assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="/assets_client/assets/js/script.js"></script>
</body><!-- End of .page_wrapper -->
</html>
