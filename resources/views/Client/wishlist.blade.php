@extends('Client.layout.index')
@section('contact')

    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Home</a></li>
                        <li class="page-breadcrumb__nav active">Wishlist</li>
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
                    <div class="section-content">
                        <h5 class="section-content__title">Your Wishlist items</h5>
                    </div>
                    <!-- Start Wishlist Table -->
                    <div class="table-content table-responsive cart-table-content m-t-30">
                        <table>
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Until Price</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                                <th>ADD TO CART</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img class="img-fluid" src="assets/img/product/size-small/product-home-1-img-1.jpg" alt=""></a>
                                </td>
                                <td class="product-name"><a href="#">Product Name</a></td>
                                <td class="product-price-cart"><span class="amount">$60.00</span></td>
                                <td class="product-quantity">
                                    <div class="quantity d-inline-block">
                                        <input type="number" min="1" step="1" value="1">
                                    </div>
                                </td>
                                <td class="product-subtotal">$70.00</td>
                                <td class="product-add-cart">
                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">ADD TO CART</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img class="img-fluid" src="assets/img/product/size-small/product-home-1-img-2.jpg" alt=""></a>
                                </td>
                                <td class="product-name"><a href="#">Product Name</a></td>
                                <td class="product-price-cart"><span class="amount">$50.00</span></td>
                                <td class="product-quantity">
                                    <div class="quantity d-inline-block">
                                        <input type="number" min="1" step="1" value="1">
                                    </div>
                                </td>
                                <td class="product-subtotal">$80.00</td>
                                <td class="product-add-cart">
                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">ADD TO CART</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img class="img-fluid" src="assets/img/product/size-small/product-home-1-img-3.jpg" alt=""></a>
                                </td>
                                <td class="product-name"><a href="#">Product Name</a></td>
                                <td class="product-price-cart"><span class="amount">$70.00</span></td>
                                <td class="product-quantity">
                                    <div class="quantity d-inline-block">
                                        <input type="number" min="1" step="1" value="1">
                                    </div>
                                </td>
                                <td class="product-subtotal">$90.00</td>
                                <td class="product-add-cart">
                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">ADD TO CART</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>  <!-- End Wishlist Table -->
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


