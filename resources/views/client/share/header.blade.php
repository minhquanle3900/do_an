{{-- @php
    $khach_hang = Auth::guard('resgiter')->user()->id;
    $so_luong = DB::table('gio_hangs')->where('id_khach_hang', $khach_hang)->sum('so_luong');
@endphp --}}

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
                                <li><a href="/">Home</a></li>
                                <li class="dropdown"><a href="index.html">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="service.html">Our Service</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="error.html">404</a></li>
                                    </ul>
                                </li>
                                {{-- Chuyên mục --}}
                                <li class="current dropdown"><a href="/admin/chuyen-muc"target="_blank">Shop <span>Hot</span></a>
                                    <div class="megamenu">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 column">
                                                <ul>
                                                    <h4>Chuyên Mục Sản Phẩm</h4>
                                                    @foreach ($chuyenMuc as $key => $value)
                                                    @if ( $value->tinh_trang ==1)
                                                    <li>
                                                    <a href="/admin/chuyen-muc/{{$value->id}}">{{ $value->ten_chuyen_muc }}</a>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 column">
                                                <ul>
                                                    <li><h4>Danh Mục Sản Phẩm</h4></li>
                                                    @foreach ($danhMuc as $key_1 => $value_1 )
                                                    @if ( $value_1->tinh_trang == 1)
                                                    <li><a href="/admin/danh-muc">{{ $value_1->ten_danh_muc}}</a></li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 column">
                                                <ul>
                                                    <li><h4>Sản Phẩm</h4></li>
                                                    @foreach ($sanPham as $key_2 => $value_2)
                                                    @if ($value_2->tinh_trang==1)
                                                    <li><a href="/admin/san_pham">{{$value_2->ten_san_pham}}</a></li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="index.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Câu chuyện Nông Sản</a></li>
                                        <li><a href="blog-2.html">Sâu trong lòng đất</a></li>
                                        <li><a href="blog-3.html">Sức khỏe "Vàng"</a></li>
                                        {{-- <li><a href="blog-details.html">"Bò Kobe Nhật"</a></li>
                                        <li><a href="blog-details-2.html">"Ớt chuông muôn màu"</a></li> --}}
                                    </ul>
                                </li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <ul class="menu-right-content clearfix">
                    <li>
                        <div class="search-btn">
                            <button type="button" class="search-toggler"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </li>
                    <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                    <li><a target="_blank" href="/client/resgiter"><i class="fa-solid fa-user"></i></a></li>
                    <li class="shop-cart">
                        {{-- <a  href="/client/thanh-toan"><i class="fa-solid fa-cart-shopping"></i><span>{{ $so_luong }}</span></a> --}}
                    </li>
                    <li><a target="_blank" href="/client/logout"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

</header>
