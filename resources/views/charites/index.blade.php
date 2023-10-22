@extends('components.layout')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white">Œuvres de charité</h3>
                <div>
                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @foreach($charites as $charite)
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="{{ asset('charites/'.$charite->photo) }}" class="card-img-top" alt="{{ $charite->photo }}" loading="lazy" 
             >
                <div class="card-body">
                    <h2 class="card-title">{{ $charite->nom }}</h2>
                    <p class="card-text"><strong>Date:</strong> {{ $charite->date }}</p>
                    <p class="card-text">{{ $charite->description }}</p>
                    
                    <p><strong>Organisateur :</strong>
                        @if ($charite->organisateur)
                            <?php $organisateur = App\Models\User::find($charite->organisateur); ?>
                            @if ($organisateur)
                                {{ $organisateur->name }}
                            @else
                                Aucun organisateur défini
                            @endif
                        @else
                            Aucun organisateur défini
                        @endif
                    </p>
                    
                    <p><strong>Bénéficiaire :</strong>{{ ucfirst($charite->beneficiaire) }}</p>
                    <p><strong>Budget:</strong> {{ $charite->budget }}</p>

                    <!-- Bouton pour éditer l'œuvre de charité -->
                    <div class="d-flex justify-content-between align-items-center">
                        
                        
                        <!-- Formulaire pour afficher les donations liées à l'œuvre de charité -->
                        <form action="{{ route('charites.showDonations', ['charite' => $charite]) }}" method="post" class="mb-0">
                            @csrf
                            <button type="submit" class="btn btn-info">Donations liées</button>
                        </form>

                        <!-- Formulaire pour supprimer l'œuvre de charité -->
                        
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>



@endsection
