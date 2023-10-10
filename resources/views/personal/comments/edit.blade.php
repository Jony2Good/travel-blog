@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Комментарии')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{__('На главную страницу')}}</a>
                            </li>
                        </ol>
                    </div>
                    <form action="{{ route('personal.comments.update', $comment->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="card-body">
                                <div class="form-group mb-3 col-12">
                                    <label for="summernote">{{__('Содержание комментария')}}</label>
                                    <textarea class="form-control mb-2 @error('content') is-invalid @enderror"
                                              id="summernote" name="content">{{ $comment->content }}</textarea>
                                    @error('content')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">{{__('Изменить')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
