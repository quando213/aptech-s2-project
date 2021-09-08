<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/template/assets/favicon.ico"/>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/template/css/styles.css" rel="stylesheet"/>
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">All Products</a></li>
                        <li>
                            <hr class="dropdown-divider"/>
                        </li>
                        <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                        <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <table class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th>name</th>
                                <th>quantity</th>
                                <th>price</th>
                                <th>remove</th>
                                <th>update</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->subtotal(0)}}</td>
                                    <td><a href="/product/remove/{{$item->rowId}}">
                                            remove
                                        </a></td>
                                    <td>
                                        <form action="">
                                            <input type="number" value="{{$item->qty}}">
                                            <button type="submit"> update</button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="2">&nbsp;</td>
                                <td>Total</td>
                                <td>{{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Shop in style</h1>
            <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        </div>
    </div>
</header>
<!-- Section-->
<div class="container">
    <h2>Small Table</h2>
    <p>The .table-sm class makes the table smaller by cutting cell padding in half:</p>
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>quantity</th>
            <th>price</th>
            <th>unitprice</th>
            <th>remove</th>
            <th>update</th>
        </tr>
        </thead>
        <tbody>
        @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->qty}}</td>
                <td>{{$item->price(0)}}</td>
                <td>{{$item->subtotal(0)}}</td>
                <td>
                    <form method="post">
                        @csrf
                        <input type="number" name="qty" value="{{$item->qty}}">
                        <input type="text" name="rowId" hidden value="{{$item->rowId}}">
                        <button type="submit"> update</button>
                    </form>
                </td>
                <td><a href="/remove/{{$item->rowId}}">
                        remove
                    </a></td>
            </tr>
        @endforeach
        <tr>
            <td colspan="2">&nbsp;</td>
            <td>Total</td>
            <td>{{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}}</td>
        </tr>
        </tbody>
    </table>
    <div>
        <a href="/buy" type="button" class="btn btn-primary">Buy</a>
        <div id="paypal-button-container"></div>
    </div>
</div>

<!-- Footer-->
<footer class="py-5 bg-dark mt-lg-auto ">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Core theme JS-->
<script src="/template/js/scripts.js"></script>
<script
    src="https://www.paypal.com/sdk/js?client-id=AT6K8zDwlR_AxTnXFc3R-rvEBQvia9kpt9ix4XJvrmZGa5PI-J5HBARwBq-fafaheoKgkYMg4Lckmb-r"></script>


<script>
    paypal.Buttons({
        createOrder: function (data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    reference_id: "store_mobile_world_order_1234",
                    description: "Mobile World Store order-1234",
                    amount: {
                        value: 1
                    }
                }]
            });
        },
        onApprove: function (data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function (details) {
                // This function shows a transaction success message to your buyer.
                alert('Transaction completed by ' + details.payer.name.given_name);
            });
        }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
</script>


</body>
</html>
