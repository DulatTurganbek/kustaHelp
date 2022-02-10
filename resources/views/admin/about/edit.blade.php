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
                        <div class="card-body">
                            <div class="tab-content">

                                <div class="form-group mb-0 col-xs-12 col-sm-12 col-md-12 mb-2">
                                    <h5 class="text-uppercase bg-light p-2 text-center">
                                        Основные
                                    </h5>
                                </div>


                                <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                <div class="row">
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                        <label for="home_image">Основная картинка</label>
                                        <input class="form-control" name="home_image" type="file">

                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                        <label for="inner_image">Внутренняя картинка</label>
                                        <input class="form-control " name="inner_image" type="file">
                                    </div>
                                </div>

                                <div class="tab-pane show active">
                                    <div class="row">
                                        <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                            <label>Описание</label>
                                            <span class="text-danger">*</span>
                                            <textarea class="form-control " placeholder="Введите описание"  rows="5" name="description" cols="50">{{ $about['description'] }}</textarea>
                                        </div>

                                        <div class="form-group mb-0 col-xs-12 col-sm-12 col-md-12 mb-2">
                                            <h5 class="text-uppercase bg-light p-2 text-center">
                                                Первый блок
                                            </h5>
                                        </div>

                                        <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                            <label>Заголовок</label>
                                            <span class="text-danger">*</span>
                                            <input class="form-control " placeholder="Введите заголовок"  name="first_title" type="text" value="{{ $about['first_title'] }}" >
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                            <label>Содержание</label>
                                            <span class="text-danger">*</span>
                                            <textarea class="form-control " placeholder="Введите содержание" rows="5" name="first_content" cols="50">{{ $about['first_content'] }}</textarea>
                                        </div>

                                        <div class="form-group mb-0 col-xs-12 col-sm-12 col-md-12 mb-2">
                                            <h5 class="text-uppercase bg-light p-2 text-center">
                                                Второй блок
                                            </h5>
                                        </div>

                                        <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                            <label>Заголовок</label>
                                            <span class="text-danger">*</span>
                                            <input class="form-control " placeholder="Введите заголовок" name="second_title" type="text" value="{{ $about['second_title'] }}">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                            <label>Содержание</label>
                                            <span class="text-danger">*</span>
                                            <textarea class="form-control " placeholder="Введите содержание" rows="5" name="second_content" cols="50">{{ $about['second_content'] }}</textarea>
                                        </div>

                                        <div class="form-group mb-0 col-xs-12 col-sm-12 col-md-12 mb-2">
                                            <h5 class="text-uppercase bg-light p-2 text-center">
                                                Третий блок
                                            </h5>
                                        </div>

                                        <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                            <label>Заголовок</label>
                                            <span class="text-danger">*</span>
                                            <input class="form-control " placeholder="Введите заголовок" name="third_title" type="text" value="{{ $about['third_title'] }}">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                            <label>Содержание</label>
                                            <span class="text-danger">*</span>
                                            <textarea class="form-control " placeholder="Введите содержание" rows="5" name="third_content" cols="50">{{ $about['third_content'] }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="form-group col-xs-12 col-sm-12 col-md-12 mt-3">
                                            <button class="btn btn-success" type="submit"><i class="fa fa-check fa-fw mr-1"></i> Сохранить</button>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
