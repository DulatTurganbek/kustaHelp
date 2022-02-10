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
                                    Заголовок
                                </th>
                                <th>
                                    Ссылка
                                </th>
                                <th>
                                    Дата создания
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banners as $banner)
                            <tr>
                                <td>
                                    {{ $banner['title'] }}
                                </td>
                                <td>
                                    {{ $banner['link'] }}
                                </td>
                                <td>
                                    {{ $banner['created_at'] }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ route('banner.show', $banner['id']) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Подробнее
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('banner.edit', $banner['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Редактировать
                                    </a>
                                    <form action="{{ route('banner.destroy', $banner['id']) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
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
