@extends('components.layout')
@section('content')



    <!-- Mirrored from templates.iqonic.design/socialv/bs5/html/dist/dashboard/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Sep 2023 20:01:13 GMT -->



    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                        <div class="inner-page-title">
                            <h3 class="text-white"> Ajouter une donation</h3>
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

                <div class="col-sm-12 col-lg-12">
                    <div class="card-body">
                        <form action="{{ route('donations.add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPlaceholder">Titre</label>
                                <input type="text" name="titre" class="form-control" placeholder="titre">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPlaceholder">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="description">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPlaceholder">Photo</label>
                                <input type="file" name="photo" class="form-control" placeholder="photo"
                                    accept="image/*">

                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPlaceholder">Quantite</label>
                                <input type="number" name="quantite" class="form-control">
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlSelect1">Categorie</label>
                                    <select class="form-select" name="categorie">
                                        <option selected="" disabled="">categorie</option>
                                        <option value='vettements'> Vettements</option>
                                        <option value='electromenagers'> Electromenagers</option>
                                        <option value='livres'> livres</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <p>Etat</p>
                                    <div class="form-check radio form-check-inline">
                                        <input type="radio" name="etat" id="radio1" value="neuf">
                                        <label for="radio1">neuf</label>
                                    </div>
                                    <div class="form-check radio form-check-inline">
                                        <input type="radio" name="etat" id="radio2" value="usage">
                                        <label for="radio2">usage</label>
                                    </div>
                                    <div class="form-check radio form-check-inline">
                                        <input type="radio" name="etat" id="radio3" value="endommage">
                                        <label for="radio3">endommage</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p>Disponibilité</p>
                                    <div class="form-check radio form-check-inline">
                                        <input type="radio" name="disponibilite" id="radio1" value="disponible">
                                        <label for="radio1">Disponible</label>
                                    </div>
                                    <div class="form-check radio form-check-inline">
                                        <input type="radio" name="disponibilite" id="radio2" value="reserve">
                                        <label for="radio2">Réservé</label>
                                    </div>
                                    <div class="form-check radio form-check-inline">
                                        <input type="radio" name="disponibilite" id="radio3" value="retire">
                                        <label for="radio3">Retiré</label>
                                    </div>
                                </div>

                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('donations.index') }}"   class="btn btn-danger text-white">cancel</a>
                    </form>
                </div>
            </div>

        </div>
    </div>






@endsection
