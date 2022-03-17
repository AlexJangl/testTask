<label>
    @isset($lang) <img src="/img/flag_{{ $lang }}.png" width="18px" alt=""> @endisset
    {{ $label }} @isset($required) <span class="text-danger">*</span> @endisset
    @if(isset($item->file) && $item->file != null)
        <a href="{{ $item->getFile() }}" class="text-primary mx-2" target="_blank" data-tooltip="tooltip" title="{!! trans('trans.view ') !!}">
            <i class="far fa-share-square"></i>
        </a>
    @endif
</label>
<div class="input-group">
    <div class="custom-file">
        <input type="file" class="custom-file-input" name="{{ $data }}" id="{{ $data }}" aria-describedby="{{ $data }}" accept="{{ $accept ?? '.doc,.docx,.pdf,.xls,.xlsx' }}" @isset($required) @empty($item->$data) required @endempty @endisset>
        <label class="custom-file-label" for="{{ $data }}">@isset($item->$data) {{ $item->$data }} @else Выберите файл @endisset</label>
    </div>
</div>

