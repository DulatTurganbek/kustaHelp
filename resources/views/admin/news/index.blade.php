@extends('layouts.admin_layout')

@section('title', 'Новости')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Новости</h1>
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

                <div class="card">

                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th>
                                    Заголовок
                                </th>
                                <th>
                                    Картинка
                                </th>
                                <th>
                                    Дата
                                </th>
                                <th>
                                    Дата создания
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($all_news as $news)
                                <tr>
                                    <td>
                                        {{ $news['title'] }}
                                    </td>
                                    <td>
                                        <img src="{!! $news->image !!}" alt="" width="100" height="100">
                                    </td>
                                    <td>
                                        {{ $news['date'] }}
                                    </td>

                                    <td>
                                        {{ $news['created_at'] }}
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="{{ route('news.show', $news['id']) }}">
                                            <i class="fas fa-folder">
                                            </i>
                                            Подробнее
                                        </a>
                                        <a class="btn btn-info btn-sm" href="{{ route('news.edit', $news['id']) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Редактировать
                                        </a>
                                        <form action="{{route('news.destroy',$news['id'])}}" method="POST" class="d-inline">
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
                <!-- /.card-body -->
            </div>

        </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
