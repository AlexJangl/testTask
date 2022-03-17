{{--@auth--}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ route('movies.index') }}" class="brand-link">
            <span class="mx-3">
                <i class="fas fa-shield-alt"></i>
            </span>
            <span class="brand-text font-weight-light">MoviesAdmin</span>
        </a>

        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            {{--        <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
            {{--            <div class="image">--}}
            {{--                <img src="/admin/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">--}}
            {{--            </div>--}}
            {{--            <div class="info">--}}
            {{--                <a href="#" class="d-block">Alexander Pierce</a>--}}
            {{--            </div>--}}
            {{--        </div>--}}

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
{{--                    @include('admin._layouts._menu.users', ['page_title' => 'Пользователи'])--}}
{{--                    @include('admin._layouts._menu.translations', ['page_title' => 'Переводы'])--}}
{{--                    @include('admin._layouts._menu.services', ['page_title' => trans('trans.services')])--}}
{{--                    @include('admin._layouts._menu.pricings', ['page_title' => trans('trans.pricings')])--}}
                    @include('admin._layouts._menu.movies', ['page_title' => 'movies'])
                    @include('admin._layouts._menu.genre', ['page_title' => 'genres'])
                </ul>
            </nav>
        </div>
    </aside>
{{--@endauth--}}
