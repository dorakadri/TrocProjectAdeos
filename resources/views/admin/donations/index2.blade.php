@extends('admin.components.layout')
@section('contentadmin')
 
    <div id="content-page" class="content-page">
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
            <h3 class="text-white text-center mt-5"  > Oeuvres de Charites </h3>
              
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
                <th>Nom</th>  
                <th>Date</th>
                <th>Lieu</th>
                <th>Organisateur</th>
                <th>Description</th>
                <th>Beneficiaire</th>
                <th>Budget</th>
               

               
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($charites as $charite )
                <tr>
                        
                    <td>{{$charite->nom}}</td>
                    <td>{{$charite->date}}</td>
                    <td>{{$charite->lieu}}</td>
                    <td> @if ($charite->organisateur)
                            <?php $organisateur = App\Models\User::find($charite->organisateur); ?>
                            @if ($organisateur)
                                {{ $organisateur->name }}
                            @else
                                Aucun organisateur défini
                            @endif
                        @else
                            Aucun organisateur défini
                        @endif</td>
                    <td>{{$charite->description}}</td>
                    <td>{{$charite->beneficiaire}}</td>
                    <td>{{$charite->budget}}</td>

                        </tr>
                          @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
    </div>
  </div>

  @endsection