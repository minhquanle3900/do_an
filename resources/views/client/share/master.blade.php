<!DOCTYPE html>
<html lang="en">
<head>

    @include('client.share.css')

</head>

<body>

    <div class="boxed_wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

        @include('client.share.search')

        @include('client.share.header')

        @yield('noi_dung')

        <section class="service-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-truck"></i></div>
                                    <h3><a href="index.html">Miễn Phí Vận Chuyển</a></h3>
                                    <p>Miễn phí vận chuyển cho đơn hàng trên 500.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-credit-card"></i></div>
                                    <h3><a href="index.html">Thanh toán an toàn</a></h3>
                                    <p>Chúng tôi đảm bảo thanh toán an toàn với CDIO3</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-24-7"></i></div>
                                    <h3><a href="index.html">Hỗ Trợ 24/7</a></h3>
                                    <p>Liên hệ với chúng tôi 24 giờ một ngày, 7 ngày trên tuần</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-undo"></i></div>
                                    <h3><a href="index.html">7 Ngày Hoàn Trả</a></h3>
                                    <p>Đơn giản chỉ cần trả lại nó trong vòng 7 ngày để trao đổi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="sec-title mt-5">
            <h2>Theo Dõi Thêm Tại Fanpage</h2>
            <p>Xin chân thành cảm ơn các bạn đã sử dụng page!</p>
        </div>

        @include('client.share.footer')

        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-long-arrow-alt-up"></i>
        </button>
    </div>

    @include('client.share.js')
    @yield('js')

</body>
</html>
