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
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{__('Список комментариев')}}</h3>
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
                                        <th>{{__('Содеражание комментария')}}</th>
                                        <th>{{__('Дата создания')}}</th>
                                        <th>{{__('Дата изменения')}}</th>
                                        <th>{{__('Действия')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comments as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->content }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->updated_at }}</td>
                                            <td class="d-flex">
                                                <a class="text-success"
                                                   href="{{route('personal.comments.edit', $item->id)}}"><i
                                                        class="fas fa-pencil-alt mr-2"></i></a>
                                                <form action="{{ route('personal.comments.delete', $item->id) }}"
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
