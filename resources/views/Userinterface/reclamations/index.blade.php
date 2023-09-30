  @extends('components.layout')
@section('content')
 
    <div id="content-page" class="content-page">
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
               <h3 class="text-white"> Reclamations Area</h3>
              
            </div>
         </div>
      </div>
      <div class="col-sm-12">
         <!-- Editable table -->
         <div class="card">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
             My Reclamations
            </h3>
            <div class="card-body">
               <div id="table" class="table-editable">
                  <span class="table-add float-end mb-3 me-2">

                  <a href="{{ route('reclamation.create') }}" class="btn btn-sm btn-success d-flex align-items-center">+ Add Reclamation</a>

                  </span>
                  <table class="table table-bordered table-responsive-md table-striped text-center">
                     <thead>
                        <tr>
                            <th>ID</th>
                <th>Title</th>
                <th>description</th>
                <th>status</th>
                <th>Edit</th>
                <th>Delete</th>
                   <th>Answer</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($reclamations as $reclamation )
                <tr>
                    <td>{{$reclamation->id}}</td>
                    <td>{{$reclamation->title}}</td>
                    <td>{{$reclamation->description}}</td>
                    <td>{{$reclamation->status}}</td>
 
                              <td>
                      <a href="{{ route('reclamation.edit', ['reclamation' => $reclamation]) }}" class="btn btn-warning btn-rounded btn-sm my-0">Edit</a>

                    </td>
                           <td>
                             <span class="table-remove">
    <form method="post" action="{{ route('reclamation.destroy', ['reclamation' => $reclamation]) }}">
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