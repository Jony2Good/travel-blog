@extends('admin.layouts.main')
@section('page.title', 'Добавить пользователя')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Добавить пользователя')}}</h1>
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
                    <form action="{{ route('admin.users.store') }}" method="post" class="w-25">
                        @csrf
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="name">{{__('Имя пользователя')}}</label>
                                <input type="text" name="name" id="name" class="form-control mb-2 @error('name') is-invalid @enderror"
                                       placeholder="Имя пользователя">
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">{{__('Электронная почта')}}</label>
                                <input type="text" name="email" id="email" class="form-control mb-2 @error('email') is-invalid @enderror"
                                       placeholder="Электронная почта">
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="role">{{__('Выберите роль')}}</label>
                                <select class="form-control @error('role') is-invalid @enderror" name="role" id="role">
                                    <option disabled selected hidden>{{__('Без роли')}}</option>
                                    @foreach($roles as $id => $item)
                                        <option {{ $id == old('role') ? 'selected' : '' }}
                                                value="{{ $id }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">{{__('Добавить')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
