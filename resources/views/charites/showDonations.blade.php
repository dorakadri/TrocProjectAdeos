@extends('components.layout')
@section('content')

<div class="row">
<div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white"> Donations liee a la charite {{ $charite->nom }}</h3>
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

    @foreach($donations as $donation)
    <div class="col-md-6">
    
        <div class="card mb-4">
       
        <img src="{{ asset('storage/donations/'.$donation->photo) }}" class="card-img-top" alt="{{ $donation->photo }}" loading="lazy" style="width : auto ;height : 400px;">
            <div class="card-body">
                <h4 class="card-title">{{ $donation->titre }}</h4>
                <p class="card-text"><strong>Catégorie:</strong> {{ $donation->categorie }}</p>
                <p class="card-text">{{ $donation->description }}</p>

                <!-- Disponibilité -->
                <p class="card-text">
                    <strong>Disponibilité:</strong>
                    <span class="badge {{ $donation->disponibilite === 'disponible' ? 'bg-success' : ($donation->disponibilite === 'reserve' ? 'bg-warning' : 'bg-danger') }}">
                        {{ ucfirst($donation->disponibilite) }}
                    </span>
                </p>

                <!-- État -->
                <p class="card-text">
                    <strong>État:</strong>
                    <span class="badge {{ $donation->etat === 'neuf' ? 'bg-success' : ($donation->etat === 'usage' ? 'bg-warning' : 'bg-danger') }}">
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

@if ($donation->user_id == $user_id)
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('donations.edit', ['donation'=>$donation]) }}" class="btn btn-primary">Éditer</a>
                
                    <form action="{{ route('donations.deaffectCharite', ['donation' => $donation]) }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit" class="btn btn-danger">Désaffecter</button>
</form>
                </div>
@endif
            </div>
        </div>
    </div>
    @endforeach
</div>


</div>

    @endsection