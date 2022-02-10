@extends('layouts.admin_layout')

@section('title', 'Контакты')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Контакты</h1>
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
                            <a class="btn btn-primary mt-xs-1" href="{{ route('contact.edit',1) }}">
                                <i class="fa fa-pencil-alt mr-1"></i>
                                Изменить                        </a>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane show active">
                                <table class="table table-striped detail-view">
                                    <tbody>
                                    <tr>
                                        <th>Адрес</th>
                                        <td>
                                            {{ $contact['address'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Режим работы</th>
                                        <td>
                                            {{ $contact['operating_mode'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Телефон</th>
                                        <td>
                                            {{ $contact['phone'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Почта</th>
                                        <td>
                                            {{ $contact['email'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Whatsapp</th>
                                        <td>
                                            {{ $contact['whatsapp'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Youtube</th>
                                        <td>
                                            {{ $contact['youtube'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Instagram</th>
                                        <td>
                                            {{ $contact['instagram'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Facebook</th>
                                        <td>
                                            {{ $contact['facebook'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Дата редактирования</th>
                                        <td>{{ $contact['updated_at'] }} </td>
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
