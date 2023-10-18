@extends('components.layout')
@section('content')
 
<div id="content-page" class="content-page">
   <div class="container">
      <div class="row">
         <!-- ... -->
         <div class="col-sm-12">
            <!-- Editable table -->
            <div class="card">
               <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
                  List Contacts
               </h3>
               <div class="card-body">
                  <div id="table" class="table-editable">
                     <span class="table-add float-end mb-3 me-2">
                     </span>
                     <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                           <tr>
                              <th>Association Name</th> <!-- Display association name -->
                              <th>Number</th>
                              <th>Address</th>
                              <th>Edit</th>
                              <th>Show</th>
                              <th>Delete</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($contacts as $contact)
                           <tr>
                              <td>{{ $contact->association->name }}</td> <!-- Display association name -->
                              <td>{{ $contact->number }}</td>
                              <td>{{ $contact->address }}</td>
                              <td>
                                 <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-rounded btn-sm my-0">Edit</a>
                              </td>
                              <td>
                                 <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-primary btn-rounded btn-sm my-0">Show</a>
                              </td>
                              <td>
                                 <span class="table-remove">
                                    <form method="post" action="{{ route('contacts.destroy', $contact->id) }}">
                                       @csrf 
                                       @method('delete')
                                       <button type="submit" class="btn btn-danger btn-rounded btn-sm my-0">Delete</button>
                                    </form>
                                 </span>
                              </td>
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

@endsection
