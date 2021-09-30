@extends('Client.layout.index')
@section('content')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li class="page-breadcrumb__nav active">Sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main v-cloak id="main-container" class="main-container">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <!-- Start Leftside - Sidebar Widget -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Start Single Sidebar Widget - Filter [Catagory] -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Danh mục sản phẩm</h5>
                            </div>

                            @foreach($categories as $category)
                                <ul class="sidebar__menu">
                                    <li class="mega-menu__list">
                                        <a @click="setCategory({{ $category->id }})"
                                           :class="{'mega-menu__link': true, 'selected-category': filter.category_id === {{ $category->id }}}">{{ $category->name }}</a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>  <!-- End Single Sidebar Widget - Filter [Catagory] -->

                        <!-- Start Single Sidebar Widget - Filter [Price] -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Lọc theo giá (VND)</h5>
                            </div>
                            <div class="sidebar__price-filter ">
                                <div class="slider__price-filter-input">
                                    <div class="row">
                                        <div class="col-lg-6">Giá thấp nhất: </div>
                                        <input type="number" min=0 v-model="filter.price_min" placeholder="Nhập giá"
                                               class="col-6 price-range-field form-control"/>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">Giá cao nhất: </div>
                                        <input type="number" min=0 v-model="filter.price_max" placeholder="Nhập giá"
                                               class="col-6 price-range-field form-control"/>
                                    </div>
                                    <button type="button" @click="getData"
                                            class="btn btn--box btn--small btn--radius-tiny btn--green btn--green-hover-black">Lọc</button>
                                </div>
                            </div>
                        </div>  <!-- Start Single Sidebar Widget - Filter [Price] -->
                    </div>
                </div> <!-- End Left Sidebar Widget -->

                <!-- Start Rightside - Product Type View -->
                <div class="col-lg-9">
                    <!-- ::::::  Start Sort Box Section  ::::::  -->
                    <div class="sort-box m-b-20">
                        <div class="sort-box-item d-flex align-items-center flex-warp">
                            <span>Sắp xếp theo:</span>
                            <div class="sort-box__option">
                                <label class="select-sort__arrow">
                                    <select name="select-sort" class="select-sort" v-model="filter.sort">
                                        <option v-for="option in sortOptions" :value="option.key">@{{ option.label }}</option>
                                    </select>
                                </label>
                            </div>
                        </div>

                        <div class="sort-box-item">
                            @if($list->count())
                                <span>Kết quả thứ {{ $list->firstItem() }} - {{ $list->lastItem() }} trên tổng số {{ $list->total() }}</span>
                            @endif
                            <button v-if="hasFilter" type="button" @click="clearFilter"
                                    class="btn btn--box btn--tiny btn--radius-tiny btn--green btn--green-hover-black ml-3">Bỏ lọc</button>
                        </div>
                    </div> <!-- ::::::  Start Sort Box Section  ::::::  -->

                    <div class="product-tab-area">
                        <div class="tab-content tab-animate-zoom">
                            <div class="tab-pane show active shop-grid" id="sort-grid">
                                <div class="row">
                                    @if($list->count())
                                        @foreach($list as $product)
                                            <div class="col-md-4 col-xl-3 col-12">
                                                <x-product :product="$product"></x-product>
                                            </div>
                                        @endforeach
                                    @else
                                        <div>Không có kết quả nào</div>
                                    @endif
                                </div>
                                @if($list->total() > $list->perPage())
                                    <div class="page-pagination">
                                        {{ $list->appends(request()->input())->links() }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>  <!-- Start Rightside - Product Type View -->
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script>
        const sortOptions = [
            {
                key: null,
                label: 'Mặc định'
            },
            {
                key: 'name ASC',
                label: 'Tên sản phẩm, A-Z'
            },
            {
                key: 'name DESC',
                label: 'Tên sản phẩm, Z-A'
            },
            {
                key: 'price ASC',
                label: 'Giá, tăng dần'
            },
            {
                key: 'price DESC',
                label: 'Giá, giảm dần'
            },
            {
                key: 'created_at ASC',
                label: 'Thời gian, cũ nhất trước'
            },
            {
                key: 'created_at DESC',
                label: 'Thời gian, mới nhất trước'
            },
        ]
        let app = new Vue({
            el: '#main-container',
            data() {
                return {
                    filter: {
                        search: @json($search),
                        category_id: @json($category_id) && @json($category_id).length ? parseInt(@json($category_id)) : null,
                        price_min: @json($price_min) && @json($price_min).length ? parseInt(@json($price_min)) : null,
                        price_max: @json($price_max) && @json($price_max).length ? parseInt(@json($price_max)) : null,
                        sort: @json($sort),
                    },
                    sortOptions
                }
            },
            computed: {
                hasFilter() {
                    let hasFilter = false;
                    for (const [key, value] of Object.entries(this.filter)) {
                        if (value) {
                            hasFilter = true;
                        }
                    }
                    return hasFilter;
                }
            },
            methods: {
                setCategory(id) {
                    if (this.filter.category_id === id) {
                        this.filter.category_id = null;
                    } else {
                        this.filter.category_id = id;
                    }
                },
                clearFilter() {
                    for (const [key, value] of Object.entries(this.filter)) {
                        this.filter[key] = null;
                    }
                    this.getData();
                },
                getData() {
                    let url = '{{ route('listProduct') }}';
                    let filter = {...this.filter};
                    if (filter.sort && filter.sort.trim() && filter.sort.indexOf(' ') > -1) {
                        const sort = filter.sort.split(' ');
                        filter.sort_attr = sort[0];
                        filter.sort_order = sort[1];
                    }
                    delete filter.sort
                    for (const [key, value] of Object.entries(filter)) {
                        if (!value) {
                            delete filter[key];
                        }
                    }
                    const params = new URLSearchParams(filter);
                    url = params && params.toString().length ? url + '?' + params : url;
                    location.replace(url);
                }
            },
            watch: {
                'filter.category_id': function () {
                    this.getData();
                },
                'filter.sort': function () {
                    this.getData();
                }
            }
        })
    </script>
@endsection
