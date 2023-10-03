<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <a class="navbar-brand" href="index.html"><img class="logo" src="{{asset('assets/images/logo-eva.png')}}" alt="EVA Blog"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="edicaMainNav">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">{{ __('Главная страница') }}<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">{{ __('О проекте') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">{{ __('Блоги и авторы') }}</a>
                    <div class="dropdown-menu" aria-labelledby="blogDropdown">
                        <a class="dropdown-item" href="blog.html">{{ __('Архив блогов') }}</a>
                        <a class="dropdown-item" href="blog-single.html">{{ __('Авторы блогов') }}</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">{{ __('Контакты') }}</a>
                </li>
            </ul>
            <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item align-self-center">
                    <a class="nav-link" href="#">{{ __('Загрузить пост') }}</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn" type="submit"> <i class="fa fa-user-circle" aria-hidden="true"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</div>
