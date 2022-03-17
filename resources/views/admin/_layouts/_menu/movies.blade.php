<li class="nav-item has-treeview @if(Route::is('*.movies.*')) menu-open @else menu-hide @endif">
    <a href="{{ route('admin.movies.index') }}" class="nav-link @if(Route::is('*.movies.*')) active @endif">
        <i class="nav-icon fas fa-film"></i>
        <p>
            Фильмы
        </p>
    </a>
</li>
