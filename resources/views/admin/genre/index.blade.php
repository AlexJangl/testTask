@extends('admin._layout')

@section('title','Главная страница')

@section('content')
    <div class="content-wrapper mt-2">
        <section class="content">
            <div class="row" id="editor">
                <div class="col-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <a class="text-primary mx-2" data-toggle="modal" data-target="#modalcredit">
                                <i class="far fa-plus-square"></i>
                            </a>
                            @include('admin.genre._credit_modal')

                            <span class="font-weight-bold">Жанры</span>

                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center align-middle">
                                        #id
                                    </th>
                                    <th>
                                        Жанры
                                    </th>

                                    <th class="text-center align-middle">
                                        <i class="fas fa-cog"></i>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($genres as $item)
                                    @include('admin.genre._table')
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
