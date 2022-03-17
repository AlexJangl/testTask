<div class="form-group">
    <label for="{{ $data }}">
        @if(isset($lang) and $lang != false) <img src="{{ asset('admin/img/flag_' . $lang . '.png')  }}" width="18px" alt="">  @endif
        {{ $label }}
        @isset($required)<span class="text-danger" data-tooltip="tooltip" title="Обязательное поле">*</span>@endisset
    </label>
    <textarea class="form-control" name="{{ $data }}" length="{{ $length ?? 2500 }}" id="@isset($id){{ $id }}@else{{ $data }}@endif" @isset($required) required @endisset>@isset($item){{ $item->$data }}@endisset</textarea>
</div>

@php
    $label = null; $data = null; $lang = null; $type = null; $id = null; $class = null; $value = null; $pattern = null; $length = null; $placeholder = null; $required = null; $other = null;
@endphp
