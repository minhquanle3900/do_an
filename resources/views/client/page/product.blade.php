<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Product</title>

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
                    <h1>Sản Phẩm</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="/">Home</a></li>
                        <li>Sản Phẩm</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->

        <!-- product-details -->
        <section class="product-details product-details-1">
            <div class="auto-container">
                <div class="product-details-content">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <figure class="product-image">
                                <img src="/hinh-san-pham/{{ $sanPham->hinh_anh }}" alt="">
                                <a href="/hinh-san-pham/{{ $sanPham->hinh_anh }}" class="lightbox-image"><i class="flaticon-search-2"></i></a>
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="product-info">
                                <h3>{{ $sanPham->ten_san_pham }}</h3>
                                <div class="customer-review clearfix">
                                    <ul class="rating-box clearfix">
                                        <li><i class="flaticon-star"></i></li>
                                        <li><i class="flaticon-star"></i></li>
                                        <li><i class="flaticon-star"></i></li>
                                        <li><i class="flaticon-star"></i></li>
                                        <li><i class="flaticon-star-1"></i></li>
                                    </ul>
                                    <div class="reviews"><a href="product-single.html">(4 Reviews)</a></div>
                                </div>
                                <span class="item-price">{{ number_format($sanPham->gia_ban) }}&nbsp;VNĐ</span>
                                <div class="text">
                                    <p>{{ $sanPham->mo_ta_ngan }}</p>
                                    <ul class="list clearfix">
                                        <li>Giàu dinh dưỡng.</li>
                                        <li>Bán hàng có "Tâm".</li>
                                        <li>Lành mạnh với mọi nhà.</li>
                                    </ul>
                                </div>
                                <div class="othre-options clearfix">
                                    <div class="item-quantity">
                                        <input class="quantity-spinner" type="text" value="1" name="quantity">
                                    </div>
                                    <div class="btn-box"><a href="/client/thanh-toan"><button type="button" class="theme-btn-two">Mua Ngay</button></a></div>
                                    <ul class="info clearfix">
                                        <li><a href="product-details.html"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="product-details.html"><i class="flaticon-search"></i></a></li>
                                    </ul>
                                </div>
                                <div class="other-links">
                                    <ul class="clearfix">
                                        <li>Chuyên Mục : <a href="">{{ $sanPham->ten_chuyen_muc }}</a></li>
                                        <li>Danh Mục   : <a href="">{{ $sanPham->ten_danh_muc }}</a></li>
                                        <li>Sản Phẩm   : <a href="">{{$sanPham->ten_san_pham}}</a></li>
                                    </ul>
                                </div>
                                <ul class="share-option clearfix">
                                    <li><h5>Follow Us:</h5></li>
                                    <li><a href="shop-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="shop-details.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="shop-details.html"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="shop-details.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-discription">
                    <div class="tabs-box">
                        <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab-1">Mô Tả</li>
                                <li class="tab-btn" data-tab="#tab-2">Reviews(5+)</li>
                            </ul>
                        </div>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="text">
                                    <p>{{$sanPham->mo_ta}}</p>
                                </div>
                            </div>
                            <div class="tab" id="tab-2">
                                <div class="review-box">
                                    <h5> Review for {{$sanPham->ten_san_pham}}</h5>
                                    <div class="review-inner">
                                        <figure class="image-box"><img src="/images/user1.jpg" alt=""></figure>
                                        <div class="inner">
                                            <ul class="rating clearfix">
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star"></i></li>
                                            </ul>
                                            <h6>Tuân Ngáo <span>- May 6, 2023</span></h6>
                                            <p>Dâu tây ở đây thực sự rất xịn, giao hàng nhanh, giao dịch an toàn. 100 điểmmmmm.</p>
                                        </div>
                                    </div>
                                    <div class="review-inner">
                                        <figure class="image-box"><img src="/images/testimonial-4.jpg" alt=""></figure>
                                        <div class="inner">
                                            <ul class="rating clearfix">
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <h6>Hướng Đù <span>- May 9, 2023</span></h6>
                                            <p>Good Service.</p>
                                        </div>
                                    </div>
                                    <div class="review-inner">
                                        <figure class="image-box"><img src="/images/testimonial-1.jpg" alt=""></figure>
                                        <div class="inner">
                                            <ul class="rating clearfix">
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <h6>Thủy Nguyễn <span>- Sep 3, 2023</span></h6>
                                            <p>Giao hàng gất nhanh.</p>
                                        </div>
                                    </div>
                                    <div class="review-inner">
                                        <figure class="image-box"><img src="/images/testimonial-2.jpg" alt=""></figure>
                                        <div class="inner">
                                            <ul class="rating clearfix">
                                                <li><i class="flaticon-star"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>

                                            </ul>
                                            <h6>Tài Lỏ <span>- Jun 4, 2022</span></h6>
                                            <p>Tiện lợi Thật.</p>
                                        </div>
                                    </div>

                                    <div class="replay-inner">
                                        <h5>Hãy là người đầu tiên đánh giá cho “Chúng Tôi”</h5>
                                        <div class="rating-box clearfix">
                                            <h6>Đánh giá của bạn</h6>
                                            <ul class="rating clearfix">
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                            </ul>
                                        </div>
                                        <form action="contact.html" method="post" class="review-form">
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                    <label>Cảm nghĩ của bạn</label>
                                                    <textarea name="message"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <label>Họ tên</label>
                                                    <input type="text" name="name" required="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <label>Email</label>
                                                    <input type="email" name="email" required="">
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="description">Lưu tên, email và trang web của tôi trong trình duyệt này cho lần bình luận tiếp theo</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                                    <button type="submit" class="theme-btn-two">Gửi đánh giá của bạn<i class="flaticon-right-1"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related-product">
                    <div class="sec-title style-two">
                        <h2>Sản Phẩm tương tự</h2>
                        <p>Có một số sản phẩm mà chúng tôi đặc trưng để lựa chọn tốt nhất của bạn!</p>
                        <span class="separator" style="background-image: url(assets/images/icons/separator-2.png);"></span>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="/images/product-6.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                        <li><a target="_blank" href="/product/{{$value->id}}">Chi Tiết</a></li>
                                        <li><a onclick="addToCart({{$value->id}})"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="product-details.html">Cà Chua</a>
                                        <span class="price">18.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="/images/product-8.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                        <li><a target="_blank" href="/product/{{$value->id}}">Chi Tiết</a></li>
                                        <li><a onclick="addToCart({{$value->id}})"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="product-details.html">Quả Chuối</a>
                                        <span class="price">30.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="/images/product-5.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                        <li><a target="_blank" href="/product/{{$value->id}}">Chi Tiết</a></li>
                                        <li><a onclick="addToCart({{$value->id}})"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="product-details.html">Dưa Leo</a>
                                        <span class="price">10.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="/images/product-4.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                        <li><a target="_blank" href="/product/{{$value->id}}">Chi Tiết</a></li>
                                        <li><a onclick="addToCart({{$value->id}})"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="product-details.html">Dâu Tây</a>
                                        <span class="price">120.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-details end -->

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

    <!-- main-js -->
    <script src="/assets_client/assets/js/script.js"></script>

    <script>
        function number_format(number) {
        return new Intl.NumberFormat('vi-VI', {
            style: 'currency',
            currency: 'VND'
        }).format(number);
    };
    </script>
</body><!-- End of .page_wrapper -->
</html>
