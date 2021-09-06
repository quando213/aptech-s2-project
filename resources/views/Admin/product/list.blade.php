@extends('.Admin.layout.index')
@section('title')
    List Product- Mazer Admin Dashboard
@endsection
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Form Layout</h3>
                    <p class="text-subtitle text-muted">Multiple form layout you can use</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1  class="card-title">List Product</h1>
                        </div>
                        <div class="card-content">
                            <div class="card-body">


                                <div class="container">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Thumbnail</th>
                                            <th>Category Id</th>
                                            <th>Status</th>
                                            <th>Description</th>
                                            <th>Unit</th>
                                            <th>Quantity</th>
                                            <th>Origin</th>
                                            <th>Brand</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
{{--                                        <tbody>--}}
{{--                                        @foreach($list as $product)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{$product->id}}</td>--}}
{{--                                                <td>{{$product->name}}</td>--}}
{{--                                                <td>{{$product->price}}</td>--}}
{{--                                                <td>{{$product->thumbnail}}</td>--}}
{{--                                                <td>{{$product->endDate}}</td>--}}
{{--                                                <td>{{$product->portfolio}}</td>--}}
{{--                                                <td>{{$product->ticketPrice}}$</td>--}}
{{--                                                <td>{{\App\Enums\Products::getDescription($product->unit)}}</td>--}}
{{--                                                <td>--}}
{{--                                                    <a href="{{$product->id}}">--}}
{{--                                                        <button class="btn btn-primary"> Edit</button>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="{{$product->id}}">--}}
{{--                                                        <button class="btn btn-danger"--}}
{{--                                                                onclick="return confirm('Are you sure delete event ?')">--}}
{{--                                                            Delete--}}
{{--                                                        </button>--}}
{{--                                                    </a>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                        </tbody>--}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
