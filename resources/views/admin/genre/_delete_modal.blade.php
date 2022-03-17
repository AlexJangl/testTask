@php $id = isset($item) ? $item->id : null; @endphp

<div class="modal fade" id="modal{{ $id }}delete"  role="dialog" aria-labelledby="modal{{ $id }}deleteLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="@isset($item){{ route('genre.destroy',$item) }}@endisset" class="was-validated" method="POST" enctype="multipart/form-data">
                @isset($item) @method('DELETE') @endisset
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="modal{{ $id }}deleteLabel">Удаление</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" class="btn btn-danger ml-4">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
