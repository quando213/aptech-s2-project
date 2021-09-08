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
                            <li class="breadcrumb-item"><a href="/admin">Bảng điều khiển</a></li>
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
                            <h4 class="card-title"><a href="{{route('categoryList')}}"><button class="btn btn-primary">Quay lại</button></a></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="name">Tên sản phẩm</label>
                                                <input type="text" id="name" class="form-control"
                                                       name="name" value="{{$data ? $data->name:''}}" placeholder="Nhập tên sản phẩm">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="description">Miêu tả sản phẩm</label>
                                                <input type="text" id="description" class="form-control"
                                                       name="description" value="{{$data ? $data->description:''}}" placeholder="Nhập miêu tả sản phẩm">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="sort_number">Số thứ tự</label>
                                                <input type="number" id="sort_number" class="form-control"
                                                       name="sort_number" value="{{$data ? $data->sort_number:''}}" placeholder="Nhập số thứ tự sản phẩm">
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">{{$data ? 'Save':'Submit'}}</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                        <input type="url" hidden id="thumbnail" name="thumbnail">
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

