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
<form action="{{ route('report.update', $report['id']) }}" method="POST">
    @csrf
    @method('PUT')
                            <div class="tab-content">
                                <div class="tab-pane show active">
                                    <div class="row">
                                        <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                            <label>Название</label>
                                            <span class="text-danger">*</span>
                                            <input class="form-control " placeholder="Введите название файла"  name="name" type="text" value="{{ $report['name'] }}" >
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                            <label>Файл</label>
                                            <input class="form-control " name="file" type="file" value="{{ $report['file'] }}">
                                        </div>
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
        </div><!-- /.container-fluid -->
    </section>
@endsection
