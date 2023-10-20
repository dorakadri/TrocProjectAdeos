@props(['event'])



          <div class="card card-transparent card-block card-stretch card-height blog-grid blog-single"
          style="height: 20rem;background:#edf7ff">
            <div class="card-body p-0 position-relative">
               <div class="image-block">
                  @if($event->image)

                  <img src="{{asset('storage/' . $event->image)}}" class="img-fluid rounded w-100" alt="event-img"  style="height: 20rem; object-fit: cover;">
                  @else



                  <img src="{{asset('images/community/36.jpg')}}" class="img-fluid rounded w-100" alt="event-img"  style="height: 20rem; object-fit: cover;">
                  @endif               
               </div>
               <!-- <div class="blog-description p-3" style="bottom: 0; margin: 0; background: #ffffffe0;border-radius: 0rem;"> -->

               <div class="blog-description p-3" >
               <div class="date"><strong> {{ date('M d H:i', strtotime($event->start_time)) }} - {{ date('M d H:i', strtotime($event->end_time)) }}
                                 </strong>
               </div>
               <h5 class="mb-2"   style="text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;">{{$event->description}}</h5>
                  <div class="d-flex align-items-center justify-content-between position-right-side">
                     <div class="like d-flex align-items-center"><i class="material-symbols-outlined pe-2 md-18">thumb_up</i>20 like</div>
                     <div class="comment d-flex align-items-center"><i class="material-symbols-outlined me-2 md-18">chat_bubble_outline</i>351 comments</div>
                     <div class="share d-flex align-items-center"><span class="material-symbols-outlined pe-2 md-18">share</span>share</div>
                  </div>
               </div>
            </div>
         </div>
    

 