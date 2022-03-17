{{--@auth--}}
    <a name="home"></a>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav w-75">
            <li class="nav-item w-100">
                @include('admin._include._messages')
            </li>
        </ul>

        <!-- Right navbar links -->
{{--        <ul class="navbar-nav ml-auto">--}}
{{--            @auth--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#!" class="nav-link text-truncate">--}}
{{--                        <span class="mr-2">--}}
{{--                            <i class="fas fa-user-tie"></i>--}}
{{--                        </span>--}}
{{--                        {{ Auth::user()->fio }}--}}
{{--                    </a>--}}
{{--                </li>--}}


{{--                <li class="nav-item">--}}
{{--                    @foreach(config('app.locales') as $lang=>$title)--}}
{{--                        @if(App::isLocale($lang))--}}
{{--                            <a class="font-weight-bold mr-1">--}}
{{--                                <img src="{{ asset('img/flag_' . $lang . '.png') }}" alt="" height="25">--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    @foreach(config('app.locales') as $lang=>$title)--}}
{{--                        @if(!App::isLocale($lang))--}}
{{--                            <a href="{{ route('setlocale', ['lang' => $lang]) }}">--}}
{{--                                <img src="{{ asset('img/flag_' . $lang . '.png') }}" alt="" width="15">--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('logout') }}" class="nav-link" data-tooltip="tooltip" title="Выход" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--                        <i class="fas fa-sign-out-alt"></i>--}}
{{--                    </a>--}}
{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--            @else--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('login') }}" class="nav-link" data-tooltip="tooltip" title="Вход">--}}
{{--                        <i class="fas fa-power-off"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endauth--}}
{{--        </ul>--}}
    </nav>
{{--@endauth--}}
