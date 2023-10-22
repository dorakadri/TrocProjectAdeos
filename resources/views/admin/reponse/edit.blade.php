@extends('admin.components.layout')
@section('contentadmin')
<div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                    <div class="inner-page-title">
                        <h3 class="text-white">Edit Reponse Description</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card-body">
<form method="post" action="{{ route('reponse.update', ['reponse' => $reponse]) }}">
    @csrf
    @method('PUT') <!-- Add this line to specify the HTTP method -->
       <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <div class="form-group">
        <label class="form-label" for="description">Description</label>
        <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $reponse->description }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
