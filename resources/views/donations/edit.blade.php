@extends('components.layout')
@section('content')

<div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                    <div class="inner-page-title">
                        <h3 class="text-white">Modifier une donation</h3>
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

            <div class="col-sm-12 col-lg-12">
                <div class="card-body">
                    <form action="{{ route('donations.update', ['donation'=>$donation]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Titre</label>
                            <input type="text" name="titre" class="form-control" placeholder="Titre" value="{{ old('titre', $donation->titre) }}">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Description" value="{{ old('description', $donation->description) }}">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Photo</label>
                            <input type="file" name="photo" class="form-control"  placeholder="photo" accept="image/*">
                          
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Quantité</label>
                            <input type="number" name="quantite" class="form-control" value="{{ old('quantite', $donation->quantite) }}">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="exampleFormControlSelect1">Catégorie</label>
                            <select class="form-select" name="categorie">
                                <option selected disabled>Catégorie</option>
                                <option value='vettements' {{ old('categorie', $donation->categorie) === 'vettements' ? 'selected' : '' }}>Vêtements</option>
                                <option value='electromenagers' {{ old('categorie', $donation->categorie) === 'electromenagers' ? 'selected' : '' }}>Électroménagers</option>
                                <option value='livres' {{ old('categorie', $donation->categorie) === 'livres' ? 'selected' : '' }}>Livres</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <p>État</p>
                            <div class="form-check radio form-check-inline">
                                <input type="radio" name="etat" id="radio1" value="neuf" {{ old('etat', $donation->etat) === 'neuf' ? 'checked' : '' }}>
                                <label for="radio1">Neuf</label>
                            </div>
                            <div class="form-check radio form-check-inline">
                                <input type="radio" name="etat" id="radio2" value="usage" {{ old('etat', $donation->etat) === 'usage' ? 'checked' : '' }}>
                                <label for="radio2">Usage</label>
                            </div>
                            <div class="form-check radio form-check-inline">
                                <input type="radio" name="etat" id="radio3" value="endommage" {{ old('etat', $donation->etat) === 'endommage' ? 'checked' : '' }}>
                                <label for="radio3">Endommagé</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <p>Disponibilité</p>
                            <div class="form-check radio form-check-inline">
                                <input type="radio" name="disponibilite" id="radio1" value="disponible" {{ old('disponibilite', $donation->disponibilite) === 'disponible' ? 'checked' : '' }}>
                                <label for="radio1">Disponible</label>
                            </div>
                            <div class="form-check radio form-check-inline">
                                <input type="radio" name="disponibilite" id="radio2" value="reserve" {{ old('disponibilite', $donation->disponibilite) === 'reserve' ? 'checked' : '' }}>
                                <label for="radio2">Réservé</label>
                            </div>
                            <div class="form-check radio form-check-inline">
                                <input type="radio" name="disponibilite" id="radio3" value="retire" {{ old('disponibilite', $donation->disponibilite) === 'retire' ? 'checked' : '' }}>
                                <label for="radio3">Retiré</label>
                            </div>
                        </div>

                        <!-- Boutons -->
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <a href="{{ route('donations.index') }}" class="btn btn-danger text-white">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection