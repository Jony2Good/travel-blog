<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <nav class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>
        <div class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">{{__('Каталог')}}</li>
                <li class="nav-item">
                    <a href="{{ route('admin.categories') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            {{__('Категории')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.tags') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            {{__('Тэги')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.posts') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            {{__('Посты')}}
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>

