@extends('front.layout.master')

@section('title', 'Sản phẩm')

@section('body')

<!-- đường dẫn -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.php"><i class="fa fa-home"> Trang Chủ</i></a>
                    <span>Sản phẩm</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <!-- <form action=""> -->
                <div class="filter-widget">
                    <h4 class="fw-title">Sản phẩm liên quan</h4>
                    @foreach($categories as $category)
                        <ul class="filter-catagories">
                            <li><a href="shop/{{$category->name}}">{{$category->name}}</a></li>
                        </ul>
                    @endforeach
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
                    <h4 class="fw-title">Giá (Đơn vị nghìn đồng)</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" name="price_min" id="minamount" >
                                <input type="text" name="price_max" id="maxamount" >
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="999" data-min-value="{{str_replace('$','', request('price_min'))}}" data-max-value="{{str_replace('$','', request('price_max'))}}">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div></div>
                    </div>
                    <button type="submit" class="filter-btn">Xác nhận</button>
                </div>

            </div>
            <!-- show product -->
            <div class="col-lg-9 order-1 order-lg-2 ">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <form action="">
                                <div class="select-option">
                                    <select name="sort_by" class="sorting" onchange="this.form.submit();">
                                        <option {{ request('sort_by') == 'lastest' ? 'selected' : '' }} value="lastest">Mới nhất</option>
                                        <option {{ request('sort_by') == 'oldest' ? 'selected' : '' }} value="oldest">Cũ nhất</option>
                                        <option {{ request('sort_by') == 'nameaz' ? 'selected' : '' }} value="nameaz">Từ A - Z</option>
                                        <option {{ request('sort_by') == 'nameza' ? 'selected' : '' }} value="nameza">Từ Z - A</option>
                                        <option {{ request('sort_by') == 'pricelow' ? 'selected' : '' }} value="pricelow">Giá cao đến thấp</option>
                                        <option {{ request('sort_by') == 'pricehigh' ? 'selected' : '' }} value="pricehigh">Giá thấp đến cao</option>
                                    </select>
                                    <select name="show" class="p-show" onchange="this.form.submit();">
                                        <option {{ request('show') == '6' ? 'selected' : '' }} value="6">Hiển thị: 6 sản phẩm</option>
                                        <option {{ request('show') == '9' ? 'selected' : '' }} value="9">Hiển thị: 9 sản phẩm</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-sm-6">
                                @include('front.components.product-item')
                            </div>
                        @endforeach
                    </div>
                </div>
                {{$products->links()}}
            </div>
        </div>
    </div>
</section>
@endsection
