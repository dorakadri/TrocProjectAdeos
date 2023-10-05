@extends('admin.components.layout')
@section('contentadmin')
<div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                    <div class="inner-page-title">
                        <h3 class="text-white">Add Response</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card-body">
<form method="post" action="{{ route('reponse.store', ['reclamation_id' => $reclamation->id]) }}">

    @csrf
    
    <!-- Add a hidden field to store the Reclamation's ID -->
    <input type="hidden" name="reclamation_id" value="{{ $reclamation->id }}">
    
    <div class="form-group">
        <label class="form-label" for="description">Description</label>
        <input type="text" class="form-control" name="description" placeholder="Description">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
