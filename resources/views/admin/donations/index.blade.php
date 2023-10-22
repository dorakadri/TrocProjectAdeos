@extends('admin.components.layout')
@section('contentadmin')
 
    <div id="content-page" class="content-page">
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
            <h3 class="text-white text-center mt-5"  >  Donations </h3>
              
            </div>
         </div>
      </div>
      <div class="col-sm-12">


         <!-- Editable table -->
         <div class="card">
            
            <div class="card-body">
               <div id="table" class="table-editable">
                  <span class="table-add float-end mb-3 me-2">
                  </span>
                  <table class="table table-bordered table-responsive-md table-striped text-center">
                     <thead>
                        <tr>
                <th>Photo</th>  
                <th>Titre</th>
                <th>Categorie</th>
                <th>Etat</th>
                <th>Quantite</th>
                <th>Disponibilité</th>
                <th>proprietaire</th>
                <th>charite</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($donations as $donation )
                <tr>
                        <td>  
                        <img src="{{ asset('storage/donations/'.$donation->photo) }}" alt="donation Logo" style="max-width: 100px;">
                    </td>
                    <td>{{$donation->titre}}</td>
                    <td>{{$donation->categorie}}</td>
                    <td>{{$donation->etat}}</td>
                    <td>{{$donation->quantite}}</td>
                    <td>{{$donation->disponibilite}}</td>
                    <td>{{$donation->user->name}}</td>
                    <td>@if ($donation->charite) 
                       {{ $donation->charite->nom }}
                         @else
                         Pas d'association
                        @endif
                     </td>
                        </tr>
                          @endforeach
                     </tbody>
                  </table>

               </div>
               <form method="GET" action="{{ route('admin.donations.index3') }}" class="mb-3">
   @csrf
   <button type="submit" class="btn btn-primary">Trier par Oeuvre de charite</button>
   <div class="form-check form-check-inline">
      <input type="radio" id="sort_by_charite_asc" name="sort_by_charite" value="asc" class="form-check-input">
      <label for="sort_by_charite_asc" class="form-check-label">Croissant</label>
   </div>
   <div class="form-check form-check-inline">
      <input type="radio" id="sort_by_charite_desc" name="sort_by_charite" value="desc" class="form-check-input">
      <label for="sort_by_charite_desc" class="form-check-label">Décroissant</label>
   </div>
   
</form>
            </div>
         </div>
      </div>
   </div>
</div>
    </div>
  </div>

  @endsection