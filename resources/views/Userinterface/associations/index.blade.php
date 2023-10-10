@extends('components.layout')
@section('content')
 
    <div id="content-page" class="content-page">
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
               <h3 class="text-white"> Associations Area</h3>
              
            </div>
         </div>
      </div>
      <div class="col-sm-12">
         <!-- Editable table -->
         <div class="card">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
             List Associations
            </h3>
            <div class="card-body">
               <div id="table" class="table-editable">
                  <span class="table-add float-end mb-3 me-2">
                  </span>
                  <table class="table table-bordered table-responsive-md table-striped text-center">
                     <thead>
                        <tr>
                <th>Name</th>
                <th>Responsable</th>
                <th>Logo</th>
                <th>Edit</th>
                <th>Show</th>

                <th>Delete</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($associations as $association )
                <tr>
                    <td>{{$association->name}}</td>
                    <td>{{$association->responsable}}</td>
                    <td>  
                        <img src="{{ asset('logos/'.$association->logo) }}" alt="Association Logo" style="max-width: 100px;">
                    </td>
 
                              <td>
                      <a href="{{ route('associations.edit', $association->id) }}" class="btn btn-warning btn-rounded btn-sm my-0">Edit</a>

                    </td>
                    <td>
                      <a href="{{ route('associations.show', $association->id) }}" class="btn btn-primary btn-rounded btn-sm my-0">show</a>
                    </td>
                           <td>
                             <span class="table-remove">
    <form method="post" action="{{ route('associations.destroy', $association->id) }}">
        @csrf 
        @method('delete')
        <button type="submit" class="btn btn-danger btn-rounded btn-sm my-0">Delete</button>
    </form>
</span>

                           </td>
                              <td> </td>
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