@extends('.Shipper.layout.index')
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
        <section class="section">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="row" id="table-hover-row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Hoverable rows</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>RATE</th>
                                                <th>SKILL</th>
                                                <th>TYPE</th>
                                                <th>LOCATION</th>
                                                <th>ACTION</th>
                                            </tr>
                                            </thead>
                                            @if($notifications)
                                                <tbody>
                                                @foreach($notifications as $notification)
                                                    <tr>
                                                        <td class="text-bold-500">Michael Right</td>
                                                        <td>$15/hr</td>
                                                        <td class="text-bold-500">UI/UX</td>
                                                        <td>Remote</td>
                                                        <td>Austin,Taxes</td>
                                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                                    </tr>
                                                @endforeach


                                                </tbody>
                                            @else
                                                <tbody>
                                                <tr class="odd">
                                                    <td colspan="5" class="dataTables_empty">Không có dư liệu nào
                                                    </td>
                                                </tr>
                                                </tbody>
                                            @endif

                                        </table>
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
