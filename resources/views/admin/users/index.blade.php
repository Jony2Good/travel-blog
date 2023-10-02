@extends('admin.layouts.main')
@section('page.title', 'Список пользователей')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Зарегистрированные на сайте пользователи')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('На главную')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">{{__('Категории')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.tags')}}">{{__('Тэги')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.posts')}}">{{__('Посты')}}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 mb-3"><a href="{{ route('admin.users.create') }}"
                                               class="btn btn-block btn-primary">{{__('Добавить')}}</a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{__('Список пользователей')}}</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                               placeholder="{{__('Поиск')}}">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>{{__('Номер')}}</th>
                                        <th>{{__('Имя пользователя')}}</th>
                                        <th>{{__('Почта пользователя')}}</th>
                                        <th>{{__('Роль пользователя')}}</th>
                                        <th>{{__('Дата создания')}}</th>
                                        <th>{{__('Дата изменения')}}</th>
                                        <th>{{__('Действия')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->role}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>{{$item->updated_at}}</td>
                                            <td class="d-flex">
                                                <a href="{{route('admin.users.show', $item->id)}}"><i
                                                        class="far fa-eye mr-2"></i></a>
                                                <a class="text-success"
                                                   href="{{route('admin.users.edit', $item->id)}}"><i
                                                        class="fas fa-pencil-alt mr-2"></i></a>
                                                <form action="{{ route('admin.users.delete', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="border-0 text-danger bg-transparent" type="submit">
                                                        <i class="far fa-times-circle"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
