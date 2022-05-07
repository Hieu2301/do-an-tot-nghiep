@extends('front.layout.master')

@section('title', 'Trang chủ')

@section('body')

        <!-- slide chính -->
        <section class="hero-section">
            <div class="hero-items owl-carousel">
                <div class="single-hero-items set-bg" data-setbg="front/img/hero-1.jpg">
                    <!-- <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <span>Nhông sên</span>
                                <p>fullasfashfjasflkasjfklasj</p>
                                <a href="" class="primary-btn">Mua ngay</a>
                            </div>
                        </div>
                        <div class="off-card">
                            <h2>Bán chạy<span>90K</span></h2>
                        </div>
                    </div> -->
                </div>
                <div class="single-hero-items set-bg" data-setbg="front/img/hero-2.jpg">
                    <!-- <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <span>Nhông sên</span>
                                <p>fullasfashfjasflkasjfklasj</p>
                                <a href="" class="primary-btn">Mua ngay</a>
                            </div>
                        </div>
                        <div class="off-card">
                            <h2>Sale<span>50%</span></h2>
                        </div>
                    </div> -->
                </div>

            </div>
        </section>

        <!-- <div class="box-area">
            <div class="row">
                <div class="col-lg-3">
                    <div class="box">
                        <img src="front/img/box1.jpg" >
                        <h3>Lốp xe cứng cáp</h3>
                        <a>Đi nào! <i class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box">
                        <img src="front/img/box2.jpg" >
                        <h3>Sự hỗ trợ từ nhớt</h3>
                        <a>100% nào! <i class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box">
                        <img src="front/img/box3.jpg" >
                        <h3>Nhông sên</h3>
                        <a>Biến hình <i class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box">
                        <img src="front/img/box4.jpg" >
                        <h3>Power từ Ắc quy</h3>
                        <a>Nạp tối đa! <i class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- 3 area quảng cáo sp -->
        <div class="banner-section spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-banner">
                            <img src="front/img/banner-1.jpg">
                            <div class="inner-text">
                                <h4>Maxxis</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-banner">
                            <img src="front/img/banner-2.jpg">
                            <div class="inner-text">
                                <h4>Castrol</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-banner">
                            <img src="front/img/banner-3.jpg">
                            <div class="inner-text">
                                <h4>Cantex</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="sp-banner spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product-large set-bg" data-setbg="front/img/products/nhong-sen.jpg">
                            <h2>Nhông sên</h2>
                            <!-- <a href="">Xem thêm</a> -->
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1">
                        <div class="filter-control">
                            <!-- <ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                            </ul> -->
                        </div>
                        <div class="product-slider owl-carousel">
                            @foreach($nhongsenProducts as $nhongsenProduct)
                                @include('front.components.product-item',$nhongsenProduct, ['product' => $nhongsenProduct])
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
            </div>
        </section>

        <section class="man-banner spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="filter-control">
                            <!-- <ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                            </ul> -->
                        </div>
                        <div class="product-slider owl-carousel">
                            @foreach($daunhotProducts as $daunhotProduct)
                                @include('front.components.product-item',$daunhotProduct, ['product' => $daunhotProduct])
                            @endforeach

                        </div>

                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="product-large set-bg" data-setbg="front/img/products/dau-nhot.jpg">
                            <h2>Dầu nhớt </h2>
                            <!-- <a href="">Xem thêm</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sp-banner spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product-large set-bg" data-setbg="front/img/products/lop-xe.jpg">
                            <h2>Lốp xe</h2>
                            <!-- <a href="">Xem thêm</a> -->
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1">
                        <div class="filter-control">
                            <!-- <ul>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                            </ul> -->
                        </div>
                        <div class="product-slider owl-carousel">
                            @foreach($lopxeProducts as $lopxeProduct)
                                @include('front.components.product-item',$lopxeProduct, ['product' => $lopxeProduct])
                            @endforeach

                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- video quảng cáo -->
        <section class="latest-blog spad">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Giới thiệu</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 ">
                        <div class="single-latest-blog">
                            <iframe width="365" height="225" src="https://www.youtube.com/embed/Dl7k9OFIR3A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-latest-blog">
                            <iframe width="365" height="225" src="https://www.youtube.com/embed/JwtlK2icIRg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div> -->
                <div class="benefit-items">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-benefit">
                                <div class="sb-icon">
                                    <img src="front/img/icon-1.png" alt="">
                                </div>
                                <div class="sb-text">
                                    <h6>Miễn phí ship</h6>
                                    <p>Đối với hóa đơn trên 200k</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-benefit">
                                <div class="sb-icon">
                                    <img src="front/img/icon-2.png" alt="">
                                </div>
                                <div class="sb-text">
                                    <h6>Thời gian</h6>
                                    <p>Làm việc từ 6:00 - 19:00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-benefit">
                                <div class="sb-icon">
                                    <img src="front/img/icon-3.png" alt="">
                                </div>
                                <div class="sb-text">
                                    <h6>Thanh toán</h6>
                                    <p>Nhận thanh toán với VNPAY</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @endsection
