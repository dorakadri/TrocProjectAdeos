@extends('components.layout')
@section('content')
 
        

 

<div class="header-for-bg">
@if($community->image)

         <div class="background-header position-relative  bg-gradient bg-transparent border ">
         
                <img src="{{ asset('storage/' . $community->image) }}" class="img-fluid  w-100  " style="height: 15rem; object-fit: cover;" alt="group-bg"  >
               
         </div>
    @else
    

    <div class="background-header position-relative">
 
    <img src="{{ asset('images/100.jpg')}}" class="img-fluid  w-100  " style="height: 15rem; object-fit: cover;" alt="group-bg"  >
         
    </div>
    @endif

    
    </div>
    <!-- Page Content  -->    </div>
    <div id="content-page" class="content-page">
<div class="container">
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
   <!-- <div class="row">
      <div class="col-lg-4">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Bio</h4>
               </div>
               <div class="d-flex align-items-center">
                  <p class="m-0"><a href="#"> Know More </a></p>
               </div>
            </div>
            <div class="card-body">
               <div class="d-flex flex-column justify-content-between">
                  <h6 class="mb-1">Mathilda Mariam Gvarliani - Georgian</h6>
                  <h6 class="mb-1">@lookmodelsmanagement</h6>
                  <h6 class="mb-1">@nextmodels</h6>
                  <h6 class="mb-1">@munichmodels</h6>
                  <h6 class="mb-1">@elite_copenenhagen</h6>
                  <h6>been unpredictable since childhood</h6>
               </div>
               <hr>
               <div class="d-flex flex-column justify-content-between">
                  <div class="d-flex align-items-center mb-1">
                     <span class="material-symbols-outlined  md-18 me-2">
                     business_center
                     </span>
                     <a href="#" class="link-primary">Model at next model management</a>
                  </div>
                  <div class="d-flex align-items-center mb-1">
                     <span class="material-symbols-outlined md-18 me-2">
                     import_contacts
                     </span>
                     <span>Studies public relations at <a href="#" class="link-primary ">Cacucasus University</a></span>
                  </div>
                  <div class="d-flex align-items-center mb-1">
                     <span class="material-symbols-outlined md-18 me-2">
                     bookmark_border
                     </span>
                     <span>Born on October 9, 2000</span>
                  </div>
                  <div class="d-flex align-items-center">
                     <span class="material-symbols-outlined  md-18 me-2">
                     hide_source
                     </span>
                     <span>Lives in <a href="#" class="link-primary ">Tbilisi, Georgia</a></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Photos</h4>
               </div>
               <a>See all photos</a>
            </div>
            <div class="card-body">
               <div class="d-grid gap-2 grid-cols-3">
                  <a data-fslightbox="gallery" href="../assets/images/page-img/g2.jpg">
                  <img src="../assets/images/page-img/g2.jpg" class="img-fluid bg-soft-info img-size" alt="photo-profile" loading="lazy">
                  </a>
                  <a data-fslightbox="gallery" href="../assets/images/page-img/g3.jpg">
                  <img src="../assets/images/page-img/g3.jpg" class="img-fluid bg-soft-info img-size" alt="photo-profile" loading="lazy">
                  </a>
                  <a data-fslightbox="gallery" href="../assets/images/page-img/g4.jpg">
                  <img src="../assets/images/page-img/g4.jpg" class="img-fluid bg-soft-info img-size" alt="photo-profile" loading="lazy">
                  </a>
                  <a data-fslightbox="gallery" href="../assets/images/page-img/g5.jpg">
                  <img src="../assets/images/page-img/g5.jpg" class="img-fluid bg-soft-info img-size" alt="photo-profile" loading="lazy">
                  </a>
                  <a data-fslightbox="gallery" href="../assets/images/page-img/g6.jpg">
                  <img src="../assets/images/page-img/g6.jpg" class="img-fluid bg-soft-info img-size" alt="photo-profile" loading="lazy">
                  </a>
                  <a data-fslightbox="gallery" href="../assets/images/page-img/g7.jpg">
                  <img src="../assets/images/page-img/g7.jpg" class="img-fluid bg-soft-info img-size" alt="photo-profile" loading="lazy">
                  </a>
                  <a data-fslightbox="gallery" href="../assets/images/page-img/g8.jpg">
                  <img src="../assets/images/page-img/g8.jpg" class="img-fluid bg-soft-info img-size" alt="photo-profile" loading="lazy">
                  </a>
                  <a data-fslightbox="gallery" href="../assets/images/page-img/gi-7.jpg">
                  <img src="../assets/images/page-img/g9.jpg" class="img-fluid bg-soft-info img-size" alt="photo-profile" loading="lazy">
                  </a>
                  <a data-fslightbox="gallery" href="../assets/images/page-img/gi-7.jpg">
                  <img src="../assets/images/page-img/g7.jpg" class="img-fluid bg-soft-info img-size" alt="photo-profile" loading="lazy">
                  </a>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Videos</h4>
               </div>
               <a>See all videos</a>
            </div>
            <div class="card-body">
               <div class="d-grid gap-2">
                  <div class="ratio ">
                     <iframe class="rounded embed-responsive-item" src="../../../../../../www.youtube.com/embed/zpOULjyy-n8f622.html?rel=0" allowfullscreen></iframe>
                  </div>
                  <div class="ratio">
                     <iframe class="rounded embed-responsive-item" src="../../../../../../www.youtube.com/embed/zpOULjyy-n8f622.html?rel=0" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-8">
         <div id="post-modal-data" class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Create Post</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="d-flex align-items-center">
                  <div class="user-img me-3">
                     <img src="../assets/images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle" loading="lazy">
                  </div>
                  <form class="post-text w-100 "  data-bs-toggle="modal" data-bs-target="#post-modal" action="#">
                     <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                  </form>
               </div>
               <hr>
               <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                  <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3 mb-md-0 mb-2"><img src="../assets/images/small/07.png" alt="icon" class="img-fluid me-2" loading="lazy"> Photo/Video</li>
                  <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3 mb-md-0 mb-2"><img src="../assets/images/small/08.png" alt="icon" class="img-fluid me-2" loading="lazy"> Tag Friend</li>
                  <li class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3"><img src="../assets/images/small/09.png" alt="icon" class="img-fluid me-2" loading="lazy"> Feeling/Activity</li>
                  <li class="bg-soft-primary rounded p-2 pointer text-center">
                     <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                           <div class="dropdown-toggle lh-1" id="post-option"   data-bs-toggle="dropdown">
                              <span class="material-symbols-outlined"> more_horiz</span>
                             
                           </div>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option" style="">
                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Check in</a>
                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Live Video</a>
                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Gif</a>
                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Watch Party</a>
                              <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Play with Friend</a>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="modal fade" id="post-modal" tabindex="-1"  aria-labelledby="post-modalLabel" aria-hidden="true" >
               <div class="modal-dialog  modal-lg modal-fullscreen-sm-down">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                        <a href="javascript:void(0);" class="lh-1" data-bs-dismiss="modal">
                           <span class="material-symbols-outlined">close</span>
                        </a>
                     </div>
                     <div class="modal-body">
                        <div class="d-flex align-items-center">
                           <div class="user-img me-3">
                              <img src="../assets/images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid" loading="lazy">
                           </div>
                           <form class="post-text w-100" action="#">
                              <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                           </form>
                        </div>
                        <hr>
                        <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                           <li class="col-md-6 mb-3">
                              <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/07.png" alt="icon" class="img-fluid" loading="lazy"> Photo/Video</div>
                           </li>
                           <li class="col-md-6 mb-3">
                              <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/08.png" alt="icon" class="img-fluid" loading="lazy"> Tag Friend</div>
                           </li>
                           <li class="col-md-6 mb-3">
                              <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/09.png" alt="icon" class="img-fluid" loading="lazy"> Feeling/Activity</div>
                           </li>
                           <li class="col-md-6 mb-3">
                              <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/10.png" alt="icon" class="img-fluid" loading="lazy"> Check in</div>
                           </li>
                           <li class="col-md-6 mb-3">
                              <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/11.png" alt="icon" class="img-fluid" loading="lazy"> Live Video</div>
                           </li>
                           <li class="col-md-6 mb-3">
                              <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/12.png" alt="icon" class="img-fluid" loading="lazy"> Gif</div>
                           </li>
                           <li class="col-md-6 mb-3">
                              <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/13.png" alt="icon" class="img-fluid" loading="lazy"> Watch Party</div>
                           </li>
                           <li class="col-md-6 mb-3">
                              <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/14.png" alt="icon" class="img-fluid" loading="lazy"> Play with Friends</div>
                           </li>
                        </ul>
                        <hr>
                        <div class="other-option">
                           <div class="d-flex align-items-center justify-content-between">
                              <div class="d-flex align-items-center">
                                 <div class="user-img me-3">
                                    <img src="../assets/images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid" loading="lazy">
                                 </div>
                                 <h6>Your Story</h6>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <span class="btn btn-primary">Friend</span>
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             save
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Public</h6>
                                                <p class="mb-0">Anyone on or off Facebook</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             cancel
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Friends</h6>
                                                <p class="mb-0">Your Friend on facebook</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             person_remove
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Friends except</h6>
                                                <p class="mb-0">Don't show to some friends</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <span class="material-symbols-outlined">
                                             notifications
                                             </span>
                                             <div class="data ms-2">
                                                <h6>Only Me</h6>
                                                <p class="mb-0">Only me</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card card-2">
            <div class="card-body">
               <ul class="post-comments p-0 m-0">
                  <li class="">
                     <div class="d-flex justify-content-between">
                        <div class="user-img me-3">
                           <img src="../assets/images/user/1.jpg" alt="userimg" class="avatar-60  rounded-circle img-fluid" loading="lazy">
                        </div>
                        <div class="w-100">
                           <form class="post-text mt-2">
                              <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">                      
                           </form>
                           <hr>
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 Add:
                              </div>
                              <div class="">
                                 <svg fill="none" width="18px" stroke="currentColor" viewBox="0 0 24 24" xmlns="../../../../../../www.w3.org/2000/svg.html">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                 </svg>
                              </div>
                              <div class="">
                                 <svg fill="none" width="18px" stroke="currentColor" viewBox="0 0 24 24" xmlns="../../../../../../www.w3.org/2000/svg.html">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                 </svg>
                              </div>
                              <div class="">
                                 <svg fill="none" width="18px" stroke="currentColor" viewBox="0 0 24 24" xmlns="../../../../../../www.w3.org/2000/svg.html">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z"></path>
                                 </svg>
                              </div>
                              <button class="btn btn-primary btn-sm">Publish</button>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <ul class="post-comments p-0 m-0">
                  <li class="mb-2">
                     <div class="d-flex justify-content-between">
                        <div class="user-img me-3">
                           <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-60  rounded-circle img-fluid" loading="lazy">
                        </div>
                        <div class="w-100 text-margin">
                           <h5>Mathilda Gvarliana</h5>
                           <small class=" d-flex align-items-center "> <i class="material-symbols-outlined md-14 me-1">
                           schedule
                           </i> March 14, 23:00</small>
                           <p>Hi, I am flying to Los Angeles to attend #VSFS2020 castings. I hope it will happen and my dream comes true. Wish me luck. </p>
                           <hr>
                           <div class="d-flex justify-content-between align-items-center flex-wrap">
                              <div class="d-flex justify-content-between align-items-center">
                                 <div class="d-flex align-items-center me-3">
                                    <span class="material-symbols-outlined md-18">
                                    favorite_border
                                    </span>
                                    <span class="card-text-1 ms-1">Love it</span>
                                 </div>
                                 <div class="d-flex align-items-center me-3">
                                    <span class="material-symbols-outlined md-18">
                                    comment
                                    </span>
                                    <span class="card-text-1 ms-1">Comment</span>
                                 </div>
                                 <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined md-18">
                                    share
                                    </span>
                                    <span class="card-text-1 ms-1">Share</span>
                                 </div>
                              </div>
                              <span class="card-text-2">
                              5.2k people love it
                              </span>
                              <div class="d-flex justify-content-between align-items-center">
                                 <span class="card-text-1 me-1">5.2k people love it</span>
                                 <div class="iq-media-group ms-2">
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/05.jpg" alt="" loading="lazy">
                                    </a>
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/06.jpg" alt="" loading="lazy">
                                    </a>
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/07.jpg" alt="" loading="lazy">
                                    </a>
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/08.jpg" alt="" loading="lazy">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="d-flex align-items-center mt-3" >
                              <input type="text" class="form-control rounded" placeholder="Write your comment">
                              <div class="comment-attagement d-flex align-items-center me-4">
                                 <span class="material-symbols-outlined md-18 me-1">
                                 comment
                                 </span>
                                 <h6 class="card-text-1">Comment</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <ul class="post-comments p-0 m-0">
                  <li class="mb-2">
                     <div class="d-flex justify-content-between">
                        <div class="user-img me-3">
                           <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-60  rounded-circle img-fluid">
                        </div>
                        <div class="w-100 text-margin">
                           <h5>Mathilda Gvarliana</h5>
                           <small class="d-flex align-items-center "><i class="material-symbols-outlined md-16 me-1">
                              schedule
                              </i> March 14, 23:00</small>
                           <div class="mt-2 mb-2 ratio">
                              <iframe class="rounded embed-responsive-item" src="../../../../../../www.youtube.com/embed/zpOULjyy-n8f622.html?rel=0" allowfullscreen></iframe>
                           </div>
                           <p>Dolce Spring Summer 2020 - Women's Show</p>
                           <hr>
                           <div class="d-flex justify-content-between align-items-center flex-wrap">
                              <div class="d-flex justify-content-between align-items-center">
                                 <div class="d-flex align-items-center me-3">
                                    <span class="material-symbols-outlined md-18">
                                    favorite_border
                                    </span>
                                    <span class="card-text-1 ms-1">Love it</span>
                                 </div>
                                 <div class="d-flex align-items-center me-3">
                                    <span class="material-symbols-outlined md-18">
                                    comment
                                    </span>
                                    <span class="card-text-1 ms-1">Comment</span>
                                 </div>
                                 <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined md-18">
                                    share
                                    </span>
                                    <span class="card-text-1 ms-1">Share</span>
                                 </div>
                              </div>
                              <span class="card-text-2">
                              5.2k people love it
                              </span>                                                     
                              <div class="d-flex justify-content-between align-items-center">
                                 <span class="card-text-1 me-1">5.2k people love it</span>
                                 <div class="iq-media-group ms-2">
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/05.jpg" alt="" loading="lazy">
                                    </a>
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/06.jpg" alt="" loading="lazy">
                                    </a>
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/07.jpg" alt="" loading="lazy">
                                    </a>
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/08.jpg" alt="" loading="lazy">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="d-flex align-items-center mt-3" >
                              <input type="text" class="form-control rounded" placeholder="Write your comment ">
                              <div class="comment-attagement d-flex align-items-center me-4">
                                 <span class="material-symbols-outlined md-18 me-1">
                                 comment
                                 </span>
                                 <h6 class="card-text-1">Comment</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <ul class="post-comments p-0 m-0">
                  <li class="mb-2">
                     <div class="d-flex justify-content-between">
                        <div class="user-img  me-3">
                           <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid" loading="lazy">
                        </div>
                        <div class="w-100 text-margin">
                           <h5>Mathilda Gvarliana</h5>
                           <small class=""><i class="material-symbols-outlined md-16 me-1">
                              schedule
                              </i> March 14, 23:00</small>
                           <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                           <hr>
                           <div class="d-flex justify-content-between align-items-center flex-wrap">
                              <div class="d-flex justify-content-between align-items-center">
                                 <div class="d-flex align-items-center me-3">
                                    <span class="material-symbols-outlined md-18">
                                    favorite_border
                                    </span>
                                    <span class="card-text-1 ms-1">Love it</span>
                                 </div>
                                 <div class="d-flex align-items-center me-3">
                                    <span class="material-symbols-outlined md-18">
                                    comment
                                    </span>
                                    <span class="card-text-1 ms-1">Comment</span>
                                 </div>
                                 <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined md-18">
                                    share
                                    </span>
                                    <span class="card-text-1 ms-1">Share</span>
                                 </div>
                              </div>
                              <span class="card-text-2">
                              5.2k people love it
                              </span>                                                       
                              <div class="d-flex justify-content-between align-items-center">
                                 <span class="card-text-1 me-1">5.2k people love it</span>
                                 <div class="iq-media-group ms-2">
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/05.jpg" alt="" loading="lazy">
                                    </a>
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/06.jpg" alt="" loading="lazy">
                                    </a>
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/07.jpg" alt="" loading="lazy">
                                    </a>
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/08.jpg" alt="" loading="lazy">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="text-center mt-4">
                              <p>Hide 203 comments</p>
                           </div>
                           <ul class="post-comments p-2  card rounded">
                              <li class="mb-2">
                                 <div class="d-flex justify-content-between">
                                    <div class="user-img me-3">
                                       <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-60  rounded-circle img-fluid">
                                    </div>
                                    <div class="w-100 text-margin">
                                       <div class="">
                                          <h5 class="mb-0 d-inline-block me-1">Emma Labelle</h5>
                                          <h6 class=" mb-0 d-inline-block">2 weeks ago</h6>
                                       </div>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                       <div class="d-flex justify-content-between align-items-center flex-wrap">
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="d-flex align-items-center me-3">
                                                <span class="material-symbols-outlined md-18">
                                                favorite_border
                                                </span>
                                                <span class="card-text-1 ms-1">Love it</span>
                                             </div>
                                             <div class="d-flex align-items-center me-3">
                                                <span class="material-symbols-outlined md-18">
                                                comment
                                                </span>
                                                <span class="card-text-1 ms-1">Comment</span>
                                             </div>
                                             <div class="d-flex align-items-center">
                                                <span class="material-symbols-outlined md-18">
                                                share
                                                </span>
                                                <span class="card-text-1 ms-1">Share</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <ul class="post-comments p-2 m-0 card rounded ">
                              <li class="mb-2">
                                 <div class="d-flex justify-content-between">
                                    <div class="user-img me-3">
                                       <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-60  rounded-circle img-fluid" loading="lazy">
                                    </div>
                                    <div class="w-100 text-margin">
                                       <div class="">
                                          <h5 class="mb-0 d-inline-block me-1">Emma Labelle</h5>
                                          <small class=" mb-0 d-inline-block">2 weeks ago</small>
                                       </div>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                       <div class="d-flex justify-content-between align-items-center flex-wrap">
                                          <div class="d-flex justify-content-between align-items-center">
                                             <div class="d-flex align-items-center me-3">
                                                <span class="material-symbols-outlined md-18">
                                                favorite_border
                                                </span>
                                                <span class="card-text-1 ms-1">Love it</span>
                                             </div>
                                             <div class="d-flex align-items-center me-3">
                                                <span class="material-symbols-outlined md-18">
                                                comment
                                                </span>
                                                <span class="card-text-1 ms-1">Comment</span>
                                             </div>
                                             <div class="d-flex align-items-center">
                                                <span class="material-symbols-outlined md-18">
                                                share
                                                </span>
                                                <span class="card-text-1 ms-1">Share</span>
                                             </div>
                                          </div>
                                       </div>
                                       <ul class="post-comments p-0 mt-4">
                                          <li class="mb-2">
                                             <div class="d-flex justify-content-between">
                                                <div class="user-img me-3">
                                                   <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-60  rounded-circle img-fluid avatar-1" loading="lazy">
                                                </div>
                                                <div class="w-100 text-margin">
                                                   <div class="">
                                                      <h5 class="mb-0 d-inline-block me-1">Emma Labelle</h5>
                                                      <h6 class=" mb-0 d-inline-block">2 weeks ago</h6>
                                                   </div>
                                                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                   <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                      <div class="d-flex justify-content-between align-items-center">
                                                         <div class="d-flex align-items-center me-3">
                                                            <span class="material-symbols-outlined md-18">
                                                            favorite_border
                                                            </span>
                                                            <span class="card-text-1 ms-1">Love it</span>
                                                         </div>
                                                         <div class="d-flex align-items-center me-3">
                                                            <span class="material-symbols-outlined md-18">
                                                            comment
                                                            </span>
                                                            <span class="card-text-1 ms-1">Comment</span>
                                                         </div>
                                                         <div class="d-flex align-items-center">
                                                            <span class="material-symbols-outlined md-18">
                                                            share
                                                            </span>
                                                            <span class="card-text-1 ms-1">Share</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                       <ul class="post-comments p-0 mt-4 ">
                                          <li class="mb-2">
                                             <div class="d-flex justify-content-between">
                                                <div class="user-img me-3">
                                                   <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-60  rounded-circle img-fluid avatar-1" loading="lazy">
                                                </div>
                                                <div class="w-100 text-margin">
                                                   <div class="">
                                                      <h5 class="mb-0 d-inline-block me-1">Emma Labelle</h5>
                                                      <h6 class=" mb-0 d-inline-block">2 weeks ago</h6>
                                                   </div>
                                                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                                   <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                      <div class="d-flex justify-content-between align-items-center">
                                                         <div class="d-flex align-items-center me-3">
                                                            <span class="material-symbols-outlined md-18">
                                                            favorite_border
                                                            </span>
                                                            <span class="card-text-1 ms-1">Love it</span>
                                                         </div>
                                                         <div class="d-flex align-items-center me-3">
                                                            <span class="material-symbols-outlined md-18">
                                                            comment
                                                            </span>
                                                            <span class="card-text-1 ms-1">Comment</span>
                                                         </div>
                                                         <div class="d-flex align-items-center">
                                                            <span class="material-symbols-outlined md-18">
                                                            share
                                                            </span>
                                                            <span class="card-text-1 ms-1">Share</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="d-flex align-items-center mt-3" >
                                                      <input type="text" class="form-control rounded" placeholder="Write your comment">
                                                      <div class="comment-attagement d-flex align-items-center me-4">
                                                         <span class="material-symbols-outlined md-18 me-1">
                                                         comment
                                                         </span>
                                                         <h6 class="card-text-1">Comment</h6>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <ul class="post-comments p-2 mt-4 ">
                              <li class="mb-2">
                                 <div class="d-flex justify-content-between">
                                    <div class="user-img me-3">
                                       <img src="{{ asset('images/100.jpg')}}" alt="userimg" class="avatar-60  rounded-circle img-fluid " loading="lazy">
                                    </div>
                                    <div class="w-100 text-margin">
                                       <div class="">
                                          <h5 class="mb-0 d-inline-block me-1">Emma Labelle</h5>
                                          <span class=" mb-0 d-inline-block">2 weeks ago</span>
                                       </div>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       <div class="d-flex justify-content-between align-items-center flex-wrap">
                                          <div class="d-flex justify-content-around align-items-center">
                                             <div class="me-3 d-flex align-items-center">
                                                <span class="material-symbols-outlined md-18 me-1">
                                                favorite_border
                                                </span>
                                                <span class="card-text-1"> Love it</span>
                                             </div>
                                             <div class="me-3 d-flex align-items-center">
                                                <span class="material-symbols-outlined md-18 me-1">
                                                comment
                                                </span>
                                                <span class="card-text-1 ">Comment</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center mt-3" >
                                 <input type="text" class="form-control rounded" placeholder="Write your comment ">
                                 <div class="comment-attagement d-flex align-items-center me-4">
                                    <span class="material-symbols-outlined md-18 me-1">
                                    comment
                                    </span>
                                    <h6 class="card-text-1 me-2">Comment</h6>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <ul class="post-comments p-0 m-0">
                  <li class="mb-2">
                     <div class="d-flex justify-content-between">
                        <div class="user-img me-3">
                           <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-60  rounded-circle img-fluid">
                        </div>
                        <div class="w-100 text-margin">
                           <h4>Mathilda Gvarliana</h4>
                           <p class="mb-4">June 30, 12: 26</p>
                           <div class="d-grid gap-2 grid-cols-2 mb-2">
                              <a>
                              <img src="../assets/images/page-img/52.jpg" class="img-fluid bg-soft-info rounded  image-size" alt="profile-image" loading="lazy">
                              </a>
                              <a>
                              <img src="../assets/images/page-img/53.jpg" class="img-fluid bg-soft-primary rounded  image-size" alt="profile-image" loading="lazy">
                              </a>
                              <a>
                              <img src="../assets/images/page-img/54.jpg" class="img-fluid bg-soft-info rounded  image-size" alt="profile-image" loading="lazy">
                              </a>
                              <a>
                              <img src="../assets/images/page-img/55.jpg" class="img-fluid bg-soft-primary rounded  image-size" alt="profile-image" loading="lazy">
                              </a>
                           </div>
                           <span class="">Photoshoot for Buyers Magazine - 2019</span>
                           <hr>
                           <div class="d-flex justify-content-between align-items-center flex-wrap">
                              <div class="d-flex justify-content-between align-items-center">
                                 <div class="d-flex align-items-center me-3">
                                    <span class="material-symbols-outlined md-18">
                                    favorite_border
                                    </span>
                                    <span class="card-text-1 ms-1">Love it</span>
                                 </div>
                                 <div class="d-flex align-items-center me-3">
                                    <span class="material-symbols-outlined md-18">
                                    comment
                                    </span>
                                    <span class="card-text-1 ms-1">Comment</span>
                                 </div>
                                 <div class="d-flex align-items-center">
                                    <span class="material-symbols-outlined md-18">
                                    share
                                    </span>
                                    <span class="card-text-1 ms-1">Share</span>
                                 </div>
                              </div>
                              <span class="card-text-2">
                              5.2k people love it
                              </span>
                              <div class="d-flex justify-content-between align-items-center">
                                 <span class="card-text-1 me-1">5.2k people love it </span>
                                 <div class="iq-media-group ms-2">
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/05.jpg" alt="" loading="lazy">
                                    </a>
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/06.jpg" alt="" loading="lazy">
                                    </a>
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/07.jpg" alt="" loading="lazy">
                                    </a>
                                    <a href="#" class="iq-media">
                                    <img class="img-fluid avatar-30 rounded-circle" src="../assets/images/user/08.jpg" alt="" loading="lazy">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="d-flex align-items-center mt-3">
                              <input type="text" class="form-control rounded" placeholder="Write your comment">
                              <div class="comment-attagement d-flex align-items-center me-4">
                                 <span class="material-symbols-outlined md-18 me-1">
                                 comment
                                 </span>
                                 <h6 class="card-text-1">Comment</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div> -->
   </div>
</div>
@endsection