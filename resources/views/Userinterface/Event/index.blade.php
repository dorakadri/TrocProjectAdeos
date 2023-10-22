
@extends('components.layout')
@section('content')

<div class="row ">

<!-- @if(count($events) == 0)
                <div class=" d-flex  flex-column justify-content-center  align-items-center" style="height: 30rem; ">
                  <h3>No events here yet! Be the first to create one</h3>
                  <a href="{{route('Event.create')}}" class="btn btn-primary  mt-4 ">
                    Create event
                     </a>  

                </div>
                @endif -->
@foreach($events as $key => $event)

      
<div class="col-lg-6 mb-4" >

<x-Event-card  :event="$event" :isGoing="$isGoing" :key="$key" :participants="$participants"   />
</div>

  @endforeach
  


</div>



<aside class="sidebar sidebar-chat sidebar-base border-end shadow-none   " data-sidebar="responsive" 
   style="right:0;   margin-top: 0rem;">
       <div class="chat-search pt-3 ">      
           
            <ul class="nav navbar-nav iq-main-menu " id="sidebar-menu" role="tablist">
                <li class="nav-item static-item mt-3 " role="presentation">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1" aria-selected="false" role="tab">
                        <h5 class="default-icon">Events</h5>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar mb-5 pb-5" data-scrollbar="true" tabindex="-1" style="overflow-y: auto; outline: none;"><div class="scroll-content" style="transform: translate3d(0px, 0px, 0px);">
                      
            <ul class="nav navbar-nav iq-main-menu mb-5 pb-5" id="sidebar-menu" role="tablist">
                <li class="nav-item static-item mt-3" role="presentation">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1" aria-selected="false" role="tab">
                        <h5 class="default-icon">Created events</h5>
                    </a>
                </li>
                @if($userCreatedEvents)
                @foreach($userCreatedEvents as $key => $createdEvent)

                
                <li class="nav-item iq-chat-list mb-3" role="presentation">
                        
                        
                        <div class="d-flex align-items-center">
                            <div class="position-relative   me-3" >
                            @if($createdEvent->image)
                            <img src="{{ asset('storage/' . $createdEvent->image) }}" alt="status-101" class="avatar-50 rounded" loading="lazy">

                              @else
                              <img src="{{ asset('images/community/36.jpg') }}" alt="status-101" class="avatar-50 rounded" loading="lazy">

                               @endif
                              
                         </div>
                        <div class="d-flex align-items-center w-100 iq-userlist-data">
                            <div class="d-flex flex-grow-1 flex-column"    >
                                <div class="d-flex align-items-center gap-1">
                                    <p class="mb-0 text-ellipsis short-1 flex-grow-1 iq-userlist-name">
                                    {{ date('M d H:i', strtotime($createdEvent->start_time)) }} - {{ date('M d H:i', strtotime($createdEvent->end_time)) }}
                                     </p>
                                 </div>
                                <div class="d-flex align-items-center gap-2">
                                    <small class="text-ellipsis short-1 flex-grow-1">{{$createdEvent->title}}</small>
                                 </div>
                                 
                            </div>
                                   <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                             <div class="dropdown-toggle" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                <span class="material-symbols-outlined">
                                                   more_vert
                                                </span>
                                             </div>
                                             <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton" style="">
                                             
                                                   <a class="dropdown-item d-flex align-items-center" href="{{ route('Event.edit',[ $createdEvent->id,'community' => $createdEvent->community_id]) }}"> 
                                                 
                                                   <button type="submit" class="btn  py-0 my-0"> Edit </button>  
                                                      </a>
                                                    <form method="post" action="{{ route('Event.destroy', [$createdEvent->id,'community' =>  $createdEvent->community_id]) }}">
                                                      @csrf 
                                                      @method('DELETE')
                                                      <a class="dropdown-item d-flex align-items-center"  > 
                                                      <button type="submit" class="btn   py-0 my-0">
                                                      Delete 
                                                      </button> </a>
                                                      

                                                     
                                                   </form>
                                               
                                                    
                                                   </div>
                                          </div>
                                          
                                             </div>
                                          </div>
                            
                        </div>
                 
                </li>    

                
                      
                @endforeach
                @endif
                
                <li class="nav-item static-item mt-3" role="presentation">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1" aria-selected="false" role="tab">
                        <h5 class="default-icon">Going events</h5>
                    </a>
                </li>
                @if($goingEvents)
                @foreach($goingEvents as $goingEvent)

                
                <li class="nav-item iq-chat-list mb-3" role="presentation">
                        
                        
                        <div class="d-flex align-items-center">
                            <div class="position-relative   me-3">
                            @if($goingEvent->image)
                            <img src="{{ asset('storage/' . $goingEvent->image) }}" alt="status-101" class="avatar-50 rounded" loading="lazy">

                              @else
                              <img src="{{ asset('images/community/36.jpg') }}" alt="status-101" class="avatar-50 rounded" loading="lazy">

                               @endif
                              
                         </div>
                        <div class="d-flex align-items-center w-100 iq-userlist-data">
                            <div class="d-flex flex-grow-1 flex-column">
                                <div class="d-flex align-items-center gap-1">
                                    <p class="mb-0 text-ellipsis short-1 flex-grow-1 iq-userlist-name">
                                    {{ date('M d H:i', strtotime($goingEvent->start_time)) }} - {{ date('M d H:i', strtotime($goingEvent->end_time)) }}
                                     </p>
                                 </div>
                                <div class="d-flex align-items-center gap-2">
                                    <small class="text-ellipsis short-1 flex-grow-1">{{$goingEvent->title}}</small>
                                 </div>
                                 
                            </div>
                                   <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                             <div class="dropdown-toggle" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                <span class="material-symbols-outlined">
                                                   more_vert
                                                </span>
                                             </div>
                                             <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton" style="">
                                             
                                                   <a class="dropdown-item d-flex align-items-center" href="{{ route('notParticipate', ['eventId' => $goingEvent->id]) }}"> 
                                                 
                                                   <button type="submit" class="btn  py-0 my-0"> Not Going </button>  
                                                      </a>
                                   
                                               
                                                    
                                                   </div>
                                          </div>
                                          
                                             </div>
                                          </div>
                            
                        </div>
                 
                </li>    

                
                      
                @endforeach
                @endif
              
                 
            </ul>
            
            <!-- Sidebar Menu End -->
        </div><div class="scrollbar-track scrollbar-track-x" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 187.102px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 456.232px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
        <div class="sidebar-footer"></div>
    </aside>




 

    


   

@endsection