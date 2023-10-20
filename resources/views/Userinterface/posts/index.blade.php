@extends('components.layout')
@section('content')

<div id="content-page" class="content-page">
<div class="container">
   <div class="row">
      <div class="col-lg-8 row m-0 p-0">
         <div class="col-sm-12">
            <div id="post-modal-data" class="card card-block card-stretch card-height">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Create Post</h4>
                  </div>
               </div>
               <!--partie post tabda-->
               <div class="card-body">
                  <div class="d-flex align-items-center">
                    <!-- <div class="user-img">
                        <img src="../assets/images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle" loading="lazy">
                     </div>-->
                     <form class="post-text ms-3 w-100 "  data-bs-toggle="modal" data-bs-target="#post-modal" action="javascript:void();">
                        <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                     </form>
                  </div>
                  <hr>
                  
               </div>
               <div class="modal fade" id="post-modal" tabindex="-1"  aria-labelledby="post-modalLabel" aria-hidden="true" >
                  <div class="modal-dialog   modal-fullscreen-sm-down">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                           <a href="javascript:void(0);" class="lh-1" data-bs-dismiss="modal">
                              <span class="material-symbols-outlined">close</span>
                           </a>
                        </div>
                        <!--form post-->
                        <div class="modal-body">
                           <div class="d-flex align-items-center">
                          
                      <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                       @csrf 
                       @method('post')

                       <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        
     
                  <div class="mb-6">
                      <label for="image" class="inline-block text-lg mb-2">
                          image
                       </label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />

                      @error('image')
                      <p class="text-danger">{{$message}}</p>
                       @enderror
                  </div>
      
                   <div class="form-group">
                      <label class="form-label" for="title">title</label>
                        <input type="text" class="form-control" name="title" placeholder="title">
                        @error('title')
                <p class="text-danger">{{$message}}</p>
                    
                @enderror
                   </div>
                  <div class="form-group">
                    <label class="form-label" for="exampleInputPlaceholder">description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    @error('description')
                <p class="text-danger">{{$message}}</p>
                    
                @enderror
                  </div>

                   <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                       
               </form>
                           </div>
                          
                      
                        </div>
                        <!--form post-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
        <!--post-->
         <div class="col-sm-12">
         
            <div class="col-sm-12">
            @foreach($posts as $post ) 
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
               
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" src="../assets/images/user/03.jpg" alt="" loading="lazy">
                        </div>
                        <div class="w-100">
                           <div class="d-flex  justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">{{$post->title}}</h5>
                                
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle material-symbols-outlined" id="postdata-5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          more_horiz
                                    </span>
                                    <div class="dropdown-menu m-0 p-0" aria-labelledby="postdata-5">
                                    
                                          <div class="d-flex align-items-top">
                                               <div class="data ms-2">
                                               <a class="dropdown-item d-flex align-items-center"
                     href="{{ route('post.edit', ['post' => $post]) }}" 
                     ><span class="material-symbols-outlined me-2 md-18">Edit Post </span  >Edit Post</a >
                                    
                                               
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             
                                             <div class="data ms-2">
                                             <form method="post" action="{{ route('post.destroy', ['post' => $post]) }}">
                              @csrf 
                              @method('delete')
                               <button type="submit" class="material-symbols-outlined me-2 md-18">Delete</button>delete
                            </form>
                      

                                               
                                             </div>
                                          </div>
                                       </a>
                               
                                  
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                     <p>{{$post->description}}</p>
                  </div>
                  <div class="user-post">
                     <a href="javascript:void(0);">
                        <img src="{{ asset('logos/'.$post->image) }}"  alt="post-image" class="img-fluid rounded w-50" loading="lazy"></a>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <!--<span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                    </span>-->
                                 
                                 </div>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Likes
                                    </span>
                               
                                 </div>
                              </div>
                           </div>
                           <div class="total-comment-block">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                               
                              </div>
                           </div>
                        </div>
                     
                     </div>
                    
                     <hr>
                  
                     <ul class="post-comments list-inline p-0 m-0">
                     @foreach($post->comments as $comment)
                        <li class="mb-2">
                           <div class="d-flex ">
                           
                              <!--<div class="user-img">
                                 <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid" loading="lazy">
                              </div>-->
                              <div class="comment-data-block ms-3">
                                 <!--<h6>user</h6>-->
                                 <p class="mb-0">
                                 {{$comment->description}}
                                 </p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                 <a href="{{ route('comment.edit', ['comment' => $comment->id]) }}">Edit</a>
                                    

                                 
                             
                                    <form method="post" action="{{ route('comment.destroy', ['comment' => $comment]) }}">
                              @csrf 
                              @method('delete')
                               <button type="submit" class="btn btn-danger btn-rounded btn-sm my-0">Delete</button>
                            </form>

                                 </div>
                              </div>
                           </div>
                        </li>
                        @endforeach

                     </ul>
                     <form  method="POST" action="{{ route('comment.store') }}" class="comment-text d-flex align-items-center mt-3">
    @csrf
     @method('post')
     <input type="hidden" name="post_id" value="{{$post->id}}">

    <input type="text" class="form-control rounded" name="description" placeholder="Enter Your Comment">
    @error('description')
                <p class="text-danger">{{$message}}</p>
                    
                @enderror
    <div class="">
        <button type="submit" class="btn btn-primary d-block w-60 mt-0">Paste</button>
    </div>
</form>

                       
              
                    
                  </div>
               </div>
            </div>
            @endforeach
         </div>
         
       
              
                  <!--partie post toufa-->


        

               </div>
            </div>
         </div>
        
       
    
      </div>
   
     
   </div>
</div>
    </div>
@endsection