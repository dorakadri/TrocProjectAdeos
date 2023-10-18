@extends('components.layout')
@section('content')

<div class="row">

                <div class=" d-flex  flex-column justify-content-center  align-items-center" style="height: 30rem; ">
                  <h3>No communities here yet! Be the first to create one</h3>
                  <a href="{{route('Community.create')}}" class="btn btn-primary  mt-4 ">
                    Create community
                     </a>  

                </div>
   @foreach ($communities as $community)            

        <div class="   col-md-4 col-sm-6 mb-3"   >
             <div class="card mb-0 ">
                         <div class="top-bg-image"  >
                         @if($community->image)
                         <img src="{{ asset('storage/' . $community->image) }}" class="img-fluid  w-100  " style="height: 7rem; object-fit: cover;" alt="group-bg"  >
                                    @else
                                         
                                        <img src="{{  asset('images/community/03.jpg') }}" class="img-fluid w-100" style="height: 7rem; object-fit: cover;" alt="group-bg">
 
 
                                    @endif
                          </div>
                <div class="card-body text-center">
                     
                    <div class="group-info mt-0">
                        
                        <h4><a href="{{route('Community.show',$community->id )}}">{{$community->name}}</a></h4>
                        <p  style="text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;">{{$community->description}}</p>
                    </div>
                    <div class="group-details d-inline-block pb-3">
                        <ul class="d-flex align-items-center justify-content-between list-inline m-0 p-0">
                            <li class="pe-3 ps-3">
                            <p class="mb-0">Post</p>
                            <h6>300</h6>
                            </li>
                            <li class="pe-3 ps-3">
                            <p class="mb-0">Member</p>
                            <h6>210</h6>
                            </li>
                            <li class="pe-3 ps-3">
                            <p class="mb-0">Visit</p>
                            <h6>1.1k</h6>
                            </li>
                        </ul>
                    </div>
                     
                    <button type="submit" class="btn btn-primary d-block w-100">Join</button>
                </div>
                
               
            </div>
                        
       </div> 
         @endforeach    
</div>
@endsection

