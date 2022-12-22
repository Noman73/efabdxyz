
@extends('layouts.frontend.master')
@section('content')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Dashboard</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            </ol>
        </div>
    </div>



    <div class="row">
        <div class="col-xl-6 col-xxl-12">
                {{-- new  --}}

                    <div class="alert alert-success">Purchased Package <strong>{{$package->package->title}}</strong> And Your Are <strong>{{$designation}}</strong> </div>
                    <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Sale </div>
                                    <div class="stat-digit">{{$total_sale}}</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Matching COMM </div>
                                    <div class="stat-digit"> ৳. {{$matching_commision}}</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Direct COMM </div>
                                    <div class="stat-digit">৳. {{$direct_commision}}</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Balance </div>
                                    <div class="stat-digit">৳. {{$total_balance}}</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Earn </div>
                                    <div class="stat-digit">৳. {{$total_earn}}</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Withdraw </div>
                                    <div class="stat-digit">৳. {{$total_withdraw}}</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Left Hand </div>
                                    <div class="stat-digit">{{$leftCount}}</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Right Hand </div>
                                    <div class="stat-digit">{{$rightCount}}</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">This Month Total Sale</div>
                                    <div class="stat-digit"> {{$all_sale}}</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Customer </div>
                                    <div class="stat-digit"> </i><span id="total_customer">{{$total_customer}}</span></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- new end --}}

        </div>
    </div>

@endsection
