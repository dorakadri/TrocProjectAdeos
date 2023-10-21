@extends('components.layout')
@section('content')

<div class="row">
                @if(count($communities) == 0)
                <div class=" d-flex  flex-column justify-content-center  align-items-center" style="height: 30rem; ">
                  <h3>No communities here yet! Be the first to create one</h3>
                  <a href="{{route('Community.create')}}" class="btn btn-primary  mt-4 ">
                    Create community
                     </a>  

                </div>
                @endif
   @foreach ($communities as $key => $community )            

        <div class="   col-md-4 col-sm-6 mb-3"   >
        <ul class="header-nav list-inline d-flex flex-wrap justify-end p-0 mx-5 mb-0" style="right:0; top:21rem;">
                        <li>
                        <button type="button" class="btn btn-dark ms-2 btn-sm d-flex align-items-center"
                         onclick="window.location.href='{{ route('Community.create') }}'">

                        <span class="material-symbols-outlined  md-16">
                              add
                              </span> Create community   </button>
                        </li>
                        
                     </ul>
             <div class="card mb-0   " >
  
                         <div class="top-bg-image"  style="cursor: pointer;"
                onclick="window.location.href='{{route('Community.show',$community->id )}}'" >
                         @if($community->image)
                         <img src="{{ asset('storage/' . $community->image) }}" class="img-fluid  w-100  " style="height: 7rem; object-fit: cover;" alt="group-bg"  >
                                    @else
                                         
                                        <img src="{{  asset('images/community/100.jpg') }}" class="img-fluid w-100" style="height: 7rem; object-fit: cover;" alt="group-bg">
 
 
                                    @endif
                          </div>
                <div class="card-body text-center"  style="cursor: pointer;"
                onclick="window.location.href='{{route('Community.show',$community->id )}}'" >
                     
                    <div class="group-info mt-0">
                        
                        <h4><a href="{{route('Community.show',$community->id )}}">  {{$community->name}}</a></h4>
                        <p  style="text-overflow: ellipsis;
                            overflow: hidden;
                            white-space: nowrap;">{{$community->description}}</p>
                    </div>
                    <div class="group-details d-inline-block pb-3">
                        <ul class="d-flex align-items-center justify-content-between list-inline m-0 p-0">
                            <li class="pe-3 ps-3">
                            <p class="mb-0">Events</p>
                            <h6>{{ $eventCount[$key] }}</h6>
                            </li>
                            <li class="pe-3 ps-3">
                            <p class="mb-0">Members</p>
                            <h6> {{ $userCount[$key] }}</h6>
                            </li>
                            
                        </ul>
                    </div>
                  
                    

                </div>
                <div class="card-footer"> @if($isJoined[$key])
                        <button type="submit" class="btn btn-primary d-block w-100"
                        onclick="window.location.href='{{ route('leave-community', ['communityId' => $community->id]) }}'" >Joined</button>
                        @else
                        <button type="submit" class="btn btn-primary d-block w-100"
                        onclick="window.location.href='{{ route('join-community', ['communityId' => $community->id]) }}'" >Join</button>
                        @endif</div>
 
                       
                
               
            </div>
                        
       </div> 
         @endforeach    
</div>
@endsection

