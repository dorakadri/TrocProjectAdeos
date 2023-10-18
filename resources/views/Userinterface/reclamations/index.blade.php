@extends('components.layout')
@section('content')
<style>
    .card-title {
    }

    .status {
        font-size: 20px;
        font-weight: bold; /* Customize font size for Status */
    }



    /* Add these two classes for red and green status */
    .status-not-treated {
        color: red;
    }

    .status-treated {
        color: green;
    }

    /* Add a border to the card */
 .card {
    border: 1px solid #06BFF1; /* Set the border color to #06BFF1 */
    border-radius: 5px; /* Optional: Add rounded corners */
}

</style>
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
                    <div class="card-body" style="min-height: 150px;"> <!-- Set a minimum height -->
                        <h3 class="card-title"> 
                            <span class="status 
                                @if($reclamation->status == 'not_treated') 
                                    status-not-treated
                                @else
                                    status-treated
                                @endif
                            ">
                                {{ $reclamation->status }}
                            </span>
                        </h3>
                        <h4 class="card-status"> {{ $reclamation->title }}</h4>

                        <p class="card-text">{{ $reclamation->description }}</p>
                        @foreach($reclamation->reponses as $reponse)
                        <p class="card-text">Responses: {{ $reponse->description }}</p>
                        @endforeach
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

@endsection
