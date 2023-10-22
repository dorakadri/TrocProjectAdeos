@extends('components.layout')
@section('content')

<div class="row ">
<div class="col-lg-8">
<div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white text-center mt-5"> My Association</h3>
            </div>
</div>
         <div class="card card-block card-stretch card-height blog blog-detail">
       
            <div class="card-body">
               <div class="image-block">
                  <img src="{{ asset('storage/'.$association->logo) }}"  class="img-fluid rounded w-100" alt="blog-img" loading="lazy">  
               </div>
               <a href="{{ route('associations.edit1', $association->id) }}" class="btn btn-warning btn-rounded btn-sm my-0">Edit  My Association</a>
     <a href="{{ route('contacts.create') }}" class="btn btn-success btn-rounded btn-sm my-3">Create New Contact</a>
               <div class="blog-description mt-3">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p><b>Name : </b>{{$association->name}}</p>
                    </diV>
                    <div class="col-md-6 col-sm-12">
                        <p><b>Description : </b>{{$association->description}}</p>
                    </diV>       

                </div>
                 
                  
                  <a href="#" class="d-flex align-items-center" tabindex="-1">Read More <i class="material-symbols-outlined md-14">arrow_forward_ios</i></a>
               </div>
            </div>

         </div>
         

</div>



<div class="col-lg-4">
         <div class="card card-block card-stretch card-height blog-post">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title"> Linked Contacts</h4>
               </div>
            </div>
         
@foreach($association->contact as $contact)
<div class="card-body">
   <ul class="list-inline p-0 mb-0 mt-2">
      
      <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
            <div class="col-md-7">
               <div class="blog-description mt-1 mt-md-0">
                  <div class="date mb-1"><a href="#" tabindex="-1">Contact Number</a></div>
                  <h6>{{$contact->number}}</h6>
                  <div class="date mb-1"><a href="#" tabindex="-1">Address</a>
                  <h6>{{$contact->address}}</h6>
               </div>
               </div>
            </div>
 
   </ul>
</div>
@endforeach
         </div>
      </div>


   

</div>


@endsection
