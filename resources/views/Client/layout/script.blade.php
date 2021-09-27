<!-- Vendor JS Files -->
<script src="/assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="/assets/js/vendor/modernizr-3.7.1.min.js"></script>
<script src="/assets/js/vendor/jquery-ui.min.js"></script>
<script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>

<!-- Plugins /JS Files -->
<script src="/assets/js/plugin/slick.min.js"></script>
<script src="/assets/js/plugin/jquery.countdown.min.js"></script>
<script src="/assets/js/plugin/material-scrolltop.js"></script>
<script src="/assets/js/plugin/price_range_script.js"></script>
<script src="/assets/js/plugin/in-number.js"></script>
<script src="/assets/js/plugin/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="/assets/js/plugin/venobox.min.js"></script>
<script src="/assets/js/plugin/jquery.waypoints.js"></script>
<script src="/assets/js/plugin/jquery.lineProgressbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<!-- <script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugin/plugins.min.js"></script> -->

<!-- Main js file that contents all jQuery plugins activation. -->
<script src="/assets/js/main.js"></script>

<script>
    function updateCartCanvas(content) {
        let html = '';
        for (let i in content) {
            const item = content[i];
            html += `<li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between ">
                        <div class="row offcanvas-add-cart__content d-flex align-items-start m-r-10">
                            <div class="col-5">
                                <div class="offcanvas-add-cart__img-box pos-relative">
                                    <a href="/product/${item.id}"
                                       class="offcanvas-add-cart__img-link img-responsive">
                                        <img src="${item.options.thumbnail}" alt="${item.name}"
                                             class="add-cart__img">
                                    </a>
                                    <span class="offcanvas-add-cart__item-count pos-absolute">${item.qty}x</span>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="offcanvas-add-cart__detail">
                                    <a href="/product-single-default" class="offcanvas-add-cart__link">${item.name}</a>
                                    <span class="offcanvas-add-cart__price">${item.price}đ</span>
                                </div>
                            </div>
                        </div>
                        <button class="offcanvas-add-cart__item-dismiss"><i class="fal fa-times"></i></button>
                    </li>`
        }
        $('.offcanvas-add-cart__menu').html(html);
    }

    function addToCart(productId, quantity) {
        axios.post('{{ route('addToCart') }}', {
            product_id: productId,
            quantity: quantity
        }).then(({data}) => {
            $('#modalAddCartImg').attr('src', data.product.thumbnail);
            $('.cart-total').text(data.total);
            $('.cart-count').text(data.count);
            $('#modalAddCart').modal('show');
            updateCartCanvas(data.content)
        }).catch(e => {
            console.log(e)
            alert('Đã có lỗi xảy ra. Vui lòng thử lại sau');
        })
    }

    window.addEventListener('DOMContentLoaded', function () {
        $('.quick-add-to-cart').click(function () {
            const productId = $(this).data('product-id');
            if (!productId) return;
            addToCart(productId, 1);
        });

        $('.quick-view').click(function () {
            const product = $(this).data('product');
            if (!product) return;
            $('#modalQuickViewImg').attr('src', product.thumbnail);
            $('#modalQuickViewPrice').text(product.price);
            $('#modalQuickViewName').text(product.name);
            $('#modalQuickViewDesc').text(product.description);
            if (product.stock) {
                $('#modalQuickViewAddToCart').data('product-id', product.id).show();
            } else {
                $('#modalQuickViewAddToCart').hide();
            }
            $('#modalQuickView').modal('show');
        })

        $('#modalQuickViewAddToCart').click(function () {
            addToCart($(this).data('product-id'), $('#modal-number').val());
            $('#modalQuickView').modal('hide');
        });
    })

</script>
