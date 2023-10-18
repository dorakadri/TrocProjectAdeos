@extends('admin.components.layout')
@section('contentadmin')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                        <div class="inner-page-title">
                            <h3 class="text-white">Reclamations Area</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- Editable table -->
                    <div class="card">
                        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
                            ALL Reclamations
                        </h3>
                        <div class="card-body">
                            <div id="table" class="table-editable">
                                <!-- Add this button code inside your Blade view -->
                                <a href="{{ url('generate-pdf') }}" class="btn btn-primary">Generate PDF</a>

                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                        <tr>

                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Responses</th>
                                            <th>Edit</th>
                                            <th>Answer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reclamations as $reclamation)
                                            <tr>

                                                <td>{{ $reclamation->title }}</td>
                                                <td>{{ $reclamation->description }}</td>
                                                <td>{{ $reclamation->status }}</td>
                                                <td>
                                                    @foreach ($reclamation->reponses as $reponse)
                                                        {{ $reponse->description }}<br>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{ route('reclamation.edit', ['reclamation' => $reclamation]) }}"
                                                        class="btn btn-warning btn-rounded btn-sm my-0">Edit</a>
                                                </td>

                                                <td>
                                                    <a href="{{ route('reponse.createbyid', ['reclamation_id' => $reclamation->id]) }}"
                                                        class="btn btn-sm btn-success ">Add Response</a>
                                                     
                                                </td>



                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
