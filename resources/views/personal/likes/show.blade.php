@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Понравившиеся посты')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('personal.likes') }}">{{__('Назад')}}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{__('На главную страницу')}}</a>
                            </li>
                        </ol>
                    </div>
                    <div class="col-8">
                        <div class="card align-items-center">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $posts->title }}</h5>
                                <p class="card-text">{{ $posts->content }}</p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link">Ссылка на понравившуюся историю</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
