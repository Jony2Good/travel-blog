@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Редактировать пользователя')}}</h1>
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
                    <form action="{{route('admin.users.update', $user->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="name">{{__('Имя пользователя')}}</label>
                                <input type="text" name="name" id="name" class="form-control mb-2"
                                       placeholder="{{__('Введите имя пользователя')}}"
                                       value="{{$user->name}}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">{{__('Электронная почта')}}</label>
                                <input type="text" name="email" id="email" class="form-control mb-2 @error('email') is-invalid @enderror"
                                       placeholder="Электронная почта" value="{{$user->email}}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="role">{{__('Выберите роль')}}</label>
                                <select class="form-control @error('role') is-invalid @enderror" name="role" id="role">
                                    <option disabled selected hidden>{{__('Без роли')}}</option>
                                    @foreach($roles as $id => $item)
                                        <option {{ $id == $user->role ? 'selected' : '' }}
                                                value="{{ $id }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">{{__('Изменить')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
