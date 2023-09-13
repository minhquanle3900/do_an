<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Store</title>

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
            <div class="pattern-layer" style="background-image: url(/assets_client/assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Store Nông Sản</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="/">Home</a></li>
                        <li>Store Nông Sản</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- shop-page-section -->
        <section class="shop-page-section shop-page-1">
            <div class="auto-container">
                <div class="item-shorting clearfix">
                    <div class="left-column pull-left clearfix">
                        <div class="filter-box">
                            <div class="dropdown">
                                <button class="search-box-btn" type="button" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-list-2"></i>Filter</button>
                                <div class="filter-content dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu5">
                                    <div class="close-btn"><i class="flaticon-close"></i></div>
                                    <div class="discription-box">
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-6 col-sm-12 column">
                                                <div class="single-column">
                                                    <h4>Category</h4>
                                                    <ul class="list clearfix">
                                                        <li><a href="single-shop-1.html">Women’s Clothing (6)</a></li>
                                                        <li><a href="single-shop-1.html">Man Fashion (9)</a></li>
                                                        <li><a href="single-shop-1.html">Kid’s Clothing (2)</a></li>
                                                        <li><a href="single-shop-1.html">Jewelry & Watches (5)</a></li>
                                                        <li><a href="single-shop-1.html">Bags & Shoes (3)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 column">
                                                <div class="single-column">
                                                    <h4>Age</h4>
                                                    <ul class="list clearfix">
                                                        <li><a href="single-shop-1.html">0 - 12 Months (9)</a></li>
                                                        <li><a href="single-shop-1.html">01 - 04 Years (5)</a></li>
                                                        <li><a href="single-shop-1.html">05 - 08 Years (6)</a></li>
                                                        <li><a href="single-shop-1.html">09 - 12 Years (10)</a></li>
                                                        <li><a href="single-shop-1.html">13 - 14 Years (7)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 column">
                                                <div class="single-column">
                                                    <h4>Size</h4>
                                                    <ul class="list clearfix">
                                                        <li><a href="single-shop-1.html">XXL (6)</a></li>
                                                        <li><a href="single-shop-1.html">XL (9)</a></li>
                                                        <li><a href="single-shop-1.html">S (2)</a></li>
                                                        <li><a href="single-shop-1.html">M (5)</a></li>
                                                        <li><a href="single-shop-1.html">L (3)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 column">
                                                <div class="single-column">
                                                    <h4>Color</h4>
                                                    <ul class="color-list clearfix">
                                                        <li><span class="black"></span><a href="single-shop-1.html">Black (3)</a></li>
                                                        <li><span class="blue"></span><a href="single-shop-1.html">Blue (6)</a></li>
                                                        <li><span class="orange"></span><a href="single-shop-1.html">Orange (9)</a></li>
                                                        <li><span class="green"></span><a href="single-shop-1.html">Green (5)</a></li>
                                                        <li><span class="purple"></span><a href="single-shop-1.html">Purple (3)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-filters">
                                        <h4 class="sidebar-title">Price Range</h4>
                                        <div class="range-slider clearfix">
                                            <div class="price-range-slider"></div>
                                            <div class="clearfix">
                                                <p>Range:</p>
                                                <div class="title"></div>
                                                <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text"><p>Showing 1–12 of 50 Results</p></div>
                        <div class="short-box clearfix">
                            <p>Short by</p>
                            <div class="select-box">
                                <select class="wide">
                                   <option data-display="9">9</option>
                                   <option value="1">5</option>
                                   <option value="2">7</option>
                                   <option value="4">15</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <div class="short-box clearfix">
                            <p>Short by</p>
                            <div class="select-box">
                                <select class="wide">
                                   <option data-display="Popularity">Popularity</option>
                                   <option value="1">New Collection</option>
                                   <option value="2">Top Sell</option>
                                   <option value="4">Top Ratted</option>
                                </select>
                            </div>
                        </div>
                        <div class="menu-box">
                            <a href="shop.html"><i class="flaticon-menu"></i></a>
                            <a href="shop.html"><i class="flaticon-list"></i></a>
                        </div>
                    </div>
                </div>
                <div class="our-shop">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img style="width: 300px; height: 300px" src="/images/product-2.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="/product">Mua Ngay</a></li>
                                            <li><a href="/images/product-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/product">Quả Thơm</a>
                                        <span class="price">17.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img style="width: 300px; height: 300px" src="/images/product-8.jpg" alt="">
                                        <span class="category green-bg">New</span>
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="/product">Mua Ngay</a></li>
                                            <li><a href="/images/product-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/product">Quả Chuối</a>
                                        <span class="price">22.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img style="width: 300px; height: 300px" src="/images/thitbo.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="/product">Mua Ngay</a></li>
                                            <li><a href="/images/thitbo.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/product">Thịt Bò</a>
                                        <span class="price">56.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img style="width: 300px; height: 300px" src="/images/camu.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="/product">Mua Ngay</a></li>
                                            <li><a href="/images/camu.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/product">Cá Mú</a>
                                        <span class="price">699.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img style="width: 300px; height: 300px" src="/images/thitheo.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="/product">Mua Ngay</a></li>
                                            <li><a href="/images/thitheo.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/product">Thị Heo</a>
                                        <span class="price">45.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img style="width: 300px; height: 300px" src="/images/product-4.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="/product">Mua Ngay</a></li>
                                            <li><a href="/assets_client/assets/images/resource/shop/shop-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/product">Dâu Tây</a>
                                        <span class="price">22.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img style="width: 300px; height: 300px" src="/images/product-3.jpg" alt="">
                                        <span class="category red-bg">Hot</span>
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="/product">Mua Ngay</a></li>
                                            <li><a href="/assets_client/assets/images/resource/shop/shop-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/product">Quả Ớt</a>
                                        <span class="price">6.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img style="width: 300px; height: 300px" src="/images/product-6.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="/product">Mua Ngay</a></li>
                                            <li><a href="/assets_client/assets/images/resource/shop/shop-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/product">Cà Chua</a>
                                        <span class="price">15.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img style="width: 300px; height: 300px" src="/images/product-5.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="/product">Mua Ngay</a></li>
                                            <li><a href="/assets_client/assets/images/resource/shop/shop-33.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/product">Dưa Chuột</a>
                                        <span class="price">8.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img style="width: 300px; height: 300px" src="/images/cachep.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="/product">Mua Ngay</a></li>
                                            <li><a href="/assets_client/assets/images/resource/shop/shop-34.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/product">Cá Chép</a>
                                        <span class="price">50.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img style="width: 300px; height: 300px" src="/images/raucai.jpg" alt="">
                                        <span class="category red-bg">Hot</span>
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="/product">Mua Ngay</a></li>
                                            <li><a href="/assets_client/assets/images/resource/shop/shop-35.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/product">Rau Cải</a>
                                        <span class="price">21.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img style="width: 300px; height: 300px" src="/images/raumuong.jpg" alt="">
                                        <ul class="info-list clearfix">
                                            <li><a href="index.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="/product">Mua Ngay</a></li>
                                            <li><a href="/assets_client/assets/images/resource/shop/shop-36.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-search"></i></a></li>
                                        </ul>
                                    </figure>
                                    <div class="lower-content">
                                        <a href="/product">Rau Muống</a>
                                        <span class="price">12.000 VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-wrapper centred">
                    <ul class="pagination clearfix">
                        <li><a href="shop.html">Prev</a></li>
                        <li><a href="shop.html">1</a></li>
                        <li><a href="shop.html" class="active">2</a></li>
                        <li><a href="shop.html">3</a></li>
                        <li><a href="shop.html">4</a></li>
                        <li><a href="shop.html">5</a></li>
                        <li><a href="shop.html">Next</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- shop-page-section end -->


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

    <!-- main-js -->
    <script src="/assets_client/assets/js/script.js"></script>
</body><!-- End of .page_wrapper -->
</html>
