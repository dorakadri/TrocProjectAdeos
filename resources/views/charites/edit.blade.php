@extends('components.layout')
@section('content')

<div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                    <div class="inner-page-title">
                        <h3 class="text-white">Modifier une euvre de charite</h3>
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

            <div class="col-sm-12 col-lg-12">
                <div class="card-body">
                    <form action="{{ route('charites.update', ['charite'=>$charite]) }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Nom</label>
                            <input type="text" name="nom" class="form-control"  placeholder="nom" value="{{ old('charite', $charite->nom) }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Date</label>
                            <input type="date" name="date" class="form-control"  placeholder="date" value="{{ old('charite', $charite->date) }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Lieu</label>
                            <input type="text" name="lieu" class="form-control"  placeholder="lieu" value="{{ old('charite', $charite->lieu) }}">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Description</label>
                            <input type="text" name="description" class="form-control"  placeholder="description" value="{{ old('charite', $charite->description) }}">
                        </div>
                        <div class="card-body">

                        <div class="form-group">
                            <label class="form-label" for="exampleFormControlSelect1">Organisateur </label>
                            <select class="form-select" name="organisateur" placeholder="description" value="{{ old('charite', $charite->organisateur) }}">
                            <option selected="" disabled="">organisateur</option>
                            <option value='1'> test</option>

                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Bénéficiaire</label>
                            <input type="text" name="beneficiaire" class="form-control"  placeholder="beneficiaire" value="{{ old('charite', $charite->beneficiaire) }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Budget </label>
                            <input type="number" name="budget" class="form-control"  placeholder="budget " value="{{ old('charite', $charite->budget) }}">
                        </div>


                        <button type="submit" class="btn btn-primary">envoyer</button>
                        <button type="submit" class="btn btn-danger text-white">annuler</button>
                    </form>
                </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
@endsection