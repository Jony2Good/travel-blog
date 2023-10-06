@extends('admin.layouts.main')
@section('page.title', $post->title)
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{$post->title}}</h1>
                        <a class="text-success" href="{{ route('admin.posts.edit', $post->id )}}"><i
                                class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('admin.posts.delete', $post->id ) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="border-0 text-danger bg-transparent" type="submit">
                                <i class="far fa-times-circle"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.posts')}}">{{__('Назад')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">{{__('Категории')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('admin.tags')}}">{{__('Тэги')}}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>{{__('Номер истории')}}</td>
                                        <td>{{$post->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Название истории')}}</td>
                                        <td>{{$post->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Содержание истории')}}</td>
                                        <td >{{$post->content}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Дата создания')}}</td>
                                        <td>{{$post->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Дата изменения')}}</td>
                                        <td>{{$post->updated_at}}</td>
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
