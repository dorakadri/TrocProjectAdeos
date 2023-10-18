@extends('components.layout')
@section('content')

<form action="{{ route('contacts.store') }}" method="POST">

   

                    <div class="card-body">
                  
                    <div id="content-page" class="content-page">
          <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
                            <div class="tab-content pt-4 pb-2" id="nav-tabContent">                                
                                <div class="row tab-pane fade show active" id="user-detail">
                                    <div class="col-sm-12">
                                        <div class="col-md-12 p-0">
                                            <h3 class="mb-4">Association Contact Information:</h3>
                                            <ul class="list-group">

                        <li class="list-group-item">
                                @csrf
                                @method('post')
                                <div class="form-group">
                                    <label for="association_id">Associations:</label>
                                    <select id="association_id" name="association_id" class="form-control">
                                        @foreach($associations as $association)
                                            <option value="{{ $association->id }}">{{ $association->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                        </li>
                        
                         </ul>


                       <div class="form-group">
                            <label class="form-label" for="name">Phone Number</label>
                            <input type="text" class="form-control" name="number" placeholder="Number">
                        </div>
                                               
                        <div class="form-group">
                            <label class="form-label" for="address">Local Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Local Adrdess">
                        </div>
                                            
                                
                            
                             
                               
                            </div>
                           
                            </div>
                            <button type="submit" class="btn btn-primary">Create Contact</button>



                   
</form>
@endsection