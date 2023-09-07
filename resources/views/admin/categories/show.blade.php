@extends('admin.layouts.main')
@section('page.title', $categories->title)
@section('content')
<div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-2">{{$categories->title}}</h1>
                    <a class="text-success" href=""><i class="fas fa-pencil-alt"></i></a>
                    <form
                        action="" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="border-0 text-danger bg-transparent" type="submit">
                            <i class="far fa-times-circle"></i>
                        </button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">{{__('Назад')}}</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="card">

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
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
