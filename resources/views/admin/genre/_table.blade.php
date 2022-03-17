<tr>
    <td>
        {{ $item->id ?? '--' }}
    </td>
    <td>
        {{ $item->title ?? '--' }}
    </td>

    <td class="text-center">
        <a class="text-primary mx-2" data-toggle="modal" data-target="#modal{{ $item->id }}credit">
            <i class="far fa-edit"></i>
        </a>
        @include('admin.genre._credit_modal')
        <a class="text-danger" data-toggle="modal" data-target="#modal{{ $item->id }}delete">
            <i class="far fa-trash-alt"></i>
        </a>
        @include('admin.genre._delete_modal')
    </td>
</tr>
