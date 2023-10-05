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
                     
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Responses</th>
                                        <th>Edit</th>
                                        <th>Answer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reclamations as $reclamation)
                                    <tr>
                                        <td>{{ $reclamation->id }}</td>
                                        <td>{{ $reclamation->title }}</td>
                                        <td>{{ $reclamation->description }}</td>
                                        <td>{{ $reclamation->status }}</td>
                                        <td>
                                            @foreach($reclamation->reponses as $reponse)
                                                {{ $reponse->description }}<br>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('reclamation.edit', ['reclamation' => $reclamation]) }}" class="btn btn-warning btn-rounded btn-sm my-0">Edit</a>
                                        </td>
                                    
<td>
    <a href="{{ route('reponse.create', ['reclamation_id' => $reclamation->id]) }}" class="btn btn-sm btn-success d-flex align-items-center">Add Response</a>
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
