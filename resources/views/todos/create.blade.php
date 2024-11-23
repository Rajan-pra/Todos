@extends('layouts.master')

@section('content')
    <div class="app-content main-content">
        <div class="side-app">


            <!--Page header-->
            <div class="page-header">
                <div class="page-leftheader">
                    <h4 class="page-title mb-0 text-primary">Create</h4>
                </div>

            </div>
            <!--End Page header-->

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Todos</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                                action="{{ route('todos.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputName" class="col-md-3 form-label">Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="title" placeholder="Title"
                                            name="title" required>
                                        @if ($errors->has('title'))
                                            <span class="error">
                                                @foreach ($errors->get('title') as $error)
                                                    {{ $error }}
                                                @endforeach
                                            </span>
                                        @endif
                                    </div>

                                </div>


                                <div class="form-group row">
                                    <label for="inputName" class="col-md-3 form-label">Slug</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="slug" placeholder="Slug"
                                            name="slug" required>
                                        @if ($errors->has('slug'))
                                            <span class="error">
                                                @foreach ($errors->get('slug') as $error)
                                                    {{ $error }}
                                                @endforeach
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 form-label">Description</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="description"
                                            placeholder="Description..." name="description">
                                        @if ($errors->has('description'))
                                            <span class="error">
                                                @foreach ($errors->get('description') as $error)
                                                    {{ $error }}
                                                @endforeach
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 form-label">Status</label>
                                    <div class="col-md-9">
                                        <select name="status" id="type" class="form-control">
                                            <option value="0">Pending</option>
                                            <option value="1">Completed</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="error">
                                                @foreach ($errors->get('status') as $error)
                                                    {{ $error }}
                                                @endforeach
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 form-label">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image" accept="image/*"
                                            onchange="loadFile(event)" id="file" />
                                        @if ($errors->has('image'))
                                            <span class="error">
                                                @foreach ($errors->get('image') as $error)
                                                    {{ $error }}
                                                @endforeach
                                            </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group mb-0 mt-4 row justify-content-end">
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        {{-- <button type="submit" class="btn btn-secondary">Cancel</button> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->


        </div>
    </div>
@endsection
