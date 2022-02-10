@extends('layouts.admin_layout')

@section('title', 'Команда')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Член команды - {{ $team['first_name'] }}</h1>
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
                            <a class="btn btn-info btn-sm" href="{{ route('team.edit', $team['id']) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Редактировать
                            </a>

                            <form action="{{ route('team.destroy', $team['id']) }}" method="POST" class="d-inline">
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
                                        <th>Фамилия</th>
                                        <td>{{$team->last_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Имя</th>
                                        <td>{{$team->first_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Отчество</th>
                                        <td>
                                            {{$team->middle_name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Должность</th>
                                        <td>
                                            {{$team->position}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Телефон</th>
                                        <td>
                                            {{ $team->phone }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Ссылка на Telegram</th>
                                        <td>
                                            {{ $team->telegram }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Ссылка на Whatsapp</th>
                                        <td>
                                            {{ $team->whatsapp }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Аватар</th>
                                        <td>
                                            <img src="http://kusto-help/storage/teams/cTNPI2962QkqmOZb0wwdaWYElCQEqDuv0TxlWnh6.jpg" alt="Аватар" width="150">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Дата создания</th>
                                        <td>{{ $team->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Дата редактирования</th>
                                        <td>{{ $team->updated_at }}</td>
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
