@extends('layouts.admin_layout')

@section('title', 'Баннеры')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все баннеры</h1>
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


            <div class="card">

                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th>
                                Имя
                            </th>
                            <th>
                                Телефон
                            </th>
                            <th>
                                Дата заявки
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($apps as $app)
                            <tr>
                                <td>
                                    {{ $app['name'] }}
                                </td>
                                <td>
                                    {{ $app['phone'] }}
                                </td>
                                <td>
                                    {{ $app['created_at'] }}
                                </td>
                                <td class="project-actions text-right">

                                    <form action="{{ route('application-destroy', $app['id']) }}" method="POST" class="d-inline">
                                        @csrf
{{--                                        @method('DELETE')--}}
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Удалить
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection