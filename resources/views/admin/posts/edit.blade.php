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
                            <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">{{__('Категории')}}</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('admin.tags.update', $post->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="card-body">
                            <div class="form-group mb-3 col-2">
                                <label>{{ __('Название истории') }}</label>
                                <input type="text" name="title" class="form-control mb-2"
                                       placeholder="{{__('Введите название истории')}}"
                                       value="{{ $post->title }}">
                                @error('title')
                                <div class="text-danger">{{__('Поле не должно быть пустым')}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-2">
                                <label for="category">{{__('Категория')}}</label>
                                <select class="form-control" name="category_id" id="category">
                                    @foreach($categories as $item)
                                        <option {{ $item->id == $post->id ? 'selected' : ''}} value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-2">
                                <label for="tags">{{__('Тэги')}}</label>
                                <select multiple class="form-control" name="tags[]" id="tags">
                                    @foreach($tags as $item)
                                        <option
{{--                                            @foreach($post->tags as $postTag)--}}
{{--                                                {{ $item->id == $postTag->id ? 'selected' : ''}}--}}
{{--                                            @endforeach--}}
                                            value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <div class="form-group mb-3 col-6">
                                <label for="summernote">{{__('Содержание истории')}}</label>
                                <textarea class="form-control mb-2 @error('content') is-invalid @enderror"
                                          id="summernote" name="content">{{ $post->content }}</textarea>
                                @error('content')
                                <div class="text-danger">{{__('Поле необходимо заполнить')}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">{{__('Добавить')}}</button>
                        </div>
                    </div>
                </form>

            </div>
        </section>
    </div>
@endsection
