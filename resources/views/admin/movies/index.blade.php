@extends('admin._layout')

@section('title','Главная страница')

@section('content')
    <div class="content-wrapper mt-2">
        <section class="content">
            <div class="row" id="editor">
                <div class="col-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">

                            <span class="font-weight-bold">Фильмы</span>

                            <div class="card-tools">
                                <a href="{{ route('movies.create') }}" class="btn btn-outline-primary text-primary mr-2">
                                    Добавить
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center align-middle">
                                        #id
                                    </th>

                                    <th class="text-center align-middle">
                                        <i class="fas fa-cog"></i>
                                    </th>

                                    <th>
                                        Фото
                                    </th>

                                    <th>
                                        Название фильма
                                    </th>

                                    <th>
                                        Файл
                                    </th>

                                    <th>
                                        Жанры
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($movies as $item)
                                        @include('admin.movies._index_table')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush

