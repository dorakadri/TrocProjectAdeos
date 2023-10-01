@extends('components.layout')
@section('content')
<div class="row">
    @foreach($donations as $donation)
    <div class="col-md-6">
        <div class="card mb-4">
            <img src="{{ asset('chemin/vers/le/dossier/images/' . $donation->photo) }}" class="card-img-top" alt="{{ $donation->titre }}" loading="lazy">
            <div class="card-body">
                <h4 class="card-title">{{ $donation->titre }}</h4>
                <p class="card-text"><strong>Catégorie:</strong> {{ $donation->categorie }}</p>
                <p class="card-text">{{ $donation->description }}</p>

                <!-- Disponibilité -->
                <p class="card-text">
                    <strong>Disponibilité:</strong>
                    <span class="badge badge-{{ $donation->disponibilite === 'disponible' ? 'success' : ($donation->disponibilite === 'reserve' ? 'warning' : 'danger') }}">
                        {{ ucfirst($donation->disponibilite) }}
                    </span>
                </p>

                <!-- État -->
                <p class="card-text">
                    <strong>État:</strong>
                    <span class="badge badge-{{ $donation->etat === 'neuf' ? 'success' : ($donation->etat === 'usagé' ? 'warning' : 'danger') }}">
                        {{ ucfirst($donation->etat) }}
                    </span>
                </p>

                <p class="card-text"><strong>Quantité disponible:</strong> {{ $donation->quantite }}</p>

                <!-- Boutons d'édition et de suppression -->
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('donations.edit', ['donation'=>$donation]) }}" class="btn btn-primary">Éditer</a>
                
                    <form action="{{ route('donations.delete', ['donation'=>$donation]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>








</div>
    
@endsection