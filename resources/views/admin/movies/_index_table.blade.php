<tr>
    <td class="text-center">
        {{ $loop->iteration }}
    </td>

    <td class="text-center">
        @if($item->status == true)
            <button class="btn btn-block btn-outline-success" disabled>
                Active
            </button>
        @else
            <button class="btn btn-block btn-outline-danger" disabled>
                Not Active
            </button>
        @endif
        <br>
        <a href = "{{ route('movies.edit', $item) }}" class="text-primary mx-2" >
           <i class="far fa-edit"></i>
        </a>
        <br>
        <a class="text-danger" data-toggle="modal" data-target="#modal{{ $item->id }}delete">
            <i class="far fa-trash-alt"></i>
        </a>
        @include('admin.movies._delete_modal')
    </td>

    <td class="text-center">
        <img src="{{ asset($item->getImage('images', 'admin/img/png/no-logo.png')) }}" alt="{{ $item->title}}" height="150px">
    </td>

    <td>
        {{ $item->title ?? '--' }}
    </td>

    <td>
        @if(isset($item->file) && $item->file != null)
            <a href="{{ $item->getFile() }}" class="text-primary mx-2" target="_blank" data-tooltip="tooltip" title="Скачать файл">
                <i class="fas fa-download"></i>
            </a>
        @endif
    </td>

    <td>
        @foreach($item->genres as $genre)
            {{ $genre->title . (!$loop->last ? ', ' : '') }}
        @endforeach
    </td>

</tr>
