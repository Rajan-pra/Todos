@extends('layouts.master')

@section('content')
    <div class="app-content main-content">
        <div class="side-app">


            <!--Page header-->
            <div class="page-header">
                <div class="page-leftheader">
                    <h4 class="page-title mb-0 text-primary">View</h4>
                </div>
               

            </div>
            <!--End Page header-->

            <div class="row">
                <div class="col-md-12 wrapper wrapper-content">
                    <div class="ibox card">
                        <div class="card-body">
                            <div class="ibox-content">
                                <div class="row mb-3">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xl-5">
                                                <div class="row">
                                                    
                                                    <div class="col-10">
                                                        
                                                            @if($todo->image)
                                                                    <img src="{{asset($todo->image)}}" alt="{{ $todo->title}}" class="img-fluid br-7">
                                                            @else
                                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png" alt="{{ $todo->title}}" class="img-fluid br-7">
                                                        @endif
                                                                    
                                                               
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 col-xs-12 col-xl-7 mt-5">
                                                <h3 class="mb-3">
                                                    <a href="javascript:void(0);" class="text-navy">
                                                            {{ $todo->title}}
                                                    </a>
                                                </h3>
                                                <div>
                                                    <h5>Description</h5>
                                                    <p>{{$todo->description}}</p>
                                                </div>

                                                <div>
                                                    <h5>status</h5>
                                                    <p>{{ $todo->status ? 'Completed' : 'Pending' }}
                                                    </p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                  
                </div>
            </div>


        </div>
    </div>
@endsection
