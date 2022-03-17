<li class="nav-item has-treeview @if(Route::is('*.genre.*')) menu-open @else menu-hide @endif">
    <a href="{{ route('admin.genre.index') }}" class="nav-link @if(Route::is('*.genre.*')) active @endif">
        <i class="nav-icon fas fa-globe"></i>
        <p>
            Жанры
        </p>
    </a>
</li>
