@extends('layouts.master')

@section('content')
    <!--app-content open-->
    <div class="app-content main-content">
        <div class="side-app">


            <!--Page header-->
            <div class="page-header">
                <div class="page-leftheader">
                    <h4 class="page-title mb-0 text-primary">Dashboard</h4>
                </div>
                <div class="page-rightheader">
                    <div class="btn-list">
                        
                        <div class="dropdown-menu border-0">
                            <a class="dropdown-item" href="javascript:void(0);">Today</a>
                            <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                            <a class="dropdown-item active bg-primary text-white" href="javascript:void(0);">Last 7 days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last 30 days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last 6 months</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last year</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page header-->

            <!-- Row-1 -->
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-xm-12">
                    <div class="card overflow-hidden dash1-card border-0 dash1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="">
                                        <span class="fs-14 font-weight-normal">Total To dos</span>
                                        <h2 class="mb-2 number-font carn1 font-weight-bold">{{ $todos->count() }}</h2>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End Row-1 -->


        </div>
    </div>
    <!-- CONTAINER END -->
@endsection
