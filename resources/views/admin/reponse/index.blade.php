@extends('admin.components.layout')
@section('contentadmin')

<div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                    <div class="inner-page-title">
                        <h3 class="text-white">Reclamations' response</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <!-- Editable table -->
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
                        Responses
                    </h3>
                    <div class="card-body">
                        <div id="table" class="table-editable">
                       
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                    <tr>
                                    
                                        <th>description</th>
                                        <th>reclamation</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reponses as $reponse)
                                    <tr>
                                       
                                        <td>{{ $reponse->description }}</td>
                                        <td>{{ $reponse->reclamation->title }}</td>

                                        <td>
                                            <a href="{{ route('reponse.edit', ['reponse' => $reponse]) }}" class="btn btn-warning btn-rounded btn-sm my-0">Edit</a>
                                        </td>
                                        <td>
                                            <span class="table-remove">
                                                <form method="post" action="{{ route('reponse.destroy', ['reponse' => $reponse]) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-rounded btn-sm my-0">Delete</button>
                                                </form>
                                            </span>
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
