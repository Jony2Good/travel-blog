<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <nav class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> {{ $name }}</a>
            </div>
        </div>
        <div class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">{{__('Каталог')}}</li>
                <li class="nav-item">
                    <a href="{{ route('personal') }}" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            {{__('Личный кабинет')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.likes') }}" class="nav-link">
                        <i class="nav-icon far fa-heart"></i>
                        <p>
                            {{__('Понравившиеся посты')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.comments') }}" class="nav-link">
                        <i class="nav-icon fa fa-list" aria-hidden="true"></i>
                        <p>
                            {{__('Комментарии')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-comments"></i>
                        <p>
                            {{__('Опубликовать пост')}}
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>

