
@extends('components.layout')
@section('content')
 
         

 


    
<div class="container">
<div class="header-for-bg mb-3">
@if($community->image)

         <div class="background-header position-relative  bg-gradient bg-transparent border ">
         
                <img src="{{ asset('storage/' . $community->image) }}" class="img-fluid  w-100  " style="height: 15rem; object-fit: cover;" alt="group-bg"  >
               
         </div>
    @else
    

    <div class="background-header position-relative">
 
    <img src="{{ asset('images/community/03.jpg')}}" class="img-fluid  w-100  " style="height: 15rem; object-fit: cover;" alt="group-bg"  >
         
    </div>
    @endif

    
</div>
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <div class="row">
                   
                  <div class="col-lg-12">
                     <div class="d-flex justify-content-between">
                        <div class="item2 ">
                           <h4 class="">{{$community->name}} </h4>
                           <span>60 630 followers</span>       
                        </div>
                        <div  >
                                
                              <button type="button" class="btn btn-primary   btn-sm d-flex align-items-center"><span class="material-symbols-outlined  md-16">
                              add
                              </span>Join community</button>
                           
                        </div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-lg-12">
                        <h6 class="mb-2"> {{$community->description}} </h6>

                        </div>
                         
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row ">

   <nav class="tab-bottom-bordered mb-3" style="background-color: #fff0;">
               <div class="mb-0 nav nav-tabs rounded-top border-0  " id="nav-tab1" role="tablist" style="background-color: #fff0;">
                  <button class="nav-link active" id="nav-home-11-tab" data-bs-toggle="tab" data-bs-target="#nav-home-11" type="button" role="tab" aria-controls="nav-home-11" aria-selected="true">Events</button>
                  <button class="nav-link" id="nav-profile-11-tab" data-bs-toggle="tab" data-bs-target="#nav-profile-11" type="button" role="tab" aria-controls="nav-profile-11" aria-selected="false" tabindex="-1">Profile</button>
                  <button class="nav-link" id="nav-contact-11-tab" data-bs-toggle="tab" data-bs-target="#nav-contact-11" type="button" role="tab" aria-controls="nav-contact-11" aria-selected="false" tabindex="-1">Contact</button>
               </div>
            </nav>
      
      
            @if (count($events)==0)
                 <div class=" d-flex  flex-column justify-content-center  align-items-center" style="height: 15rem; ">
                     <h3>It looks like there are no events here yet! </h3>
                      

                  </div>
    @endif              
   @foreach($events as $event)

      
      <div class="col-lg-6" >
      <x-Event-card  :event="$event" />

      </div>
    
        @endforeach
        
    
   </div>
</div>

 
 <aside class="sidebar sidebar-chat sidebar-base border-end shadow-none   " data-sidebar="responsive" 
 style="right:0;   margin-top: 5.7rem;">
       <div class="chat-search pt-3 ">
       
             <!-- <div class="sidebar-toggle d-block d-xl-none" data-toggle="sidebar2" data-active="true">
                <i class="icon">
                    <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div> -->
            <ul class="nav navbar-nav iq-main-menu " id="sidebar-menu" role="tablist">
                <li class="nav-item static-item mt-3 " role="presentation">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1" aria-selected="false" role="tab">
                        <h5 class="default-icon">Events</h5>
                    </a>
                </li>
            </ul>
            
            <div class="chat-searchbar mt-4 mb-2 mx-2">
                <div class="form-group chat-search-data m-0  ">
                    <input type="text" class="form-control round" id="chat-search" placeholder="Search">
                    <i class="material-symbols-outlined">
                    search
                    </i>
                </div>

            </div>
            <div  class="  mx-2">
            <a href="{{ route('Event.create', ['community' => $community->id]) }}" class="btn btn-primary d-block w-100 confirm-btn">
               Create new event
            </a>
            </div>
             



        </div>
        <div class="sidebar-body pt-0 data-scrollbar mb-5 pb-5" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content" style="transform: translate3d(0px, 0px, 0px);">
            <!-- Sidebar Menu Start -->

           
            <ul class="nav navbar-nav iq-main-menu mb-5 pb-5" id="sidebar-menu" role="tablist">
                <li class="nav-item static-item mt-3" role="presentation">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1" aria-selected="false" role="tab">
                        <h5 class="default-icon">Created events</h5>
                    </a>
                </li>
                @if($userCreatedEvents)
                @foreach($userCreatedEvents as $createdEvent)

                
                <li class="nav-item iq-chat-list mb-3" role="presentation">
                        
                        
                        <div class="d-flex align-items-center">
                            <div class="position-relative   me-3">
                            @if($createdEvent->image)
                            <img src="{{ asset('storage/' . $createdEvent->image) }}" alt="status-101" class="avatar-50 rounded" loading="lazy">

                              @else
                              <img src="{{ asset('images/community/36.jpg') }}" alt="status-101" class="avatar-50 rounded" loading="lazy">

                               @endif
                              
                         </div>
                        <div class="d-flex align-items-center w-100 iq-userlist-data">
                            <div class="d-flex flex-grow-1 flex-column">
                                <div class="d-flex align-items-center gap-1">
                                    <p class="mb-0 text-ellipsis short-1 flex-grow-1 iq-userlist-name">{{$createdEvent->start_time}}</p>
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
                                             
                                                   <a class="dropdown-item d-flex align-items-center" href="{{ route('Event.edit',[ $createdEvent->id,'community' => $community->id]) }}"> 
                                                 
                                                   <button type="submit" class="btn  py-0 my-0"> Edit </button>  
                                                      </a>
                                                    <form method="post" action="{{ route('Event.destroy', [$createdEvent->id,'community' => $community->id]) }}">
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
              
                 
            </ul>
            
            <!-- Sidebar Menu End -->
        </div><div class="scrollbar-track scrollbar-track-x" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 187.102px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 456.232px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
        <div class="sidebar-footer"></div>
    </aside>


    @endsection