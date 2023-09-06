@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-2">{{$categories->title}}</h1>
                    <a class="text-success" href="{{route('admin.categories.edit', $categories->id)}}"><i class="fas fa-pencil-alt"></i></a>
                    <form
                        action="{{route('admin.categories.destroy', $categories->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="border-0 text-danger bg-transparent" type="submit">

                            <i class="far fa-times-circle"></i>
                        </button>
                    </form>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <!-- /.card-body -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">

                                <tbody>

                                <tr>
                                    <td>ID</td>
                                    <td>{{$categories->id}}</td>

                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$categories->title}}</td>

                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td>{{$categories->created_at}}</td>

                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td>{{$categories->updated_at}}</td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
