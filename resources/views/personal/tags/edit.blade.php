@extends('admin.layouts.main')
@section('page.title', $tag->title)
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Редактировать тэги')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.tags') }}">{{__('Назад')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">{{__('Категории')}}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('admin.tags.update', $tag->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="tag-title">{{__('Название тэга')}}</label>
                                <input type="text" name="title" id="tag-title" class="form-control mb-2"
                                       placeholder="{{__('Введите название тэга')}}"
                                       value="{{ $tag->title }}">
                                @error('title')
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
