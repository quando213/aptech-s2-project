@extends('.Admin.layout.index')
@section('title')
    Profile - Mazer Admin Dashboard
@endsection
@section('content')
    <div class="page-heading">
        <h3>Thống kê dịch bệnh</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Số người dùng</h6>
                                        <h6 class="font-extrabold mb-0">{{ $data['user']}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Đơn vị hỗ trợ</h6>
                                        <h6 class="font-extrabold mb-0">{{ $data['group']}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Số đơn hàng</h6>
                                        <h6 class="font-extrabold mb-0">{{ $data['order']}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Số lượng sản phẩm</h6>
                                        <h6 class="font-extrabold mb-0">{{ $data['product']}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="card ">
                            <div class="card-header">
                                <h4>Thông kê đơn hàng</h4>
                                <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                    <i class="fa fa-calendar"></i>&nbsp;
                                    <span></span> <i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart_div"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card ">
                            <div class="col-4">
                                <div class="card-header">
                                    <h4>Danh mục sản phẩm</h4>
                                    <div id="chartCategory" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                        <i class="fa fa-calendar"></i>&nbsp;
                                        <span></span> <i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="chartCategory"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Thông kê danh thu</h4>
                                <div id="chartOrderPrice" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                    <i class="fa fa-calendar"></i>&nbsp;
                                    <span></span> <i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chartPrice"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection
@section('script')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var start = moment().subtract(6, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                chartOrder(start.format('D-M-Y'),end.format('D-M-Y'))
            }
            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);
        });

        function chartOrder  (start, end){
            $.ajax({
                type: 'GET',
                url: '{{route('chart')}}',
                data: {
                    'start':start,
                    'end':end
                },
                success: function (data) {
                    var options = {
                        series: [{
                            name: "đơn hàng",
                            data: data['order']
                        }],
                        chart: {
                            height: 350,
                            type: 'line',
                            zoom: {
                                enabled: false
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'straight'
                        },
                        title: {
                            text: 'Product Trends by Month',
                            align: 'left'
                        },
                        grid: {
                            row: {
                                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                        },
                        xaxis: {
                            categories: data['time']
                        }
                    };
                    var chart = new ApexCharts(document.querySelector("#chart_div"), options);
                    chart.render();
                    chart.updateSeries([{
                        data: data['order'],
                        categories:data['time']
                    },])
                },
                error: function (xhr) {
                    let errors = JSON.parse(xhr.responseText).errors;
                    alert(errors.map(a => a.msg).join(';'));
                }
            });
        }
    </script>
    <script type="text/javascript">
        $(function() {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#chartOrderPrice span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                chartOrderPrice(start.format('D-M-Y'),end.format('D-M-Y'))
            }
            $('#chartOrderPrice').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);
        });

        function chartOrderPrice  (start, end){
            $.ajax({
                type: 'GET',
                url: '{{route('chartOrderPrice')}}',
                data: {
                    'start':start,
                    'end':end
                },
                success: function (datas) {
                    var options = {
                        series: [{
                            name: "VND",
                            data: datas['price']
                        }],
                        chart: {
                            height: 350,
                            type: 'line',
                            zoom: {
                                enabled: false
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'straight'
                        },
                        title: {
                            text: 'Product Trends by Month',
                            align: 'left'
                        },
                        grid: {
                            row: {
                                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                        },
                        xaxis: {
                            categories: datas['timesPrice']
                        }
                    };
                    var chartPrice = new ApexCharts(document.querySelector("#chartPrice"), options);
                    chartPrice.render();
                    chartPrice.updateSeries([{
                        data: datas['price'],
                        categories: datas['timesPrice']
                    },])
                },
                error: function (xhr) {
                    let errors = JSON.parse(xhr.responseText).errors;
                    alert(errors.map(a => a.msg).join(';'));
                }
            });
        }
    </script>



@endsection
