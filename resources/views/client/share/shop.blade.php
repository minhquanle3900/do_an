<section class="shop-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Gian Hàng</h2>
            <p>Có một số sản phẩm mà chúng tôi đặc trưng để cho lựa chọn tốt nhất của bạn!</p>
            <span class="separator"
                style="background-image: url(/assets_client/assets/images/icons/separator-1.png);"></span>
        </div>
        <div class="sortable-masonry">
            <div class="filters">
                {{-- <ul class="filter-tabs filter-btns centred clearfix">
                    <li class="active filter" data-role="button" data-filter=".best_seller">Bán Chạy</li>
                    <li class="filter" data-role="button" data-filter=".new_arraivals">Mới</li>
                    <li class="filter" data-role="button" data-filter=".top_rate">Doanh Thu Cao Nhất</li>
                </ul> --}}
            </div>
            <div class="items-container row clearfix">
                @foreach ($sanPham as $key => $value)
                    <div
                        class="col-lg-3 col-md-6 col-sm-12 shop-block masonry-item small-column best_seller new_arraivals top_rate">
                        <div class="shop-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img style="height: 300px" style="width: 100px"
                                        src="/hinh-san-pham/{{ $value->hinh_anh }}" alt="">

                                    <ul class="info-list clearfix">
                                        <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="/product/{{$value->id}}">Chi Tiết</a></li>
                                        <li><a onclick="addToCart({{$value->id}})"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <a href="product-details.html">{{ $value->ten_san_pham }}</a>
                                    <span class="price">{{ number_format($value->gia_ban) }}&nbsp;VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="more-btn centred"><a target="_blank" href="/all-shop" class="theme-btn-one">Xem Toàn Bộ Cửa
                    Hàng<i class="flaticon-right-1"></i></a></div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js" integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function addToCart($id) {
        var paramObj = {
            'id_san_pham' : $id,
        };
        axios
            .post('/client/gio-hang/add-to-cart', paramObj)
            .then((res) => {

            })
            .catch((res) => {
                $.each(res.response.data.errors, function(k, v) {
                    toastr.error(v[0]);
                });
            });

        axios
            .post('/client/gio-hang/update-cart')
    }
    function number_format(number) {
        return new Intl.NumberFormat('vi-VI', {
            style: 'currency',
            currency: 'VND'
        }).format(number);
    };
</script>
