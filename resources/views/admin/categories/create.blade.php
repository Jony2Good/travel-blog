@extends('admin.layouts.main')
@section('page.title', 'Добавить категорию')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Добавить категории')}}</h1>
                    </div><!-- /.col -->
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
                    <form action="{{ route('admin.categories.store') }}" method="post" class="w-25">
                        @csrf
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="category">{{__('Название категории')}}</label>
                                <input type="text" name="title" id="category" class="form-control mb-2 @error('title') is-invalid @enderror"
                                       placeholder="Введите название категории">
                                @error('title')
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
