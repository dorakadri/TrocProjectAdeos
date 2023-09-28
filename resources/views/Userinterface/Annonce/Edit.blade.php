
@extends('components.layout')
@section('content')
<div class="modal-body">
    <form action="{{ route('Annonce.update' , $annonce->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group row mb-3">
            <label class="col-sm-2 align-self-center mb-0">Title:</label>
            <div class="col-sm-8">
              <input class="form-control" value="{{$annonce->title}}" name="title" placeholder="Give your Post a Title" name="postTitle" />
            </div>
          </div>
        <div class="form-group row mb-3">
            <label class="col-sm-2 align-self-center mb-0">description:</label>
            <div class="col-sm-8">
                <input type="text" name="description" value="{{$annonce->description}}" class="form-control" placeholder="Write something here..." />
            </div>
          </div>


      <ul class="d-flex flex-wrap justify-content-between list-inline m-0 p-0">
          <li class="col-md-12 mb-2 ">
           
                  <div class=" mb-3    ">
                    <input type="file" name="imageannonce" class="form-control" id="inputGroupFile02">
                    <label class="col-sm-2 align-self-center my-2">previous picture:</label>
                      <div class="img-thumbnail w-50">
                        <a href="javascript:void(0);">
                           @if (str_starts_with($annonce->image, 'http') || str_starts_with($annonce->image, 'https://'))
                               <img src="{{ $annonce->image }}" alt="post-image" class="img-fluid rounded w-100" loading="lazy">
                           @else
                               <img src="{{ asset('storage/' . $annonce->image) }}" alt="post-image" class="img-fluid rounded w-100" loading="lazy">
                           @endif
                       </a>
                      </div>
                    </div>
            
            </li>
            <li class="col-md-5 mb-3">
                <label class="form-label" for="exchangeType">Exchange type</label>
                <select class="form-select me-3" name="echangetype" aria-label="Default select example">
                    <option disabled>Choose Type of exchange</option>
                    <option value="ob_ob" {{ $annonce->exchangeType === 'ob_ob' ? 'selected' : '' }}>Object against Object</option>
                    <option value="ob_serv" {{ $annonce->exchangeType === 'ob_serv' ? 'selected' : '' }}>Object against Service</option>
                    <option value="donate" {{ $annonce->exchangeType === 'donate' ? 'selected' : '' }}>Donation</option>
                </select>
            </li>
            
        <li class="col-md-5 mb-3">
          <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
          <input type="text" value="{{$annonce->tags}}"  class="form-control rounded ml-3" name="tags" placeholder="Example: Wood, Table, etc" />
        </li>
      </ul>
      <div class="d-flex gap-3">
        <button  class="btn btn-primary d-block w-100 mt-3">Save</button>
        
        <a href="{{ route('Annonce.index') }}" class="btn btn-dark d-block w-100 mt-3">Back</a>

     
    </form>
    
</div> 
</div>
@endsection