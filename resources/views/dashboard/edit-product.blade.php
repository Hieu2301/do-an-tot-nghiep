@extends('dashboard.layout.master')

@section('title', 'Trang sản phẩm')

@section('body')

  </head>

  <body>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Thêm sản phẩm</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
            <form action="" class="tm-edit-product-form" method="POST">
           
                  <div class="form-group mb-3">
                    <label
                      for="name" name="name"
                      >Tên sản phẩm
                    </label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      class="form-control validate"
                      value="{{$datas->name}}"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Mô tả</label
                    >
                    <textarea
                      name="description"
                      class="form-control validate"
                      rows="3"
                      value="{{$datas->description}}"  
                    ></textarea>
                  </div>
                  
                  <div class="form-group mb-3">
                    <label
                      for="brand">Hãng sản xuất</label>
                    <select
                      class="custom-select tm-select-accounts"
                      id="brand" name="brand_id" >
                      <option selected>Chọn hãng</option>
                      @foreach($bras as $bra)
                      <option value="{{$bra->id}}" {{$datas->brand_id == $bra->id ? 'selected': ''}} name="brand_id">{{$bra->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  
                  <div class="form-group mb-3">
                    <label
                      for="category">Loại sản phẩm</label>
                    <select
                      class="custom-select tm-select-accounts"
                      id="category" name="product_category_id">
                      <option selected>Chọn loại sản phẩm</option>
                      @foreach($cats as $cat)
                      <option value="{{$cat->id}}" {{$datas->product_category_id == $cat->id ? 'selected': ''}} name="product_categoty_id">{{$cat->name}}</option>
                      @endforeach
                    </select>
                  </div>
              </div>
              
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <br>
                <div class=" mx-auto" name="file_upload">
                 
                </div>
                <div class="custom-file mt-3 mb-3">
                  
                  <input type="file" name="file_upload" class="form-control" id="upload" >
                  <input type="hidden" name="image" value="{{$datas->image}}">
                </div>
                <br><br><br>
                <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                          for="qty" name="qty"
                            >Số lượng
                          </label>
                          <input
                            id="qty"
                            name="qty"
                            type="text"
                            class="form-control validate"
                            value="{{$datas->qty}}"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label
                          for="price" name="price"
                            >Giá
                          </label>
                          <input
                            id="price"
                            name="price"
                            type="text"
                            class="form-control validate"
                            value="{{$datas->price}}"
                          />
                        </div>
                  </div>
                  <div class="form-group">
                     <label for="">Trạng thái</label>
                     <div>
                        <label for="">
                          <input type="radio" name="featured" value="1" {{$datas->featured == 1 ? 'checked=""' : ''}}>
                          Hiện
                        </label>
                        <label for="">
                          <input type="radio" name="featured" value="0"  {{$datas->featured == 0 ? 'checked=""' : ''}}>
                          Ẩn
                        </label>
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
    </div>
    @endsection