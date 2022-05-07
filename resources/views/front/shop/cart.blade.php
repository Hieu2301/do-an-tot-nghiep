@extends('front.layout.master')

@section('title', 'Giỏ hàng')

@section('body')

        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <a href="./"><i class="fa fa-home"> Trang Chủ</i></a>
                            <span>Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product in cart  -->
        <div class="shopping-cart spad">
            <div class="container">
                <div class="row">
                    @if(Cart::count()>0)
                    <div class="col-lg-12">
                        <div class="cart-table">
                            <table>
                                <thead>
                                    <tr>
                                        <!-- <th>Ảnh</th> -->
                                        <th class="p-name">Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>số lượng</th>
                                        <th>Tổng: </th>
                                        <th><i onclick="window.location = './cart/destroy'" class="ti-close" style="cursor: pointer"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($carts as $cart)
                                    <tr>
                                        <!-- <td class="cart-pic first-row"><img src="front/img/products/{{$cart->image}}"></td> -->

                                        <td class="cart-title first-row">
                                            <h5>{{$cart->name}}</h5>
                                        </td>
                                        <td class="p-price first-row">{{number_format($cart->price, 0)}} VND</td>
                                        <td class="qua-col first-row">
                                            <div class="quatity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{$cart->qty}}" data-rowid="{{$cart->rowId}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-price first-row">{{number_format($cart->price * $cart->qty, )}} VND</td>
                                        <td class="close-td"><i onclick="window.location='./cart/delete/{{$cart->rowId}}'" class="ti-close"></i></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                               <div class="cart-buttons">
                                    <a href="index.html" class="primary-btn continue-shop">Tiếp tục mua hàng</a>
                                    <a href="" class="primary-btn up-cart">Cập nhật</a>
                               </div>
                            </div>
                            <div class="col-lg-4 offset-lg-4">
                                <div class="proceed-checkout">
                                    <ul>
                                        <!-- <li class="subtotal">toongr <span>124123</span></li> -->
                                        <li class="cart-total">Tổng: <span>{{$total}} VND</span></li>
                                    </ul>
                                    <a href="./checkout" class="proceed-btn">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-12">
                        <h4>Giỏ hàng đang trống</h4>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        @endsection
