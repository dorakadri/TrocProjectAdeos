@props(['event'])
@props(['community'])

         <div class="card">
           <div class="card-header d-flex justify-content-between">
             <div class="header-title">
               <h4 class="card-title">Events</h4>
             </div>
             <div class="card-header-toolbar d-flex align-items-center">
               <div class="dropdown">
                 <div
                   class="dropdown-toggle"
                   id="dropdownMenuButton01"
                   data-bs-toggle="dropdown"
                   aria-expanded="false"
                   role="button"
                 >
                   <span class="material-symbols-outlined">
                     more_horiz
                   </span>
                 </div>
                 <div
                   class="dropdown-menu dropdown-menu-right"
                   aria-labelledby="dropdownMenuButton01"
                 >
                                       
                   <a
                     class="dropdown-item d-flex align-items-center"
                     href="#"
                     > 
                     Create event</a
                   >
                  
                 </div>
               </div>
             </div>
           </div>
           <div class="card-body">
             <ul class="media-story list-inline m-0 p-0">
               <li class="d-flex mb-3 align-items-center">
                 <i class="material-symbols-outlined"> add </i>
                 <div class="stories-data ms-3">
                   <h5>Creat Your Story</h5>
                   <p class="mb-0">time to story</p>
                 </div>
               </li>
                
               <li class="d-flex mb-3 align-items-center">
                @if($event->image)
                <img
                   src="{{asset('storage/' . $event->image)}}"
                   alt="story-img"
                   class="rounded-circle img-fluid"
                 />
                @else
                <img
                   src=".{{asset('images/community/100.jpg')}}"
                   alt="story-img"
                   class="rounded-circle img-fluid"
                 />
                @endif
                
                 <div class="stories-data ms-3">
                   <h5>{{$event->name}}</h5>
                   <p class="mb-0">{{$event->start_time}}  </p>
                 </div>
               </li>
               
             </ul>
             <a href="#" class="btn btn-primary d-block mt-3">See All</a>
           </div>
         </div>

         <div class="card">
           <div class="card-header d-flex justify-content-between">
             <div class="header-title">
               <h4 class="card-title">Events</h4>
             </div>
             <div class="card-header-toolbar d-flex align-items-center">
               <div class="dropdown">
                 <div
                   class="dropdown-toggle"
                   id="dropdownMenuButton01"
                   data-bs-toggle="dropdown"
                   aria-expanded="false"
                   role="button"
                 >
                   <span class="material-symbols-outlined">
                     more_horiz
                   </span>
                 </div>
                 <div
                   class="dropdown-menu dropdown-menu-right"
                   aria-labelledby="dropdownMenuButton01"
                 >
                                       
                   <a
                     class="dropdown-item d-flex align-items-center"
                     href="#"
                     > 
                     Create event</a
                   >
                  
                 </div>
               </div>
             </div>
           </div>
           <div class="card-body">
             <ul class="media-story list-inline m-0 p-0">
               <li class="d-flex mb-3 align-items-center">
                 <i class="material-symbols-outlined"> add </i>
                 <div class="stories-data ms-3">
                   <h5>Creat Your Story</h5>
                   <p class="mb-0">time to story</p>
                 </div>
               </li>
                
               <li class="d-flex mb-3 align-items-center">
                @if($community->image)
                <img
                   src="{{asset('storage/' . $community->image)}}"
                   alt="story-img"
                   class="rounded-circle img-fluid"
                 />
                @else
                <img
                   src=".{{asset('images/community/100.jpg')}}"
                   alt="story-img"
                   class="rounded-circle img-fluid"
                 />
                @endif
                
                 <div class="stories-data ms-3">
                   <h5>{{$community->name}}</h5>
                   <p class="mb-0">followers</p>
                 </div>
               </li>
               
             </ul>
             <a href="#" class="btn btn-primary d-block mt-3">See All</a>
           </div>
         </div>
        
          
        
       