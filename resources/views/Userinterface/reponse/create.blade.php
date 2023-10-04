@extends('components.layout')
@section('content')
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
                    <form method="post" action="{{ route('reponse.store') }}">
                        @csrf
                        @method('post')

                        <div class="form-group">
                            <label class="form-label" for="description">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Description">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="reclamation_id"> not treated Reclamations </label>
                            <select class="form-control" name="reclamation_id">
                                @foreach($reclamations as $reclamation)
                                <option value="{{ $reclamation->id }}">{{ $reclamation->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
