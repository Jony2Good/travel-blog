@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Редактировать категорию')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">{{__('Назад')}}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{route('admin.categories.update', $category->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="category-title">{{__('Название категории')}}</label>
                                <input type="text" name="title" id="category-title" class="form-control mb-2"
                                       placeholder="{{__('Введи имя категории')}}"
                                       value="{{$category->title}}">
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
