@extends('layouts.admin_layout')

@section('title', 'Редактирование')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('team.update',$team['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active">
                                        <div class="row">
                                            <div class="form-group col-xs-12 col-sm-4 col-md-4 ">
                                                <label>Имя</label>
                                                <span class="text-danger">*</span>
                                                <input class="form-control " placeholder="Введите имя" name="first_name" type="text" value="{{ $team['first_name'] }}">
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-4 col-md-4 ">
                                                <label>Фамилия</label>
                                                <span class="text-danger">*</span>
                                                <input class="form-control " placeholder="Введите фамилию" name="last_name" type="text" value="{{ $team['last_name'] }}">
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-4 col-md-4 ">
                                                <label>Отчество</label>
                                                <span class="text-danger">*</span>
                                                <input class="form-control " placeholder="Введите отчество" name="middle_name" type="text" value="{{ $team['middle_name'] }}">
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-8 col-md-8 ">
                                                <label>Должность</label>
                                                <span class="text-danger">*</span>
                                                <input class="form-control " placeholder="Введите должность" name="position" type="text" value="{{ $team['position'] }}">
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="form-group col-xs-12 col-sm-4 col-md-4 ">
                                        <label for="phone">Телефон</label>
                                        <span class="text-danger">*</span>
                                        <input class="form-control " placeholder="Введите телефон" name="phone" type="text" value="{{ $team['phone'] }}" id="phone">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-4 col-md-4 ">
                                        <label for="telegram">Ссылка на Telegram</label>
                                        <span class="text-danger">*</span>
                                        <input class="form-control " placeholder="Введите ссылку на Telegram" name="telegram" type="text" value="{{ $team['telegram'] }}" id="telegram">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-4 col-md-4 ">
                                        <label for="whatsapp">Ссылка на Whatsapp</label>
                                        <span class="text-danger">*</span>
                                        <input class="form-control " placeholder="Введите ссылку на Whatsapp" name="whatsapp" type="text" value="{{ $team['whatsapp'] }}" id="whatsapp">
                                    </div>
                                </div>

{{--                                <div class="row">--}}
{{--                                    <div class="form-group col-xs-12 col-sm-6 col-md-6 ">--}}
{{--                                        <label for="avatar">Аватар</label>--}}
{{--                                        <input class="form-control " aria-describedby="avatar-error" name="avatar" type="file" id="avatar">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="row">
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 mt-3">
                                        <button class="btn btn-success" type="submit"><i class="fa fa-check fa-fw mr-1"></i> Сохранить</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
