@extends('layouts.admin')
@section('title')
    Home
@endsection

@section('content')

            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" id="academic_list_table">
                            <div class="title-page">
                                <p>Application List</p>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title" id="stnd_portaninfo">
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped css-serial">
                                        <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Contact number</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        @foreach($users as $user)

                                            <tbody>

                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->contact_number}}</td>
                                                <td>{{$user->status}}</td>
                                            </tr>

                                            </tbody>
                                    @endforeach
                                    <!-- <tfoot>
                                                <tr>
                                                    <th>Rendering engine</th>
                                                    <th>Browser</th>
                                                    <th>Platform(s)</th>
                                                    <th>Engine version</th>
                                                    <th>CSS grade</th>
                                                </tr>
                                            </tfoot> -->
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>

@endsection
