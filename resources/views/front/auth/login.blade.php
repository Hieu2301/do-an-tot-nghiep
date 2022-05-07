@extends('front.layout.master')

@section('title', 'Đăng nhập')

@section('body')

        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <a href="index.php"><i class="fa fa-home"> Trang Chủ</i></a>
                            <span>Đăng nhập</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Đăng nhập -->

        <div class="register-login-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="login-form">
                            <h2>Đăng nhập</h2>
                            @include('front.auth.alert')
                            <form action="/front/auth/login/store" method="post">
                           
                                <!-- <form> -->
                                
                                <!-- <div class="group-input">
                                    <label for="username">Nhập tên tài khoản</label>
                                    <input type="text" name="name" id="username">
                                </div> -->
                                <div class="group-input">
                                    <label for="email">Nhập Email</label>
                                    <input type="text" name="email" id="username">
                                </div>
                                <div class="group-input">
                                    <label for="pass">Mật khẩu</label>
                                    <input type="text" id="pass" name="password">
                                </div>
                                <div class="group-input gi-check">
                                    <div class="gi-more">
                                        <label for="save-pass">Lưu mật khẩu
                                            <input type="checkbox" name="remember" id="save-pass">
                                            <span class="checkmark"></span>
                                        </label>
                                        <a href="" class="forget-pass">Quên mật khẩu</a>
                                    </div>
                                </div>
                                <button type="submit" class="site-btn login-btn">Đăng nhập</button>
                                @csrf
                            </form>
                            <div class="switch-login">
                                <a href="./register" class="or-login">Tạo tài khoản mới</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection
