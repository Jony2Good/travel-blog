@extends('admin.layouts.main')
@section('page.title', $post->title)
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Редактировать историю')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.posts') }}">{{__('Назад')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">{{__('Категории')}}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('admin.tags.update', $post->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>{{ __('Название истории') }}</label>
                                <input type="text" name="title" class="form-control mb-2"
                                       placeholder="{{__('Введите название истории')}}"
                                       value="{{ $post->title }}">
                                @error('title')
                                <div class="text-danger">{{__('Поле не должно быть пустым')}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="post-title">{{ __('Название истории') }}</label>
                                <input type="text" name="content" id="post-title" class="form-control mb-2"
                                       placeholder="{{__('О чем хотите рассказать?')}}"
                                       value="{{ $post->content }}">
                                @error('content')
                                <div class="text-danger">{{__('Поле не должно быть пустым')}}</div>
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
