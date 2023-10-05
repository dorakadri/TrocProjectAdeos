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
    <div class="row mt-3">
      <div class="col-sm-3">
        <span class="">
          <a href="{{ route('reclamation.create') }}" class="btn btn-sm btn-success d-flex align-items-center">+ Add Reclamation</a>
        </span>
      </div>
    </div>
    <div class="row mt-3">
      @foreach($reclamations as $reclamation)
      <div class="col-sm-3 mb-3">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Title: {{ $reclamation->title }}</h4>
            <h4 class="card-title">Status: {{ $reclamation->status }}</h4>
            <p class="card-text">Description: {{ $reclamation->description }}</p>
            @foreach($reclamation->reponses as $reponse)
            <p class="card-text"> Responses: {{ $reponse->description }}</p>
            @endforeach
          </div>
          <div class="card-footer">
            <form method="post" action="{{ route('reclamation.destroy', ['reclamation' => $reclamation]) }}">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger btn-sm float-right">Delete</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
