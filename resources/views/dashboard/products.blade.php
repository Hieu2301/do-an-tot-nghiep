@extends('dashboard.layout.master')

@section('title', 'Trang sản phẩm')

@section('body')

  <body id="reportsPage">
    
    <div class="container mt-5">
      <div class="row tm-content-row">
     
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Hãng sản xuất</h2>
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                <tr>
                    <!-- <th scope="col">&nbsp;</th> -->
                    <th scope="col">Tên Hãng</th>
                    <!-- <th scope="col">Chức năng</th> -->
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
              <table class="table tm-table-small tm-product-table">
              @foreach($show_brands as $show_brand)
                <tbody>
                  <tr>
                  
                    <td class="tm-product-name">{{$show_brand->name}}</td>
                    <td class="text-center">
                      <a href="./delete/{{$show_brand->id}}" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                   
                  </tr>
              
               
                </tbody>
                @endforeach
              </table>
            </div>
            <!-- table container -->
            <!-- <button class="btn btn-primary btn-block text-uppercase mb-3">
              Thêm loại sản phẩm mới
            </button> -->
            <a
              href="./add-brand"
              class="btn btn-primary btn-block text-uppercase mb-3">Thêm hãng sản xuất </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Loại sản phẩm</h2>
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <!-- <th scope="col">&nbsp;</th> -->
                    <th scope="col">Tên loại sản phẩm</th>
                    <!-- <th scope="col">Chức năng</th> -->
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
              <table class="table tm-table-small tm-product-table">
              @foreach($pro_categories as $pro_category)
                <tbody>
                  <tr>
                  
                    <td class="tm-product-name"><a >{{$pro_category->name}}</a></td>
                    <td class="text-center">
                        <a href="./delete/{{$pro_category->id}}" class="tm-product-delete-link">
                          <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                      <a href="/edit-category/{{$pro_category->id}}" class="tm-product-delete-link">
                      <i class="far fa-thumbs-up tm-product-delete-icon"></i>
                      </a>
                    </td>
                   
                  </tr>
              
               
                </tbody>
                @endforeach
              </table>
            </div>
            <!-- table container -->
            <!-- <button class="btn btn-primary btn-block text-uppercase mb-3">
              Thêm loại sản phẩm mới
            </button> -->
            <a
              href="./add-category"
              class="btn btn-primary btn-block text-uppercase mb-3">Thêm loại sản phẩm mới</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <!-- <th scope="col">&nbsp;</th> -->
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá bán</th>
                    <th scope="col">Số lượng</th> 
                    <th scope="col">Ngày tạo</th> 
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                @foreach($show_products as $show_product)
                <tbody>
                  <tr>
              
                    <!-- <th scope="row"><input type="checkbox"/></th> -->
                    <td><img style="height: 70px" src="front/img/products/{{$show_product->image}}"></td>
                    <td class="tm-product-name"><a >{{$show_product->name}}</a></td>
                    <td>{{$show_product->price}}</td>
                   
                    <td>{{$show_product->qty}}</td>
                    <td>{{$show_product->created_at}}</td>
                    <td>
                    <a href="./delete/{{$show_product->id}}" class="tm-product-delete-link">
                          <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                      <a href="/edit-product/{{$show_product->id}}" class="tm-product-delete-link">
                      <i class="far fa-thumbs-up tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
               @endforeach
              </table>
            </div>
            <!-- table container -->
            <a
              href="./add-product"
              class="btn btn-primary btn-block text-uppercase mb-3">Thêm sản phẩm mới</a>
          </div>
      
        </div>
        
      </div>
    </div>
    @endsection