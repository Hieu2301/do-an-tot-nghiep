<div class="product-item">
    <div class="pi-pic">
        <img style="height: 360px" src="front/img/products/{{$product->image}}" >
        <div class="sale">Sale</div>
        <div class="icon">
            <i class="icon_heart_alt"></i>
        </div>
        <ul>
            <li class="w-icon active"><a href="./cart/add/{{$product->id}}"><i class="icon_bag_alt"></i></a></li>
            <li class="quick-view"><a href="shop/product/{{$product->id}}">Xem nhanh</a></li>
            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
        </ul>
    </div>
    <div class="pi-text">
        <div>
{{--            <div class="category-name">{{$product->tag}}</div>--}}
            <a href="">
                <h5>{{$product->name}}</h5>
            </a>
            <div class="product-price">
                {{number_format($product->price ) }} VND
            </div>
        </div>
    </div>
</div>
