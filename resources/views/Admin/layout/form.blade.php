@extends('.Admin.layout.index')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>
                        @if(isset($back_href))
                            <a href="{{ $back_href }}" style="margin-right: 10px; vertical-align: middle;">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                        @endif
                        @yield('title')
                    </h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Trang chủ</a></li>
                            @if(isset($back_href))
                                <li class="breadcrumb-item"><a href="{{ $back_href }}">Quản lý</a></li>
                            @endif
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>
                </div>
            </div>
            @if ( session()->has('message') )
                <div class="alert alert-success alert-dismissible show fade">
                    {{ session()->get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible show fade">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="POST">
                                    @csrf
                                    <div class="row">
                                        @yield('fields')
                                        <div class="col-12 d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Lưu</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Tải lại trang</button>
                                        </div>
                                    </div>
                                </form>
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
        const selectDistrict = $('select[name="district_id"]');
        const selectWard = $('select[name="ward_id"]');
        selectDistrict.change(function () {
            $.ajax({
                type: 'GET',
                url: '/api/ward/' + selectDistrict.val(),
                beforeSend: function () {
                    selectWard.html('<option value hidden disabled selected>Chọn phường/xã</option>').prop('disabled', false);
                },
                success: function (data) {
                    data.forEach(item => selectWard.append(new Option(item.name, item.xaid)));
                },
                error: function (xhr) {
                    let errors = JSON.parse(xhr.responseText).errors;
                    alert(errors.map(a => a.msg).join(';'));
                }
            });
        })
    </script>
@endsection
