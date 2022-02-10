@extends('layouts.admin_layout')

@section('title', 'Редактирование новостя')

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
                                <form action="{{ route('news.update', $news['id']) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                <div class="tab-content">
                                    <div class="tab-pane show active">
                                        <div class="row">
                                            <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                                <label>Заголовок</label>
                                                <span class="text-danger">*</span>
                                                <input class="form-control " placeholder="Введите заголовок"name="title" type="text" value="{{ $news['title'] }}">
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                                <label for="description[ru]">Описание</label>
                                                <span class="text-danger">*</span>
                                                <textarea class="form-control " placeholder="Введите описание" rows="5" name="description" cols="50">{{ $news['description'] }}</textarea>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                                <label for="content[ru]">Содержание </label>
                                                <span class="text-danger">*</span>
                                                <textarea class="editor" placeholder="Введите содержание" rows="5" name="content" > {{ $news['content'] }} </textarea>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                        <label for="image">Основная картинка</label>
                                        <input class="form-control " name="image" type="file">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                        <label>Внутренняя картинка</label>
                                        <input class="form-control " name="inner_image" type="file" >
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-6 col-md-6 ">
                                        <label>Дата</label>
                                        <span class="text-danger">*</span>
                                        <input class="form-control " placeholder="Выберите дату" name="date" type="date" value="{{$news['date']}}">
                                    </div>
                                </div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                        <label>Слаг</label>
                                        <span class="text-danger">*</span>
                                        <input class="form-control " placeholder="Введите slug" name="slug" type="text" value="{{$news['slug']}}">
                                    </div>

                                <div class="row">
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 mt-3">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-check fa-fw mr-1"></i> Сохранить</button>
                                    </div>
                                </div>
                        </form>
                            </div>

                    </div>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
