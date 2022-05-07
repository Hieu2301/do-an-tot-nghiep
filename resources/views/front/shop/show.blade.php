@extends('front.layout.master')

@section('title', 'Chi tiết sản phẩm')

@section('body')
    <!-- đường dẫn -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <a href="index.blade.php"><i class="fa fa-home"> Trang Chủ</i></a>
                            <a href="shop.php">Sản phẩm</a>
                            <span>Chi tiết sản phẩm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="product-shop spad page-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                        <form action="">
                        <div class="filter-widget">
                            <h4 class="fw-title">Sản phẩm liên quan</h4>
                            <ul class="filter-catagories">
                                    <li><a href="">Ruột xe</a></li>
                                    <li><a href="">Nhớt</a></li>
                                    <li><a href="">Nhông sên</a></li>
                            </ul>
                        </div>
                        <div class="filter-widget">
                            <h4 class="fw-title">Thương hiệu</h4>
                            <div class="fw-brand-check">
                                                <div class="bc-item">
                                        <label for="bc-1">
                                            Castrol
                                            <input type="checkbox" name="brand[1]" id="bc-1" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                                <div class="bc-item">
                                        <label for="bc-2">
                                            Maxxis
                                            <input type="checkbox" name="brand[2]" id="bc-2">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                                <div class="bc-item">
                                        <label for="bc-3">
                                            Cantex
                                            <input type="checkbox" name="brand[3]" id="bc-3">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                                <div class="bc-item">
                                        <label for="bc-4">
                                            Chengshin
                                            <input type="checkbox" name="brand[4]" id="bc-4">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                        </div>
                        </div>
                        <div class="filter-widget">
                            <h4 class="fw-title">Price</h4>
                            <div class="filter-range-wrap">
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" name="price_min" id="minamount">
                                        <input type="text" name="price_max" id="maxamount">
                                    </div>
                                </div>
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="999" data-min-value="" data-max-value="">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div></div>
                            </div>
                            <button type="submit" class="filter-btn">Filter</button>
                        </div>

                    </div>
                    <!-- show product -->
                    <div class="col-lg-9 order-1 order-lg-2 ">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="product-pic-zoom">
                                    <img class="product-big-img" src="front/img/products/{{$products->image}}" alt="">
                                    <div class="zoom-icon">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </div>
                               <div class="product-thumbs">
                                    <div class="product-thumbs-track ps-slider owl-carousel">
                                     @foreach($products as $product)
                                        <div class="pt active" data-imgbigurl="front/img/products/{{$products->image}}">
                                        <img src="front/img/products/{{$products->image}}" alt="">
                                    </div>
                                        @endforeach
                              </div>
                          </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-details">
                                    <div class="pd-title">
                                        <h3>{{$products->name}}</h3>
                                    </div>
                                    <div class="pd-desc">
                                        <h4>Giá: {{number_format($products->price)}} VND</h4>
                                    </div>
                                       <div class="quantity">
                                            <!-- <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div> -->
                                            <a href="./cart/add/{{$products->id}}" class="primary-btn pd-cart">Thêm</a>
                                       </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab">
                            <div class="tab-item">
                                <ul class="nav" role="tablist">
                                    <li><a class="active" href="" data-toggle="tab" role="tab">Mô tả</a></li>
                                </ul>

                            </div>

                            <div class="tab-item-content">
                                <div class="tab-pane fade" id="tab-1" role="tabpanel"></div>
                                    <div class="product-content">
                                        <div class="row">
                                            <div col-lg-12>
                                                <h5>Thông tin</h5>
                                                <p>{{$products->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
