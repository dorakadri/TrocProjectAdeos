


@extends('components.layout')
@section('content')
 
        
             

            
         


      <div class="row">
         <div class="col-lg-8  " >
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Communities</h4>
                  </div>
                  
               </div>
               <div class="card-body" style="padding-bottom: 4rem; ">
 
                  @if (count($communities)==0)
                  <div class=" d-flex  flex-column justify-content-center  align-items-center" style="height: 10.5rem; ">
                  <h3>You haven't joined any community yet!</h3>
                  <a href="/communities" class="btn btn-primary  mt-4 ">
                    Discover
                     </a>  

                  </div>
                  @endif
                  <ul class="list-inline m-0 p-0 h-100">
                   @foreach ($communities as $community)  

                     <li class="d-flex mb-4 align-items-center ">
                                    @if($community->image)
                                    <img class="img-fluid rounded-circle avatar-40" src="{{ asset('storage/' . $community->image) }}" alt="" loading="lazy">

                                       @else        
                                       
                                       <img class="img-fluid rounded-circle avatar-40" src="{{ asset('images/community/100.jpg')}}" alt="" loading="lazy">

   
                                       @endif
                        <div class="ms-3 flex-grow-1"  style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">
                        <h4 class="d-flex align-items-center frd-name"> <a  href="{{route('Community.show',$community->id )}}">{{$community->name}}  </a></h4>

                           <small >{{$community->description}}  </small>
                        </div>
                        @if ($community->user_id !== Auth()->id())
                         
                           <a href="{{ route('leave', ['communityId' => $community->id]) }}" class="btn bg-soft-primary smallbutton">Leave</a>
                        @endif                     
                     </li>
                     
                     @endforeach     

                  </ul>
                  
               </div>
            </div>
         </div>
       
         <div class="col-lg-4">
            <div class="card ">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Created </h4>
                  </div>
               
               </div>
               @if(count($communities) !==0)
               <div class="mx-3 mt-3">
                     <a href="{{route('Community.create')}}" class="btn btn-primary   w-100  mb-3 ">
                           Create community 
                           </a> 
               </div>
               
             
               <div class="card-body " >
                                                   
   
                     @foreach ($cretedCommunities  as $key => $community  )  

                  <div class="d-flex  pb-2  pt-2 border-bottom align-items-center">
                     <div class=" flex-grow-1">
                        <h6><strong>{{$community->name}}</strong></h6>
                        <p class="mb-0">{{ $userCount[$key] }} followers</p>
                     </div>
                     <div class="dropdown">
                        <span class="material-symbols-outlined" id="dropdownMenuButton99" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                           expand_more

                        </span>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton9">
                                                   <a class="dropdown-item d-flex align-items-center" href="{{route('Community.edit',$community->id )}}"> 
                                                   
                                                   <button type="submit" class="btn  py-0 my-0"> Edit </button>  
                                                      </a>                        
                                                      <form method="post" action="{{ route('Community.destroy', $community->id) }}">
                                                         @csrf 
                                                         @method('DELETE')
                                                         <a class="dropdown-item d-flex align-items-center"  > 
                                                         <button type="submit" class="btn  py-0 my-0">
                                                         Delete 
                                                         </button> </a>
                                                         

                                                      
                                                      </form>
                        </div>
                     </div>
                  </div>
                  @endforeach     

                 
               
               </div>

               @else
               <div class="nav nav-pills nav-fill stepwizard-row mb-2" onclick="window.location.href='{{ route('Community.create') }}'"  role="tablist"  style="cursor: hand; ">
                                     
                    <a class="nav-link btn" style="cursor: hand; "  >

                        <i class="material-symbols-outlined bg-soft-primary text-primary">                                     <span class="material-symbols-outlined  md-16"> add </span> 
                        </i><span>Create community</span>
                   </a>
               </div>
                @endif
            </div>
       </div>

         

   </div>


         




         
   @endsection