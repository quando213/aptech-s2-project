@extends('.Admin.layout.index')
@section('content')
    <form action="">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="row d-flex justify-content-between">
                                <div class="col-md-6">
                                    <div class="row d-flex justify-content-start">
                                        @yield('filter')
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-5">
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-6">
                                            <x-select name="sort" option-all="Sắp xếp mặc định"
                                                      icon="bi-sort-alpha-down" is-filter="true"
                                                      :options="$sort_options ?? ['created_at DESC' => 'Mới nhất trước', 'created_at ASC' => 'Cũ nhất trước']"
                                                      class="trigger-change"></x-select>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" name="search" class="form-control"
                                                       placeholder="Nhập từ khóa"
                                                       value="{{ request()->has('search') ? request()->search : '' }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-search"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-lg">
                                    <thead class="thead-dark">
                                    @yield('thead')
                                    </thead>
                                    <tbody>
                                    @if($data && sizeof($data) > 0)
                                        @yield('tbody')
                                    @else
                                        <tr class="odd">
                                            <td colspan="8" class="dataTables_empty text-center">Không có dữ
                                                liệu
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6 d-flex justify-content-start">
                                    @if($data->count())
                                        Hiển thị từ {{ $data->firstItem() }} đến {{ $data->lastItem() }} trên
                                        tổng số {{ $data->total() }} kết quả
                                    @endif
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="form-group">
                                        <select name="limit" class="form-control trigger-change">
                                            <option
                                                value="{{ request()->has('limit') ? request()->limit : $data->perPage() }}"
                                                selected hidden>
                                                {{ request()->has('limit') ? request()->limit : $data->perPage() }}
                                                kết quả / trang
                                            </option>
                                            @foreach($limit_options ?? [25, 50, 100, 200] as $option)
                                                <option value="{{ $option }}">
                                                    {{ $option }} kết quả / trang
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div style="margin-left: 20px;">
                                        {{ $data->appends(request()->input())->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endsection

@section('script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $('.trigger-change').change(function () {
            $('form').submit();
        });
    </script>
    @yield('extraJs')
@endsection
