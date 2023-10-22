
@extends('components.layout')
@section('content')

<div class="position-relative">
</div>
<div id="content-page" class="content-page">
  <div class="container">
        <div class="row">
            <div class="col-lg-8 row m-0 p-0">
                <div class="col-sm-12">
                  @include('Userinterface.Annonce.create')
         </div>
         @unless (count($annonces)==0)


         @foreach ($annonces as $annonce )

       <x-Annonce-card  :annonce="$annonce" />
        @endforeach
        
        @else 
        <p>no Annonce found</p>
        @endunless 
       </div>
       <div class="col-lg-4">
         <div class="card">
           <div class="card-header d-flex justify-content-between">
             <div class="header-title">
               <h4 class="card-title">Events</h4>
             </div>
           </div>
           <div class="card-body">
           <ul class="suggestions-lists m-0 p-0">
                                    <!-- <li class="d-flex mb-4 align-items-center">
                                          <div class="add-new-project ">
                                              <a href="{{route('Event.create')}}" class="d-flex align-items-center nrw-project"><i class="material-symbols-outlined me-2">
                                              add
                                              </i>Add event</a>
                                            </div>
                                    </li> -->
                                    @foreach ($events as $event )

                                          <li class="d-flex   p-2 align-items-center justify-content-between onhover " 
                                           >
                                          <a  href="#" class="d-flex align-items-center">
                                            <div class="user-img img-fluid">
                                              
                                            @if($event->image)
                                              <img src="{{asset('storage/' . $event->image)}}" alt="story-img" class="rounded-circle avatar-40"></div>
      
                                                @else
                                                <img src="{{asset('images/community/100.jpg')}}" alt="story-img" class="rounded-circle avatar-40"></div>

                                                
                                                @endif

                                              <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                  <div class="ms-3">
                                                  <p class="mb-0 text-danger "> 
                                                  {{ date('M d H:i', strtotime($event->start_time)) }} - {{ date('M d H:i', strtotime($event->end_time)) }}
                                                    </p>

                                                      <h6>{{$event->title}}</h6>
                                                  </div>
                                                    
                                                </div>
                                            </div>
                                            </a>
                                          </li>
                                   
                                    @endforeach
                                     
                                    
                                 </ul>
             <a href="{{ route('Event.index') }}" class="btn btn-primary d-block mt-3">See More</a>
           </div>
         </div>
        
         <div class="card">
           <div class="card-header d-flex justify-content-between">
             <div class="header-title">
               <h4 class="card-title">Suggested Communities</h4>
             </div>
              
           </div>
           <div class="card-body">
            

                         <ul class="suggestions-lists m-0 p-0">
                                    <!-- <li class="d-flex mb-4 align-items-center">
                                      <div class="add-new-project ">
                                        <a href="{{route('Community.create')}}" class="d-flex align-items-center nrw-project"><i class="material-symbols-outlined me-2">
                                        add
                                        </i>Add community</a>
                                      </div>
                                    </li> -->
                                    @foreach ($communities as $community )

                                    <li class="d-flex  p-2 align-items-center justify-content-between onhover"
                                    onclick="window.location.href='{{ route('Community.show',$community->id) }}'">
                                      <a  href="#" class="d-flex align-items-center">
                                        <div class="user-img img-fluid">
                                          
                                          @if($community->image)
                                          <img src="{{asset('storage/' . $community->image)}}" alt="story-img" class="rounded-circle avatar-40"></div>

                                          @else
                                          <img src="{{asset('images/community/100.jpg')}}" alt="story-img" class="rounded-circle avatar-40"></div>

                                            
                                          @endif

                                        <div class="w-100">
                                          <div class="d-flex justify-content-between">
                                              <div class="ms-3">
                                                <h5> {{$community->name}} </h5>
                                                
                                             
                                              </div>                                              
                                          </div>
                                        </div>
                                      </a>
                                     
                                    </li>
                                    @endforeach
                                     
                                    
                                 </ul>
              <a href="/communities" class="btn btn-primary d-block mt-3">See More</a>

            </div>
         </div>
       </div>
   
     </div>
        </div>
       
    </div>
  @endsection