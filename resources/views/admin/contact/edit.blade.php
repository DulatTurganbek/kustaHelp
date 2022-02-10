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

                    <form action="{{ route('contact.update',1) }}" method="POST">
                        @csrf
                        @method('PUT')
                    <div class="card-body">

                        <div class="form-group mb-0 col-xs-12 col-sm-12 col-md-12 mb-2">
                            <h5 class="text-uppercase bg-light p-2 text-center">
                                Основные
                            </h5>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane show active">
                                <div class="row">
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                        <label>Адрес</label>
                                        <span class="text-danger">*</span>
                                        <input class="form-control " placeholder="Введите адрес" name="address" type="text" value="{{ $contact['address'] }}">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                        <label>Режим работы</label>
                                        <span class="text-danger">*</span>
                                        <input class="form-control " placeholder="Введите режим работы" name="operating_mode" type="text" value="{{ $contact['operating_mode'] }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                <label>Телефон</label>
                                <span class="text-danger">*</span>
                                <input class="form-control " placeholder="Введите телефон" name="phone" type="text" value="{{ $contact['phone'] }}">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                <label>Почта</label>
                                <span class="text-danger">*</span>
                                <input class="form-control " placeholder="Введите почту" name="email" type="text" value="{{ $contact['email'] }}">
                            </div>
                        </div>

                        <div class="form-group mb-0 col-xs-12 col-sm-12 col-md-12 mb-2">
                            <h5 class="text-uppercase bg-light p-2 text-center">
                                Социальные сети
                            </h5>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                <label>Whatsapp</label>
                                <input class="form-control " placeholder="Введите ссылку на Whatsapp" name="whatsapp" type="text" value="{{ $contact['whatsapp'] }}">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                <label>Youtube</label>
                                <input class="form-control " placeholder="Введите ссылку на Youtube" name="youtube" type="text" value="{{ $contact['youtube'] }}" >
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                <label>Instagram</label>
                                <input class="form-control " placeholder="Введите ссылку на Instagram" name="instagram" type="text" value="{{ $contact['instagram'] }}">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                <label>Facebook</label>
                                <input class="form-control " placeholder="Введите ссылку на Facebook" name="facebook" type="text" value="{{ $contact['facebook'] }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12 col-sm-6 col-md-6 mt-3">
                                <button class="btn btn-success" type="submit"><i class="fa fa-check fa-fw mr-1"></i> Сохранить</button>
                            </div>
                        </div>
                    </div>
                    </form>


                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
