<!-- Start Single Default Product -->
<div class="product__box product__default--single text-center">
    <!-- Start Product Image -->
    <div class="product__img-box  pos-relative">
        <a href="{{ route('detailProduct', $product->id) }}" class="product__img--link">
            <div class="product-img-square-container">
                <img class="product__img img-fluid"
                     src="{{ $product->thumbnail }}" alt="{{ $product->name }}">
            </div>
        </a>
        <!-- Start Procuct Label -->
    {{-- <span class="product__label product__label--sale-dis">-34%</span>--}}
    <!-- End Procuct Label -->
        <!-- Start Product Action Link-->
        <ul class="product__action--link pos-absolute">
            <li><a href="javascript:void(0)" class="quick-add-to-cart" data-product-id="{{ $product->id }}"><i
                        class="icon-shopping-cart"></i></a></li>
            <li><a href="javascript:void(0)" class="quick-view" data-product="{{ json_encode($product, true) }}"><i
                        class="icon-eye"></i></a></li>
        </ul> <!-- End Product Action Link -->
    </div> <!-- End Product Image -->
    <!-- Start Product Content -->
    <div class="product__content m-t-20">
        <a href="{{ route('detailProduct', $product->id) }}" class="product__link">{{ $product->name }}</a>
        <div class="product__price m-t-5">
            <span class="product__price">{{ number_format($product->price) }}đ</span>
        </div>
    </div> <!-- End Product Content -->
</div> <!-- End Single Default Product -->
