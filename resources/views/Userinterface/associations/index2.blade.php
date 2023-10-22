@extends('components.layout')
@section('content')
@foreach($associations as $association )

<div class="row">
      <div class="col-lg-8">
         <div class="card card-block card-stretch card-height blog blog-detail">
         <div class="col-sm-12">
                <a href="{{ route('associations.create') }}" class="btn btn-sm btn-success ">+ Add association</a>
            </div>
            <div class="card-body">
               <div class="image-block">
                   <img src="{{ asset('storage/'.$association->logo) }}"  class="img-fluid rounded w-100" alt="blog-img" loading="lazy">  
               </div>
               <div class="blog-description mt-3">
                  <h2 class="mb-3 pb-3 border-bottom">Responsable:  {{$association->user->name}} </h2>
                     <h5>
                       More Info:
                       <h4>{{$association->user->phone}}</h4>
                         <h4>{{$association->user->email}}</h4>
                     </h5>
                    
                  <div class="blog-meta d-flex align-items-center mb-3 position-right-side flex-wrap">
                     <div class="date me-4 d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">calendar_month</i>2 Weeks ago</div>
                     <div class="like me-4 d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">
                        thumb_up_alt
                        </i>20 like
                     </div>
                     <div class="comments me-4 d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">
                        mode_comment
                        </i>82 comments
                     </div>
                     <div class="share d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18 text-primary">
                        share
                        </i>share
                     </div>
                  </div>
                  <p>
                  {{$association->description}} 
                  </p>
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
                  <li class="mb-3">
                     <div class="row align-items-top pb-3 border-bottom">
                        <div class="col-md-5">
                           <div class="image-block">
                               <img src="{{ asset('storage/'.$association->logo) }}"  class="img-fluid rounded w-100" alt="blog-img" loading="lazy">  
                           </div>
                        </div>
                        <div class="col-md-7">
                           <div class="blog-description mt-1 mt-md-0">
                              <div class="date mb-1"><a href="#" tabindex="-1">Contact Number</a></div>
                              <h6>{{$contact->number}}</h6>
                              <div class="date mb-1"><a href="#" tabindex="-1">Address</a>
                              <h6>{{$contact->address}}</h6>

                           </div>
                           </div>
                        </div>
                     </div>
                  </li>
                 
                  
                 
                
                 
               </ul>
            </div>
            @endforeach
         </div>
      </div>
   
   </div>
   @endforeach

@endsection

