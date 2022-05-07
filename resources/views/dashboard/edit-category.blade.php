@extends('dashboard.layout.master')

@section('title', 'Trang thêm loại sản phẩm')

@section('body')
  <body>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Thêm loại sản phẩm</h2>
              </div>
            </div>
            
            <form action="" class="tm-edit-product-form" method="POST">

            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12">
               
                  <div class="form-group mb-3">
                    <label
                      for="name" 
                      >Tên loại sản phẩm
                    </label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      class="form-control validate"
                      value="{{$products['name']}}"
                    />
                  </div>
                </div>
            </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Xác nhận</button>
              </div>
              @csrf
            </form>
         
            </div>
          </div>
        </div>
      </div>
  </body>
    @endsection