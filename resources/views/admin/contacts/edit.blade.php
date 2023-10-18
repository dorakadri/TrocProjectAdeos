@extends('admin.components.layout')
@section('contentadmin')
<div class="container container-fluide px-5 py-5 " >

<form action="{{ route('contacts.update', ['contact' => $contact->id]) }}" method="post">
<div class="col-sm-12">
         <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
            <h3 class="text-white text-center mt-5"  > Edit Contact </h3>
              
            </div>
         </div>
      </div>
   
    @csrf
    @method('put')
    
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
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="association_id">Associations:</label>
                                        <select id="association_id" name="association_id" class="form-control">
                                            @foreach($associations as $association)
                                                <option value="{{ $association->id }}"
                                                        {{ $contact->association_id == $association->id ? 'selected' : '' }}>
                                                    {{ $association->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </li>
                            </ul>

                            <div class="form-group">
                                <label class="form-label" for="name">Phone Number</label>
                                <input type="text" class="form-control" name="number" placeholder="Number"
                                       value="{{ $contact->number }}">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="address">Local Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Local Address"
                                       value="{{ $contact->address }}">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update Contact</button>
            </div>
        </div>
    </div>
</div>
</form>

@endsection
