@extends('dashboard.layout.master')

@section('title', 'Trang cá nhân')

@section('body')

  <body id="reportsPage">
    <div class="" id="home">
      <div class="container mt-5">
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <h2 class="tm-block-title">Thông tin tài khoản</h2>
              <!-- <p class="text-white">Phân quyền</p>
              <select class="custom-select">
                <option value="0">Select account</option>
                <option value="1">Admin</option>
                <option value="2">Editor</option>
                <option value="3">Merchant</option>
                <option value="4">Customer</option> 
              </select> -->

              <!-- <h2 class="tm-block-title">Account Settings</h2> -->
              <div class="form-group">
                  <label for="email">Account Email</label>
                  <input
                    id="email"
                    name="email"
                    type="email"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group">
                     <label for="">Loại tài khoản</label>
                     <div>
                        <label for="">
                          <input type="radio" name="featured" value="1" checked>
                          Admin
                        </label>
                        <label for="">
                          <input type="radio" name="featured" value="2" >
                          Quản lí 
                        </label>
                        <label for="">
                          <input type="radio" name="featured" value="3" >
                          Giao hàng
                        </label>
                     </div>
                  </div>
              <form action="" class="tm-signup-form row">
                <div class="form-group col-lg-6">
                  <label for="name">Account Name</label>
                  <input
                    id="name"
                    name="name"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                
                <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="phone">Phone</label>
                  <input
                    id="phone"
                    name="phone"
                    type="tel"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-12">
                  <label class="tm-hide-sm">&nbsp;</label>
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Cập nhật thông tin
                  </button>
                </div>
                <div class="col-12">
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Xóa tài khoản này
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      @endsection