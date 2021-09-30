@extends('.Admin.layout.index')
@section('title')
    Dashboard
@endsection
@section('content')
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
                                        <h6 class="text-muted font-semibold">Số nhóm quân nhân</h6>
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
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-header">
                                <h4>Thống kê số lượng đơn hàng</h4>
                                <div id="datePickerOrderQuantity"
                                     style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                    <i class="fa fa-calendar"></i>&nbsp;
                                    <span></span> <i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chartOrderQuantity"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-header">
                                <h4>Thống kê theo danh mục sản phẩm</h4>
                                <div id="datePickerCategory"
                                     style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                    <i class="fa fa-calendar"></i>&nbsp;
                                    <span></span> <i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chartCategory"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Thống kê theo doanh thu</h4>
                                <div id="datePickerRevenue"
                                     style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                    <i class="fa fa-calendar"></i>&nbsp;
                                    <span></span> <i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chartRevenue"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
@section('script')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script type="text/javascript">
        $(function () {
            var start = moment().subtract(6, 'days');
            var end = moment();

            function cb(start, end) {
                $('#datePickerOrderQuantity span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
                chartOrderQuantity(start.format('D-M-Y'), end.format('D-M-Y'))
            }

            $('#datePickerOrderQuantity').daterangepicker({
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

        function chartOrderQuantity(start, end) {
            $.ajax({
                type: 'GET',
                url: '{{route('chartOrderQuantity')}}',
                data: {
                    'start': start,
                    'end': end
                },
                success: function (data) {
                    var options = {
                        series: [{
                            name: "Đơn hàng",
                            data: data['quantities']
                        }],
                        chart: {
                            height: 350,
                            type: 'line',
                            zoom: {
                                type: 'x',
                                enabled: true,
                                autoScaleYaxis: true
                            },
                            events: {
                                markerClick: function (event, chartContext, config) {
                                    if (data['quantities'][config.dataPointIndex]) {
                                        const date = data['dates'][config.dataPointIndex];
                                        window.location.href = `/cms/orders?start_date=${date}&end_date=${date}`;
                                    }
                                }
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'straight'
                        },
                        grid: {
                            row: {
                                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                        },
                        yaxis: {
                            title: {
                                text: 'Orders'
                            },
                        },
                        xaxis: {
                            categories: data['dates'],
                            type: 'datetime'
                        }
                    };
                    var chart = new ApexCharts(document.querySelector("#chartOrderQuantity"), options);
                    chart.render();
                    chart.updateSeries([{
                        data: data['quantities'],
                        categories: data['dates']
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
        $(function () {
            var start = moment().subtract(6, 'days');
            var end = moment();

            function cb(start, end) {
                $('#datePickerCategory span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
                chartCategory(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'))
            }

            $('#datePickerCategory').daterangepicker({
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

        function chartCategory(start, end) {
            $.ajax({
                type: 'GET',
                url: '{{route('chartCategory')}}',
                data: {
                    'start': start,
                    'end': end
                },
                success: function (data) {
                    var options = {
                        series: data['counts'],
                        labels: data['categories'],
                        chart: {
                            scale: 0.8,
                            type: 'pie',
                            events: {
                                dataPointSelection: function (event, chartContext, config) {
                                    if (data['counts'][config.dataPointIndex]) {
                                        const category_id = data['category_ids'][config.dataPointIndex];
                                        window.location.href = `/cms/products?category_id=${category_id}`;
                                    }
                                }
                            }
                        },
                        responsive: [{
                            breakpoint: 480,
                            options: {
                                chart: {
                                    width: 200
                                },
                                legend: {
                                    position: 'bottom'
                                }
                            }
                        }],
                        dataLabels: {
                            enabled: true
                        }
                    };
                    var chart = new ApexCharts(document.querySelector("#chartCategory"), options);
                    chart.render();
                    chart.updateSeries()
                },
                error: function (xhr) {
                    let errors = JSON.parse(xhr.responseText).errors;
                    alert(errors.map(a => a.msg).join(';'));
                }
            });
        }
    </script>

    <script type="text/javascript">
        $(function () {
            var start = moment().subtract(6, 'days');
            var end = moment();

            function cb(start, end) {
                $('#datePickerRevenue span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
                chartRevenue(start.format('D-M-Y'), end.format('D-M-Y'))
            }

            $('#datePickerRevenue').daterangepicker({
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

        function chartRevenue(start, end) {
            $.ajax({
                type: 'GET',
                url: '{{route('chartRevenue')}}',
                data: {
                    'start': start,
                    'end': end
                },
                success: function (data) {
                    var options = {
                        series: [{
                            name: "Triệu đồng",
                            data: data['revenues']
                        }],
                        chart: {
                            height: 350,
                            type: 'line',
                            zoom: {
                                type: 'x',
                                enabled: true,
                                autoScaleYaxis: true
                            },
                            events: {
                                markerClick: function (event, chartContext, config) {
                                    if (data['revenues'][config.dataPointIndex]) {
                                        const date = data['dates'][config.dataPointIndex];
                                        window.location.href = `/cms/orders?start_date=${date}&end_date=${date}`;
                                    }
                                }
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'straight'
                        },
                        title: {
                            text: 'Daily revenue',
                            align: 'left'
                        },
                        grid: {
                            row: {
                                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                        },
                        yaxis: {
                            labels: {
                                formatter: function (val) {
                                    return (val / 1000000).toFixed(0);
                                },
                            },
                            title: {
                                text: 'Revenue (in million VND)'
                            },
                        },
                        xaxis: {
                            categories: data['dates'],
                            type: 'datetime'
                        }
                    };
                    var chartPrice = new ApexCharts(document.querySelector("#chartRevenue"), options);
                    chartPrice.render();
                    chartPrice.updateSeries([{
                        data: data['revenues'],
                        categories: data['dates']
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
