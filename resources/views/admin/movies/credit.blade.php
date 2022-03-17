@extends('admin._layout')

@section('title','Главная страница')

@section('content')
    <div class="content-wrapper mt-2">
        <section class="content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-outline card-primary">
                        <form action="{{ isset($item) ? route('movies.update',$item) : route('movies.store') }}" class="was-validated" method="POST" enctype="multipart/form-data">
                            @isset($item) @method('PATCH') @endisset
                            @csrf

                            <div class="card-header">
                                <a href="{{ route('admin.movies.index') }}" class="text-primary mr-2">
                                    <i class="fas fa-angle-double-left"></i>
                                </a>

                                <span class="font-weight-bold">@isset($item) Редактирование @else Создание @endisset пользователя</span>

                                <div class="card-tools">

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        @include('admin._include.add_images', ['N_photo'=>1, 'addPhoto'=>false, 'aspectRatio'=>41/35, 'default_img'=>'admin/img/png/no-logo.png'])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.input',['data'=>'title','label'=>'Название','placeholder'=>'Введите данные','length'=>150,'required'=>true])
                                    </div>
                                    <div class="col-12 mb-3">
                                        @include('admin._include.form.file',['data'=>'file','label'=>'File','placeholder'=>'Введите данные','length'=>10,'required'=>true])
                                    </div>
                                    <div class="col-12">
                                        <label for="genre_id">
                                            Genres
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-group">
                                            <select class="select2bs4 select2-hidden-accessible" name="genres[]" id="genres" style="width: 100%;" data-placeholder=" Сделайте выбор " data-select2-id="users" tabindex="-1" aria-hidden="true" multiple required>
                                                @foreach($genres as $genre)
                                                    <option value="{{ $genre->id }}" @if(isset($item) and $item->genres->contains($genre->id)) selected @endif >{{ $genre->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-end">
                                <div class="form-group mr-5">
                                    <select name="status" id="status{{ $id ?? rand(0,999999) }}" class="form-control select2bs4 select2-hidden-accessible" style="width: 150%;" required>
                                        @foreach([1=>'active', 0=>'not active'] as $id=>$status)
                                            <option value="{{ $id }}" @if(isset($item) and $item->status == $id) selected @endif>
                                                {{ $status }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary ml-4">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


