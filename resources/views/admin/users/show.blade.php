@extends('admin.layouts.main')
@section('page.title', $user->title)
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{$user->name}}</h1>
                        <a class="text-success" href="{{ route('admin.users.edit', $user->id )}}"><i
                                class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('admin.users.delete', $user->id ) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="border-0 text-danger bg-transparent" type="submit">
                                <i class="far fa-times-circle"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.users')}}">{{__('Назад')}}</a></li>
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
                                        <td>{{__('Номер')}}</td>
                                        <td>{{$user->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Имя пользователя')}}</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Почта пользователя')}}</td>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Роль пользователя')}}</td>
                                        <td>{{$user->role}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Дата создания')}}</td>
                                        <td>{{$user->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Дата изменения')}}</td>
                                        <td>{{$user->updated_at}}</td>
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
