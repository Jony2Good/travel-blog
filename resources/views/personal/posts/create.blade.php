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
                <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="card-body">
                            <div class="form-group mb-3 col-3">
                                <label for="post-title">{{__('Название истории')}}</label>
                                <input type="text" name="title" id="post-title"
                                       class="form-control mb-2 @error('title') is-invalid @enderror"
                                       placeholder="{{__('Введите название истории')}}">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-3">
                                <label for="category">{{__('Категория')}}</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category">
                                    <option disabled selected hidden>{{__('Без категории')}}</option>
                                    @foreach($categories as $item)
                                        <option {{ $item->id == old('category_id') ? 'selected' : '' }}
                                            value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-3">
                                <label for="tags">{{__('Тэги')}}</label>
                                <select class="select2 @error('tags') is-invalid @enderror" multiple="multiple" name="tags[]" id="tags" data-placeholder="{{__('Выберите тэг')}}" style="width: 100%;">
                                    @foreach($tags as $item)
                                        <option {{ is_array(old('tags')) && in_array($item->id, old('tags')) ? 'selected' : '' }}
                                            value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                @error('tags')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <div class="form-group mb-3 col-6">
                                <label for="summernote">{{__('Содержание истории')}}</label>
                                <textarea class="form-control mb-2 @error('content') is-invalid @enderror"
                                          id="summernote" name="content"></textarea>
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <div class="form-group mb-3 col-4">
                                <label for="prev_image">{{__('Добавить изображение для превью')}}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="prev_image" type="file" class="custom-file-input" id="prev_image">
                                        <label class="custom-file-label"
                                               for="prev_image">{{__('Добавить изображение')}}</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">{{__('Добавить')}}</span>
                                    </div>
                                </div>
                                @error('prev_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-4">
                                <label for="main_image">{{__('Добавить главное изображение')}}</label>
                                <div class="input-group ">
                                    <div class="custom-file">
                                        <input name="main_image" type="file" class="custom-file-input" id="main_image">
                                        <label class="custom-file-label"
                                               for="main_image">{{__('Добавить изображение')}}</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">{{__('Добавить')}}</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">{{__('Добавить')}}</button>
                </form>
            </div>
        </section>
    </div>
@endsection
