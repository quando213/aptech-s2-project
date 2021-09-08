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
        <form class="form repeater-default" method="post">
            @csrf
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><a href="{{route('comboList')}}">Quay lại</a></h4>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="card mb-0">
                                            <div class="card-header ">
                                                <h4 class="card-title">Thông tin các gói sản phẩm</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class=" col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Tên sản phẩm</label>
                                                            <input type="text" id="first-name-column"
                                                                   class="form-control"
                                                                   name="name" value="{{$data ? $data->name:''}}" placeholder="Nhập tên sản phẩm">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="last-name-column">Mô tả sản phẩm</label>
                                                            <textarea name="description" id="" cols="30"
                                                                      class="form-control"
                                                                      rows="3">{{$data ? $data->description:''}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-column">Ngày thêm mới</label>
                                                            <input type="number" value="{{$data ? $data->day:''}}"
                                                                   id="email-id-column"
                                                                   class="form-control"
                                                                   name="day"
                                                                   placeholder="Chọn ngày thêm mới">
                                                        </div>
                                                    </div>
                                                    <input type="url" hidden id="thumbnail" name="thumbnail">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit"
                                                class="btn btn-primary me-1 mb-1">{{$data ? 'Save':'Submit'}}</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                @if($combo_detail)
                                    <div data-repeater-list="option">
                                        @foreach($combo_detail as $option)
                                            <div data-repeater-item style>


                    <div class="row col-6">
                        <div class="col-12">
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    @if($combo_detail)
                                        <div data-repeater-list="option">
                                            @foreach($combo_detail as $option)
                                                <div data-repeater-item style>
                                                    <div class="row justify-content-between">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="Group">Product</label>
                                                                <select class="product_id  form-control" required
                                                                        name="product_id">
                                                                    <option selected disabled hidden>-</option>
                                                                    @foreach($product as $item)
                                                                        <option
                                                                            value="{{$item->id}}" {{$option->product_id == $item->id ?'selected':''}}>{{$item->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="quantity">Quantity</label>
                                                                <input type="number" id="quantity"
                                                                       value="{{$option->quantity}}" max="" required
                                                                       name="quantity" class="quantity form-control square">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                            <button class="btn btn-danger" data-repeater-delete
                                                                    type="button"><i class="bx bx-x"></i>
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div data-repeater-list="option">
                                            <div data-repeater-item>

                                                <div class="row justify-content-between">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Group">Sản phẩm</label>
                                                            <select class="product_id  form-control" required
                                                                    name="product_id">
                                                                <option selected disabled hidden>Chọn sản phẩm</option>
                                                                @foreach($product as $item)
                                                                    <option
                                                                        value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">

                                                            <label for="quantity">Số lượng sản phẩm</label>
                                                            <input type="number" id="quantity"
                                                                   value="{{$option->quantity}}" max="" required
                                                                   name="quantity" class="quantity form-control square" placeholder="Nhập số lượng sản phẩm">

                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                        <button class="btn btn-danger" data-repeater-delete
                                                                type="button"><i class="bx bx-x"></i>
                                                            Xóa
                                                        </button>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div data-repeater-list="option">
                                        <div data-repeater-item>
                                            <div class="row justify-content-between">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="Group">Sản phẩm</label>
                                                        <select class="product_id  form-control" required
                                                                name="product_id">
                                                            <option selected disabled hidden>Chọn sản phẩm</option>
                                                            @foreach($product as $item)
                                                                <option
                                                                    value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="quantity">Nhập số lượng</label>
                                                        <input type="number" id="quantity" max="" required
                                                               name="quantity" class="quantity form-control square" placeholder="Nhập số lượng sản phẩm">
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                    <button class="btn btn-danger" data-repeater-delete type="button"><i
                                                            class="bx bx-x"></i>
                                                        Xóa
                                                    </button>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    @endif
                                </div>
                            </div>
                           
                        </div>
                        <button class="btn btn-primary" data-repeater-create type="button"><i class="bx bx-plus"></i>
                            Thêm tùy chọn
                        </button>
                    </div>
                </div>
            </section>
        </form>
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
        $('.repeater-default').repeater({
            show: function () {
                $(this).slideDown();
            },
            hide: function (deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            }
        });
        $('.product_id').change(function () {
            $.ajax({
                type: 'GET',
                url: '/api/product/' + $('.product_id').val(),
                success: function (data) {
                    $('.quantity').attr('max', data.stock);
                },
                error: function (xhr) {
                    let errors = JSON.parse(xhr.responseText).errors;
                    alert(errors.map(a => a.msg).join(';'));
                }
            });
        })
    </script>
@endsection
