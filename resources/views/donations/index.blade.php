@extends('components.layout')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white"> Donations</h3>
                    <div>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
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
        @foreach ($donations as $donation)
            <div class="col-md-6">

                <div class="card mb-4">

                    <img src="{{ asset('storage/donations/' . $donation->photo) }}" class="card-img-top"
                        alt="{{ $donation->photo }}" loading="lazy" style="width : auto ;height : 400px;">
                    <div class="card-body">
                        <h4 class="card-title">{{ $donation->titre }}</h4>
                        <p class="card-text"><strong>Catégorie:</strong> {{ $donation->categorie }}</p>
                        <p class="card-text">{{ $donation->description }}</p>

                        <!-- Disponibilité -->
                        <p class="card-text">
                            <strong>Disponibilité:</strong>
                            <span
                                class="badge {{ $donation->disponibilite === 'disponible' ? 'bg-success' : ($donation->disponibilite === 'reserve' ? 'bg-warning' : 'bg-danger') }}">
                                {{ ucfirst($donation->disponibilite) }}
                            </span>
                        </p>

                        <!-- État -->
                        <p class="card-text">
                            <strong>État:</strong>
                            <span
                                class="badge {{ $donation->etat === 'neuf' ? 'bg-success' : ($donation->etat === 'usage' ? 'bg-warning' : 'bg-danger') }}">
                                {{ ucfirst($donation->etat) }}
                            </span>
                        </p>

                        <p class="card-text"><strong>Quantité disponible:</strong> {{ $donation->quantite }}</p>

                        

                        <!-- Boutons d'édition et de suppression -->
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    </div>

@endsection
