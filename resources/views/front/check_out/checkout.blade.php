@extends('front.layout.master')

@section('title', 'Đơn hàng')

@section('body')

        <!-- <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <a href="index.html"><i class="fa fa-home"> Trang Chủ</i></a>
                            <span>Thanh Toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="checkout-section spad">
            <div class="container">
                <form action="" method="post" class="checkout-form">
                    @csrf
                    <div class="row">
                        @if(Cart::count()>0)
                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <a href="./login" class="content-btn">Trở về đăng nhập</a>
                            </div>
                            <h4>Thông tin đơn hàng</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="fir">Họ và tên <span>*</span></label>
                                    <input type="text" name="full_name" id="fir">
                                </div>
                                <div class="col-lg-12">
                                    <label for="town">Tỉnh/ Thành phố <span>*</span></label>
                                    <input type="text" name="city" id="town">
                                </div>
                                <div class="col-lg-12">
                                    <label for="town">Huyện/ Thị trấn<span>*</span></label>
                                    <input type="text" name="district" id="country">
                                </div>
                                <div class="col-lg-12">
                                    <label for="street">Địa chỉ cụ thể <span>*</span></label>
                                    <input type="text" name="street_address" id="street">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="text" name="email" id="email">
                                </div>
                                <div class="col-lg-6">
                                    <label for="phone">Số điện thoại <span>*</span></label>
                                    <input type="text" name="phone" id="phone">
                                </div>
                                <div class="col-lg-12">
                                    <label for="zip">Mã bưu điện <span>*</span></label>
                                    <input type="text" name="zip" id="zip">
                                </div>
                                <!-- <div class="col-lg-12">
                                    <div class="create-item">
                                        <label for="acc-create">
                                            Tạo tài khoản mới!
                                            <input type="checkbox" id="acc-create">
                                            <span type="checkmark"> </span>
                                        </label>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <a href="./register" class="content-btn">Tạo tài khoản mới</a>
                            </div>
                            <div class="place-order">
                                <h4>Đơn hàng của bạn</h4>
                                <div class="order-total">
                                    <ul class="order-table">
                                        <li>Sản phẩm <span>Tổng</span></li>
                                        @foreach($carts as $cart)
                                            <li class="fw-normal">{{$cart->name}} x {{$cart->qty}}<span>{{$cart->price * $cart->qty}} VND</span></li>
                                        @endforeach
                                        <li class="total-price">Tổng <span>{{$total}} VND</span></li>
                                    </ul>
                                    <div class="payment-check">
                                        <div class="pc-item">
                                            <label for="pc-check">
                                                Thanh toán trực tiếp
                                                <input type="radio" name="payment_type" id="pc-check" value="pay_later" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="pc-item">
                                            <label for="pc-paypal">
                                                Thanh toán qua vnpay
                                                <input type="radio" name="payment_type" id="pc-paypal" value="online_payment">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="order-btn">
                                        <button type="submit" class="site-btn place-order">Thanh toán</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                            <div class="col-lg-12">
                                <h4>Giở hàng đang trống</h4>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        @endsection
