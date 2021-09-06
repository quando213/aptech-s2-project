@extends('.Admin.layout.index')
@section('title')
    Form Product- Mazer Admin Dashboard
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
                            <h1 class="card-title">Edit Product</h1>
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="container">
                                    <form action="" method="post" class="form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label> Name</label>
                                                    <input type="text" id="name" class="form-control"
                                                           placeholder="First Name" name="name" value="{{$current->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="text" id="price" class="form-control"
                                                           placeholder="Price" name="price" value="{{$current->price}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Thumbnail</label>
                                                    <input type="text" id="thumbnail" class="form-control"
                                                           placeholder="Thumbnail" name="thumbnail" value="{{$current->thumbnail}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <input type="text" id="category" class="form-control"
                                                           placeholder="Category"
                                                           name="category"  value="{{$current->category}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <input type="text" id="status" class="form-control"
                                                           name="status" placeholder="Status" value="{{$current->status}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" id="description" class="form-control"
                                                           name="description" placeholder="Description" value="{{$current->description}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Unit</label>
                                                    <input type="text" id="unit" class="form-control"
                                                           name="unit" placeholder="Unit" value="{{$current->unit}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Quantity</label>
                                                    <input type="text" id="quantity" class="form-control"
                                                           name="quantity" placeholder="Quantity" value="{{$current->quantity}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Origin</label>
                                                    <input type="email" id="origin" class="form-control"
                                                           name="origin" placeholder="Origin" value="{{$current->origin}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Brand</label>
                                                    <input type="email" id="brand" class="form-control"
                                                           name="brand" placeholder="Brand" value="{{$current->brand}}">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

