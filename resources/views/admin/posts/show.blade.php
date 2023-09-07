@extends('admin.layouts.main')
@section('page.title', $tag->title)
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{$tag->title}}</h1>
                        <a class="text-success" href="{{ route('admin.tags.edit', $tag->id )}}"><i
                                class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('admin.tags.delete', $tag->id ) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="border-0 text-danger bg-transparent" type="submit">
                                <i class="far fa-times-circle"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.tags')}}">{{__('Назад')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">{{__('Категории')}}</a></li>
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
                                        <td>{{__('Номер тэга')}}</td>
                                        <td>{{$tag->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Название тэга')}}</td>
                                        <td>{{$tag->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Дата создания')}}</td>
                                        <td>{{$tag->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Дата изменения')}}</td>
                                        <td>{{$tag->updated_at}}</td>
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
