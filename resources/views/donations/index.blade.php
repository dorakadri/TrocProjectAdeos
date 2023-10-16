@extends('components.layout')
@section('content')

<div class="row">
<div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white"> Donations</h3>
                    <div>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach <!-- Fermez la boucle foreach ici -->
    </ul>
    @endif <!-- Fermez la condition if ici -->
                    </div>
                </div>
                </div>
            </div>
<div class="col-md-12 mb-4 d-flex justify-content-end">
    <a href="{{ route('donations.create') }}" class="btn btn-success">Créer un nouveau don</a>
</div>
    @foreach($donations as $donation)
    <div class="col-md-6">
    
        <div class="card mb-4">
       
        <img src="{{ asset('donations/'.$donation->photo) }}" class="card-img-top" alt="{{ $donation->photo }}" loading="lazy">
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
                    <span class="badge badge-{{ $donation->etat === 'neuf' ? 'success' : ($donation->etat === 'usage' ? 'warning' : 'danger') }}">
                        {{ ucfirst($donation->etat) }}
                    </span>
                </p>

                <p class="card-text"><strong>Quantité disponible:</strong> {{ $donation->quantite }}</p>

                <div class="card-body">


    @if ($donation->charite_id === null)

        <form action="{{ route('donations.chooseCharite', ['donation' => $donation]) }}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-md-10">
                    <select name="charite_id" id="charite_id" class="form-control">
                        <option value="">Affecter à une œuvre de charité</option>
                        @foreach ($charites as $charite)
                            <option value="{{ $charite->id }}">{{ $charite->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Affecter</button>
                </div>
            </div>
        </form>
    @endif
</div>

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