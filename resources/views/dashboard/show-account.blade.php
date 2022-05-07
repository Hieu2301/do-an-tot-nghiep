@extends('dashboard.layout.master')

@section('title', 'Trang tài khoản')

@section('body')

  <body id="reportsPage">
    
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <!-- <th scope="col">&nbsp;</th> -->
                    <th scope="col">Tên tài khoản</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cấp độ</th>
                    <th scope="col">Chức năng</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                @foreach($show_users as $show_user)
                <tbody>
                  <tr>
                    <!-- <th scope="row"><input type="checkbox"/></th> -->
                    <td class="tm-product-name"><a  >{{$show_user->name}}</a></td>
                    <td>{{$show_user->email}}</td>
                    <td>{{$show_user->level}}</td>
                    <!-- <td>28 March 2019</td> -->
                    <td>
                      <a href="./delete/{{$show_user->id}}" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                      <a href="show_account/account/{{$show_user->id}}" class="tm-product-delete-link">
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
              href="./accounts"
              class="btn btn-primary btn-block text-uppercase mb-3">Thêm tài khoản</a>
 
          </div>
        </div>
        
      </div>
    </div>
    @endsection