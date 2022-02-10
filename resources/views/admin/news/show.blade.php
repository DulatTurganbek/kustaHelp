@extends('layouts.admin_layout')

@section('title', 'Новость')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Новость - {{ $news['id'] }}</h1>
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



                    <div class="card-body">

                        <div class="button-list">
                            <a class="btn btn-primary mt-xs-1" href="{{ route('news.edit', $news['id']) }}">
                                <i class="fa fa-pencil-alt mr-1"></i>
                                Изменить                        </a>
                            <form action="{{ route('news.destroy', $news['id']) }}" method="POST" class="d-inline" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm delete-btn" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Удалить
                                </button>
                            </form>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane show active">
                                <table class="table table-striped detail-view">
                                    <tbody>
                                    <tr>
                                        <th>Заголовок</th>
                                        <td>{{ $news['title'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Дата</th>
                                        <td>{{ $news['date'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Описание</th>
                                        <td>
                                            {{ $news['description'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Содержание</th>
                                        <td>
                                            {!! $news['content'] !!}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Основная картинка</th>
                                        <td>
                                            <img src="{!! $news['image'] !!}" alt="Основная картинка" width="250">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Внутренняя картинка</th>
                                        <td>
                                            <img src="{!! $news['inner_image'] !!}" alt="Внутренняя картинка" width="400">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Дата создания</th>
                                        <td>{{ $news['created_at'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Дата редактирования</th>
                                        <td>{{ $news['updated_at'] }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
