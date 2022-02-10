@extends('layouts.admin_layout')

@section('title', 'Создать баннер')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить Баннер</h1>
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
                        <form action="{{ route('banner.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Заголовок</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Введите зоголовок" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Описание</label>
                                    <textarea name="description" id="description" cols="25" rows="10"  class="form-control" placeholder="Введите описание" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ссылка</label>
                                    <input type="text" class="form-control" name="link" id="link" placeholder="Введите ссылку" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
