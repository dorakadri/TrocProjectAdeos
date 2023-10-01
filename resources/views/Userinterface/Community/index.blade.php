


@extends('components.layout')
@section('content')
 
        
             

            <div class="row justify-content-between d-flex mb-2  align-items-center">
                                        <div class="col-sm-12 col-md-6">
                                        <h4 class="card-title mb-3">Communities</h4>

                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="  d-flex justify-content-end">
                                            
                                                <a href="{{route('Community.create')}}" class="btn btn-primary rounded confirm-btn">
                                                     Create community</a>
                                            </div>
                                        </div>
                                    </div>
            



            <div class="row">
        
                
               @foreach ($communities as $community)  
               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-body">
                        <ul class="notification-list m-0 p-0">
                           <li class="d-flex align-items-center justify-content-between">

                           
                              <div class="user-img img-fluid">

                                    @if($community->image)
                                    <img src="{{ asset('storage/' . $community->image) }}" alt="story-img"class="rounded-circle avatar-40">

                                     @else
                                    <img src="{{ asset('images/community/03.jpg')}}" alt="story-img"class="rounded-circle avatar-40">

                                    @endif
                              
                                    </div>
                              <div class="w-100">
                                 <div class="d-flex justify-content-between">
                                    <div class=" ms-3" class="group-info mt-0" >
                                       <h4 > <a  href="{{route('Community.show',$community->id )}}">{{$community->name}}  </a></h4>

                                     
                                       <p class="mb-0">{{$community->description}}</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                       
                                       <div class="card-header-toolbar d-flex align-items-center">

                                          <div class="dropdown">
                                             <div class="dropdown-toggle" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                <span class="material-symbols-outlined">
                                                   more_horiz
                                                </span>
                                             </div>
                                             <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton" style="">
                                             
                                                   <a class="dropdown-item d-flex align-items-center" href="{{route('Community.edit',$community->id )}}"> 
                                                 
                                                   <button type="submit" class="btn  py-0 my-0"> Edit </button>  
                                                      </a>
                                                    <form method="post" action="{{ route('Community.destroy', $community->id) }}">
                                                      @csrf 
                                                      @method('DELETE')
                                                      <a class="dropdown-item d-flex align-items-center"  > 
                                                      <button type="submit" class="btn   py-0 my-0">
                                                      Delete 
                                                      </button> </a>
                                                      

                                                     
                                                   </form>
                                               
                                                   <a class="dropdown-item d-flex align-items-center" href="#"> 
                                                  
                                                   <button type="submit" class="btn   py-0 my-0"> Leave </button>  
                                                    </a>
                                               
                                          
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  
             
               </div>
               @endforeach     
            </div>








         
   @endsection