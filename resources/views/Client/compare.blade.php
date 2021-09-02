@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Home</a></li>
                        <li class="page-breadcrumb__nav active">Compare</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="compare-area mtb-50px">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Compare Table -->
                                    <div class="compare-table table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td class="first-column">Product</td>
                                                <td class="product-image-title">
                                                    <a href="#" class="img-responsive m-b-15"><img  src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="Compare Product"></a>
                                                    <a href="#" class="category">Vagitables</a>
                                                    <a href="#" class="title">Green Pee</a>
                                                </td>
                                                <td class="product-image-title">
                                                    <a href="#" class="img-responsive m-b-15"><img src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="Compare Product"></a>
                                                    <a href="#" class="category">Fishes</a>
                                                    <a href="#" class="title">Red Curp</a>
                                                </td>
                                                <td class="product-image-title">
                                                    <a href="#" class="img-responsive m-b-15"><img  src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="Compare Product"></a>
                                                    <a href="#" class="category">Fruits</a>
                                                    <a href="#" class="title">Red Pomegranate</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Description</td>
                                                <td class="pro-desc">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas vel a qui repellendus reiciendis! Laudantium, veritatis sunt! Provident dolorem</p>
                                                </td>
                                                <td class="pro-desc">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas vel a qui repellendus reiciendis! Laudantium, veritatis sunt! Provident dolorem</p>
                                                </td>
                                                <td class="pro-desc">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas vel a qui repellendus reiciendis! Laudantium, veritatis sunt! Provident dolorem</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Price</td>
                                                <td class="pro-price">$29</td>
                                                <td class="pro-price">$27</td>
                                                <td class="pro-price">$39</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Color</td>
                                                <td class="pro-color">Green</td>
                                                <td class="pro-color">Marun</td>
                                                <td class="pro-color">Red</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Add to cart</td>
                                                <td class="pro-addtocart">
                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">ADD TO CART</a>
                                                </td>
                                                <td class="pro-addtocart">
                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">ADD TO CART</a>
                                                </td>
                                                <td class="pro-addtocart">
                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">ADD TO CART</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Delete</td>
                                                <td class="pro-remove">
                                                    <button><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                                <td class="pro-remove">
                                                    <button><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                                <td class="pro-remove">
                                                    <button><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Rating</td>
                                                <td class="pro-ratting">
                                                    <ul class="product__review justify-content-center">
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                                    </ul>
                                                </td>
                                                <td class="pro-ratting">
                                                    <ul class="product__review justify-content-center">
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                                    </ul>
                                                </td>
                                                <td class="pro-ratting">
                                                    <ul class="product__review justify-content-center">
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection
@section('moddal')
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="modal__product-img">
                                            <img class="img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Added to cart successfully!</div>
                                        <div class="modal__product-cart-buttons m-tb-15">
                                            <a href="/cart" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">View Cart</a>
                                            <a href="/checkout" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal__border">
                                <ul class="modal__product-shipping-info">
                                    <li class="link--icon-left"><i class="icon-shopping-cart"></i> There Are 5 Items In Your Cart.</li>
                                    <li>TOTAL PRICE: <span>$187.00</span></li>
                                    <li><a href="#" class="btn text-underline color-green" data-dismiss="modal">CONTINUE SHOPPING</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->

@endsection


