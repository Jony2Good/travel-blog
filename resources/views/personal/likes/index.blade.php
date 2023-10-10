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
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{__('На главную страницу')}}</a>
                            </li>
                        </ol>
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{__('Список понравившихся историй')}}</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                               placeholder="{{__('Поиск')}}">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive no-wrap p-0">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>{{__('Номер')}}</th>
                                        <th>{{__('Название истории')}}</th>
                                        <th>{{__('Дата создания')}}</th>
                                        <th>{{__('Дата изменения')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->updated_at }}</td>
                                            <td class="d-flex">
                                                <a href="{{route('personal.likes.show', $item->id)}}"><i
                                                        class="far fa-eye mr-2"></i></a>
                                                <form action="{{ route('personal.likes.delete', $item->id) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="border-0 text-danger bg-transparent" type="submit">
                                                        <i class="far fa-times-circle"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
