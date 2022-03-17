@if($pagination->lastPage() > 1)
    <div class="pagination">
        <ul >
            @php isset($_GET) and $_GET != null ? ($get = isset($_GET['_url']) ? array_diff($_GET,['_url'=>$_GET['_url']]) : $_GET) : $get = null; @endphp
            <li>
                <a class="@if($pagination->currentPage() == 1) active @endif" href="{{ $pagination->appends($get)->url(1) }}">1</a>
            </li>
            @if($pagination->lastPage() >= 2)
                <li>
                    <a class="@if($pagination->currentPage() == 2) active @endif" href="{{ $pagination->appends($get)->url(2) }}">
                        2
                    </a>
                </li>
            @endif

            @if($pagination->currentPage()-1 > 3)
                <li>...</li>
            @endif

            @if($pagination->currentPage()-1 >= 3 and $pagination->currentPage()-1 < $pagination->lastPage()-1)
                <li>
                    <a class="active" href="{{ $pagination->appends($get)->url($pagination->currentPage()-1) }}" >
                        {{ $pagination->currentPage()-1 }}
                    </a>
                </li>
            @endif
            @if($pagination->currentPage() >= 3 and $pagination->currentPage() < $pagination->lastPage()-1)
                <li>
                    <a class="active" href="{{ $pagination->appends($get)->url($pagination->currentPage()) }}">
                        {{ $pagination->currentPage() }}
                    </a>
                </li>
            @endif
            @if($pagination->currentPage()+1 >= 3 and $pagination->currentPage()+1 < $pagination->lastPage()-1)
                <li>
                    <a class="active" href="{{ $pagination->appends($get)->url($pagination->currentPage()+1) }}">
                        {{ $pagination->currentPage()+1 }}
                    </a>
                </li>
            @endif



            @if($pagination->currentPage()+1 < $pagination->lastPage()-2)
                <li>...</li>
            @endif

            @if($pagination->lastPage()-1 > 3)
                <li>
                    <a class="@if($pagination->currentPage() == $pagination->lastPage()-1) active @endif" href="{{ $pagination->appends($get)->url($pagination->lastPage()-1) }}">
                        {{ $pagination->lastPage()-1 }}
                    </a>
                </li>
            @endif
            @if($pagination->lastPage() > 3)
                <li>
                    <a class="@if($pagination->currentPage() == $pagination->lastPage()) active @endif" href="{{ $pagination->appends($get)->url($pagination->lastPage()) }}">
                        {{ $pagination->lastPage() }}
                    </a>
                </li>
            @endif
        </ul>
    </div>
@else
    <br>
@endif
