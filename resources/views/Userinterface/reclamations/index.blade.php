@extends('components.layout')
@section('content')

<div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px">
                    <div class="inner-page-title">
                        <h3 class="text-white">My reclamations</h3>
                    </div>
                </div>
            </div>
        </div>
                    <form action="{{ route('filter-reclamations') }}" method="GET">
            <div class="form-group">
                <label for="filter">Filter by Status:</label>
                <select name="filter" id="filter" class="form-control">
                    <option value="all">All</option>
                    <option value="treated">Treated</option>
                    <option value="not_treated">Not Treated</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
        </form>
        <div class="row mt-3">
       
            <div class="col-sm-12">
                <a href="{{ route('reclamation.create') }}" class="btn btn-sm btn-success ">+ Add Reclamation</a>
            </div>
        </div>
      <div class="row mt-3">
    @foreach($reclamations as $reclamation)
    <div class="col-sm-4 mb-3">
        <div class="card">
            <div class="card-body" style="min-height: 150px;">
                    <h4 class="card-status"> Date Création :</h4>
                  <p class="card-text">{{ $reclamation->created_at }}</p>
                <h3 class="card-title">
                    @if($reclamation->status == 'not_treated')
                        <span class="badge bg-danger ms-0 ms-md-3 my-1 my-md-0"> Status :{{ $reclamation->status }}</span>
                    @else
                        <span class="badge bg-success ms-0 ms-md-3 my-1 my-md-0">Status :{{ $reclamation->status }}</span>
                    @endif
                </h3>
                <h4 class="card-status"> Title:</h4>
                <p>{{ $reclamation->title }}</p>
                <h4 class="card-status"> Description:</h4>
                <p class="card-text">{{ $reclamation->description }}</p>
          
                <h4 class="card-status"> Responses:</h4>
                 <div class="response-container">
                @foreach($reclamation->reponses as $reponse)
                    <p class="card-text">{{ $reponse->description }}</p>
                @endforeach
                 </div>
            </div>
            <div class="card-footer text-center">
                <form method="post" action="{{ route('reclamation.destroy', ['reclamation' => $reclamation]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
        </div>
    </div>
</div>
<style>
    .response-container {
        min-height: 100px; /* Adjust the minimum height as needed */
    }
</style>
@endsection
