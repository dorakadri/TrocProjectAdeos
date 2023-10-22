@props(['member'])
                 
                 
                    


   
        <div class="card">
                <div class="card-body">
                    <div class="d-flex  justify-content-center   align-items-center flex-column">
                                @if($member->image)
                                <img class="img-fluid rounded-circle avatar-100" src="{{asset('storage/' . $member->image)}}" alt="profile-img">

        
                                    @else
                                    <!-- <img class="img-fluid rounded-circle avatar-100" src="{{asset('images/community/user.png')}}" alt="profile-img"> -->
                                    <div class="rounded-circle avatar-100 d-flex  justify-content-center   align-items-center"  style="background:#dcf0ff; ">
                                    <i class="icon material-symbols-outlined"  style="font-size: 5rem;  color: #50b5ff;">  person   </i>

                                    </div>
        
                                    @endif 
                            <h4 class="mt-2">{{$member->name}}</h4>
                        
                    </div>
                </div>
                
               
         
         </div>
         