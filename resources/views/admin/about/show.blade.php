@extends('layouts.admin_layout')

@section('title', 'о Фонде')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">о Фонде</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">


            <div class="card">

                <div class="card-body">

                    <div class="button-list">
                        <a class="btn btn-primary mt-xs-1" href="{{ route('about.edit',$about['id']) }}">
                            <i class="fa fa-pencil-alt mr-1"></i>
                            Изменить                        </a>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane show active">
                            <table class="table table-striped detail-view">
                                <tbody>
                                <tr>
                                    <th>Описание</th>
                                    <td>
                                        {{ $about['description'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Заголовок(1)</th>
                                    <td>
                                        {{ $about['first_title'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Содержание(1)</th>
                                    <td>
                                        {{ $about['first_content'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Заголовок(2)</th>
                                    <td>
                                        {{ $about['second_title'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Содержание(2)</th>
                                    <td>
                                        {{ $about['second_content'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Заголовок(3)</th>
                                    <td>
                                        {{ $about['third_title'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Содержание(3)</th>
                                    <td>
                                        {{ $about['third_content'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Основная картинка</th>
                                    <td>
                                        <img src="{!! $about['home_image'] !!}" alt="Основная картинка" width="200">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Внутренняя картинка</th>
                                    <td>
                                        <img src="{!! $about['inner_image'] !!}" alt="Внутренняя картинка" width="200">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Дата редактирования</th>
                                    <td>{{ $about['updated_at'] }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
