@extends('admin.layouts.main')
@section('page.title', 'Добавить историю')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Добавить историю')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.posts')}}">{{__('Назад')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">{{__('Категории')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.tags')}}">{{__('Тэги')}}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('admin.posts.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group mb-3 col-6">
                                <label for="post-title">{{__('Название истории')}}</label>
                                <input type="text" name="title" id="post-title" class="form-control mb-2 @error('title') is-invalid @enderror"
                                       placeholder="{{__('Введите название истории')}}">
                                @error('title')
                                <div class="text-danger">{{__('Поле необходимо заполнить')}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="summernote">{{__('Содержание истории')}}</label>
                                <textarea class="mb-2 @error('content') is-invalid @enderror" id="summernote" name="content"></textarea>
                                @error('content')
                                <div class="text-danger">{{__('Поле необходимо заполнить')}}</div>
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
