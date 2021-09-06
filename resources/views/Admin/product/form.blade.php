@extends('.Admin.layout.index')
@section('title')
    Admin Dashboard - {{$title}}
@endsection
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{$title}}</h3>
                    @if ( session()->has('message') )
                        <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
                    @endif
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$breadcrumb}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><a href="{{route('productList')}}">Back to list Products </a></h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if ( session()->has('error') )
                                <p class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </p>
                            @endif
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" id="name" class="form-control"
                                                       placeholder="Name" value="{{$data ? $data->name :''}}" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="number" id="price" class="form-control"
                                                       value="{{$data ? $data->price:''}}" placeholder="Price" name="price">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="Category">Category</label>
                                                <select class="form-control" name="category_id">
                                                    <option selected disabled hidden>-</option>
                                                    @foreach($categories as $category )
                                                        <option value="{{$category->id}}"  {{$data && $data->category_id == $category->id ? 'selected' :''}}>{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class=" col-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" id="description" cols="30"  rows="3">{{$data ? $data->description :''}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" hidden>
                                            <div class="form-group">
                                                <label>Thumbnail</label>
                                                <input type="text" id="thumbnail" class="form-control"
                                                       value=" {{$data ? $data->thumbnail :''}}"  placeholder="Thumbnail" name="thumbnail">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Unit</label>
                                                <select class="form-control" name="unit">
                                                    <option selected disabled hidden>-</option>
                                                    @foreach(\App\Enums\ProductUnit::getValues() as $type)
                                                        <option value="{{$type}}" {{$data && $data->unit === $type ? 'selected' : ''}}>{{\App\Enums\ProductUnit::getDescription($type)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" id="quantity" class="form-control"
                                                       value="{{$data ? $data->quantity :''}}"   name="quantity" placeholder="Quantity">
                                            </div>
                                        </div>
                                        <div class=" col-12">
                                            <div class="form-group">
                                                <label>Stock</label>
                                                <input type="text" id="thumbnail" class="form-control"
                                                       value=" {{$data ? $data->stock :''}}"  placeholder="Stock" name="stock">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Origin</label>
                                                <input type="text" id="origin" class="form-control"
                                                       value="{{$data ? $data->origin :''}}"  name="origin" placeholder="Origin">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Brand</label>
                                                <input type="text" id="brand" class="form-control"
                                                       value="{{$data ? $data->brand :''}}"  name="brand" placeholder="Brand">
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit"
                                                    class="btn btn-primary me-1 mb-1">{{$data ? 'Save':'Submit'}}</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">File Input</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group">
                                    <label for="year">Photo</label>
                                    <div class="form-group d-flex flex-column align-items-center">
                                        <button type="button" class="btn btn-primary btn-block" id="upload-photo"><i
                                                class="fas fa-image"></i> Upload Photo
                                        </button>
                                        <img id="preview-photo" style="width: 300px" class="mt-4"
                                             src="{{$data ? $data->thumbnail :''}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script src="https://widget.cloudinary.com/v2.0/global/all.js"type="text/javascript"></script>
    <script>
        const inputPhoto = $('#thumbnail');
        cloudinary.setCloudName('nguy-n-ng-c-thu-n');
        $('#upload-photo').click(function () {
            cloudinary.openUploadWidget({
                    uploadPreset: 'sem_2_project',
                    sources: ['local', 'url', 'image_search', 'google_drive'],
                    multiple: false,
                    tags: ['browser_upload', 'insurer', 'insurer-photo'],
                    resourceType: 'image',
                    cropping: true,
                    croppingAspectRatio: 1,
                    thumbnails: false,
                    autoMinimize: true
                }, (error, result) => {
                    if (!error && result && result.event === "success") {
                        $('#preview-photo').attr('src', result.info.url);
                        inputPhoto.val(result.info.url);
                    } else {
                        if (error && error.statusText) {
                            alert(error.statusText);
                        }
                    }
                }
            )
        })
    </script>
@endsection
