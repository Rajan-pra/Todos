@extends('layouts.master')

@section('content')
    <div class="app-content main-content">
        <div class="side-app">


            <!--Page header-->
            <div class="page-header">
                <div class="page-leftheader">
                    <h4 class="page-title mb-0 text-primary">Todos</h4>
                </div>
                <div class="page-rightheader">
                    <div class="btn-list">
                        <a class="btn btn-info " href="{{ route('todos.create') }}">Create</a>


                    </div>
                </div>

            </div>
            <!--End Page header-->

            <!-- Row -->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Todos</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Title</th>
                                        <th>User</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($todos as $index => $todo)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>{{ $todo->title }}</td>
                                            <td>{{ $todo->user->name }}</td>
                                            <td>
                                                {{ $todo->status ? 'Completed' : 'Pending' }}
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-info btn-sm "
                                                    href="{{ route('todos.edit', $todo->slug) }}">Edit</a>
                                                    <a class="btn btn-success btn-sm  ms-2"
                                                    href="{{ route('todos.view', $todo->slug) }}">View</a>
                                                <form class="ms-2" method="Post" action="{{route('todos.destroy',$todo->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                   <button class="btn btn-danger btn-sm" type="submit">Delete</button> 
                                                </form>
                                                </div>
                                                
                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive -->
                    </div>

                </div>
            </div>
            <!-- End Row -->


        </div>
    </div>
@endsection
