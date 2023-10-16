@extends('components.layout')
@section('content')



<!-- Mirrored from templates.iqonic.design/socialv/bs5/html/dist/dashboard/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Sep 2023 20:01:13 GMT -->



    <div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white"> Ajouter un evenement de charité</h3>
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
                    <form action="{{route('charites.add')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('post')
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Nom</label>
                            <input type="text" name="nom" class="form-control"  placeholder="nom">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Date</label>
                            <input type="date" name="date" class="form-control"  placeholder="date">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Lieu</label>
                            <input type="text" name="lieu" class="form-control"  placeholder="lieu">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Description</label>
                            <input type="text" name="description" class="form-control"  placeholder="description">
                        </div>
                        <div class="card-body">

                        
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Bénéficiaire</label>
                            <input type="text" name="beneficiaire" class="form-control"  placeholder="beneficiaire">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">Budget </label>
                            <input type="number" name="budget" class="form-control"  placeholder="budget ">
                        </div>


                        <button type="submit" class="btn btn-primary">envoyer</button>
                        <button type="submit" class="btn btn-danger text-white">annuler</button>
                    </form>
                </div>
                </div>
            
            </div>
        </div>
   
    
  <!-- Wrapper End-->
  <!-- offcanvas start -->
 

     
@endsection