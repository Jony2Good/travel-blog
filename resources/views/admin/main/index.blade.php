@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Главная таблица')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{__('На главную страницу')}}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $data['userCount'] }}</h3>
                                <p>{{__('Пользователей')}}</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('admin.users') }}" class="small-box-footer">{{__('Больше информации')}}<i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['categoryCount'] }}</h3>
                                <p>{{__('Категорий')}}</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{__('admin.categories')}}" class="small-box-footer">{{__('Больше информации')}}<i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $data['postCount'] }}</h3>
                                <p>{{__('Тэгов')}}</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fa fa-tags"></i>
                            </div>
                            <a href="{{ route('admin.tags') }}" class="small-box-footer">{{__('Больше информации')}}<i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $data['tagsCount'] }}</h3>
                                <p>{{__('Постов')}}</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fa fa-comments"></i>
                            </div>
                            <a href="{{ route('admin.tags') }}" class="small-box-footer">{{__('Больше информации')}}<i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
