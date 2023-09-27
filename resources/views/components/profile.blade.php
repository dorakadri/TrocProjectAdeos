@extends('components.layout')
@section('content')

<div class="row">
    <div class="col-lg-12">
       <div class="card">
          <div class="card-body">
             <div class="row">
                <div class="col-lg-2">
                   <div class="item1 ms-1">
                      <img src="../assets/images/user/15.jpg" class="img-fluid rounded profile-image" alt="profile-image" loading="lazy">
                   </div>
                </div>
                <div class="col-lg-10">
                   <div class="d-flex justify-content-between">
                      <div class="item2 ">
                         <h4 class="">Mathilda Gvarliani</h4>
                         <span>60 630 followers</span>       
                      </div>
                      <div class="item4 ms-1">
                         <div class="d-flex justify-content-between align-items-center ms-1 flex-wrap">
                            <div class="d-flex align-items-center">
                               <span class="material-symbols-outlined writ-icon md-18">
                               send
                               </span>
                               <h6 class="ms-1">Write a message</h6>
                            </div>
                            <button type="button" class="btn btn-primary ms-2 btn-sm d-flex align-items-center"><span class="material-symbols-outlined  md-16">
                            add
                            </span>Follow</button>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-lg-5">
                         <div class="item5 mt-3">
                            <div class="d-flex align-items-center mb-1">
                               <span class="material-symbols-outlined  md-18">
                               business_center
                               </span>
                               <a href="#" class="link-primary h6 ms-2">Model at next model management</a>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                               <span class="material-symbols-outlined md-18">
                               import_contacts
                               </span>
                               <span class="ms-2">Studies public relations at <a href="#" class="link-primary h6">Cacus University</a></span>
                            </div>
                            <div class="d-flex align-items-center mb-1">
                               <span class="material-symbols-outlined md-18">
                               bookmark_border
                               </span>
                               <span class="ms-2"><a href="#" class="link-primary h6">Born on October 9, 2000</a></span>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3">
                         <div class="item6 border-light border-end border-start">
                            <div class="ms-2">
                               <h6 class="mb-2">People Mathilda follows</h6>
                            </div>
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
                      <div class="col-lg-4">
                         <div class="item7 ms-2">
                            <div class="d-flex justify-content-between mb-2 flex-wrap">
                               <h6>Mathilda's Interests</h6>
                               <a href="#">See all</a>
                            </div>
                            <div class="d-flex ">
                               <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Fashion</button>
                               <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill ms-1">CS</button>
                               <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill ms-1">Cats</button>
                               <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill ms-1">Politics</button>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="row">
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
                                     <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-60  rounded-circle img-fluid " loading="lazy">
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
    </div>
 </div>
</div>
  </div>
</div>
<!-- Wrapper End-->
<!-- offcanvas start -->
<div class="right-sidebar-mini right-sidebar">
    <div class="right-sidebar-panel p-0">
       <div class="card shadow-none">
          <div class="card-body p-0">
             <div class="media-height p-3" data-scrollbar="init">
                <div class="d-flex align-items-center mb-4">
                   <div class="iq-profile-avatar status-online">
                      <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt="" loading="lazy">
                   </div>
                   <div class="ms-3">
                      <h6 class="mb-0">Anna Sthesia</h6>
                      <p class="mb-0">Just Now</p>
                   </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                   <div class="iq-profile-avatar status-online">
                      <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="" loading="lazy">
                   </div>
                   <div class="ms-3">
                      <h6 class="mb-0">Paul Molive</h6>
                      <p class="mb-0">Admin</p>
                   </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                   <div class="iq-profile-avatar status-online">
                      <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="" loading="lazy">
                   </div>
                   <div class="ms-3">
                      <h6 class="mb-0">Anna Mull</h6>
                      <p class="mb-0">Admin</p>
                   </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                   <div class="iq-profile-avatar status-online">
                      <img class="rounded-circle avatar-50" src="../assets/images/user/04.jpg" alt="" loading="lazy">
                   </div>
                   <div class="ms-3">
                      <h6 class="mb-0">Paige Turner</h6>
                      <p class="mb-0">Admin</p>
                   </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                   <div class="iq-profile-avatar status-online">
                      <img class="rounded-circle avatar-50" src="../assets/images/user/11.jpg" alt="" loading="lazy">
                   </div>
                   <div class="ms-3">
                      <h6 class="mb-0">Bob Frapples</h6>
                      <p class="mb-0">Admin</p>
                   </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                   <div class="iq-profile-avatar status-online">
                      <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="" loading="lazy">
                   </div>
                   <div class="ms-3">
                      <h6 class="mb-0">Barb Ackue</h6>
                      <p class="mb-0">Admin</p>
                   </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                   <div class="iq-profile-avatar status-online">
                      <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="" loading="lazy">
                   </div>
                   <div class="ms-3">
                      <h6 class="mb-0">Greta Life</h6>
                      <p class="mb-0">Admin</p>
                   </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                   <div class="iq-profile-avatar status-away">
                      <img class="rounded-circle avatar-50" src="../assets/images/user/12.jpg" alt="" loading="lazy">
                   </div>
                   <div class="ms-3">
                      <h6 class="mb-0">Ira Membrit</h6>
                      <p class="mb-0">Admin</p>
                   </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                   <div class="iq-profile-avatar status-away">
                      <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt="" loading="lazy">
                   </div>
                   <div class="ms-3">
                      <h6 class="mb-0">Pete Sariya</h6>
                      <p class="mb-0">Admin</p>
                   </div>
                </div>
                <div class="d-flex align-items-center">
                   <div class="iq-profile-avatar">
                      <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="" loading="lazy">
                   </div>
                   <div class="ms-3">
                      <h6 class="mb-0">Monty Carlo</h6>
                      <p class="mb-0">Admin</p>
                   </div>
                </div>
             </div>
               <div class="right-sidebar-toggle bg-primary text-white mt-3 d-flex">
                  <span class="material-symbols-outlined">chat</span>
               </div>
          </div>
       </div>
    </div>
 </div>  
<footer class="iq-footer bg-white">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <ul class="list-inline mb-0">
               <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
               <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
            </ul>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
            Copyright 2020
            <a href="#">SocialV</a>
            All Rights Reserved.
       </div>
       </div>
      </div>
   </footer>  <!-- Live Customizer start -->
<!-- Setting offcanvas start here -->
<div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer" data-bs-backdrop="false" data-bs-scroll="true" aria-labelledby="live-customizer-label">
    <div class="offcanvas-header pb-0">
        <div class="d-flex align-items-center">
            <h4 class="offcanvas-title" id="live-customizer-label">Setting Pannel</h4>
        </div>
        <div class="close-icon" data-bs-dismiss="offcanvas">
            <svg xmlns="http://www.w3.org/2000/svg"  width="24px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>
    </div>
    <div class="offcanvas-body data-scrollbar">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="text-center mb-4">
                        <h5 class="d-inline-block">Style Setting</h5>
                    </div>
                    <div>
                        <!-- Theme start here -->
                        <div class="mb-4">
                            <h5 class="mb-3">Theme</h5>
                            <div class=" mb-3" data-setting="radio">
                                <div class="form-check mb-0 w-100" >
                                    <input class="form-check-input custum-redio-btn" type="radio" value="light" name="theme_scheme" id="color-mode-light" checked>
                                    <label class="form-check-label h6 d-flex align-items-center justify-content-between" for="color-mode-light">
                                       <span>Light Theme</span> 
                                        <div class="text-primary ">
                                            <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="../../../../../../www.w3.org/2000/svg.html">
                                                <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="white"/>
                                                <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"/>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                             <div class=" mb-3" data-setting="radio">
                                <div class="form-check mb-0 w-100 ">
                                    <input class="form-check-input custum-redio-btn" type="radio" value="dark"  name="theme_scheme" id="color-mode-dark">
                                    <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="color-mode-dark">
                                       <span>Dark Theme</span>
                                       <div class="text-primary ">
                                           <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="../../../../../../www.w3.org/2000/svg.html">
                                                <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"/>
                                                <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"/>
                                            </svg>
                                       </div>                                    
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between" data-setting="radio">
                                <div class="form-check mb-0 w-100">
                                    <input class="form-check-input custum-redio-btn" type="radio" value="auto"  name="theme_scheme" id="color-mode-auto">
                                    <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="color-mode-auto">
                                       <span>Device Default</span> 
                                       <div class="text-primary ">
                                            <svg class="rounded" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="../../../../../../www.w3.org/2000/svg.html">
                                                <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"/>
                                                <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                <g clip-path="url(#clip0_507_92)">
                                                <rect width="30" height="27" fill="white"/>
                                                <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                </g>
                                                <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"/>
                                                <defs>
                                                <clipPath id="clip0_507_92">
                                                <rect width="30" height="27" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                       </div>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Color customizer end here -->
                        <hr class="hr-horizontal">
                        <!-- Menu Style start here -->
                        <div>
                            <h5 class="mt-4 mb-3">Menu Style</h5>
                            <div class="d-grid gap-3 grid-cols-3 mb-4">
                                <div data-setting="checkbox" class="text-center">
                                    <input type="checkbox" value="sidebar-mini" class="btn-check" name="sidebar_type" id="sidebar-mini">
                                    <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-mini">
                                        Mini
                                    </label>
                                </div>
                                <div data-setting="checkbox" class="text-center">
                                    <input type="checkbox" value="sidebar-hover" data-extra="{target: '.sidebar', ClassListAdd: 'sidebar-mini'}"
                                        class="btn-check" name="sidebar_type" id="sidebar-hover">
                                    <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-hover">
                                        Hover
                                    </label>
                                </div>
                                <div data-setting="checkbox" class="text-center">
                                    <input type="checkbox" value="sidebar-soft" class="btn-check" name="sidebar_type" id="sidebar-soft">
                                    <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-soft">
                                        Soft
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Menu Style end here -->

                        <hr class="hr-horizontal">

                        <!-- Active Menu Style start here -->

                        <div class="mb-4">
                            <h5 class="mt-4 mb-3">Active Menu Style</h5>
                            <div class="d-grid gap-3 grid-cols-2">
                                <div data-setting="radio" class="text-center">
                                    <input type="radio" value="navs-rounded" class="btn-check" name="sidebar_menu_style" id="navs-rounded">
                                    <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded">
                                        Rounded One
                                    </label>
                                </div>
                                <div data-setting="radio" class="text-center">
                                    <input type="radio" value="navs-rounded-all" class="btn-check" name="sidebar_menu_style" id="navs-rounded-all">
                                    <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded-all">
                                        Rounded All
                                    </label>
                                </div>
                                <div data-setting="radio" class="text-center">
                                    <input type="radio" value="navs-pill" class="btn-check" name="sidebar_menu_style" id="navs-pill">
                                    <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill">
                                        Pill One Side
                                    </label>
                                </div>
                                <div data-setting="radio" class="text-center">
                                    <input type="radio" value="navs-pill-all" class="btn-check" name="sidebar_menu_style" id="navs-pill-all">
                                    <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill-all">
                                        Pill All
                                    </label>
                                </div>
                            </div>
                        </div>
                         <hr class="hr-horizontal">
                        <!-- Color customizer start here -->
                        <div>
                            <div class="d-flex align-items-center justify-content-between my-3">
                                <h5>Color Customizer</h5>
                                <div class="d-flex align-items-center">
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-default" class="btn-check" name="theme_color" id="theme-color-default" data-colors='{"primary": "#50b5ff", "info": "#d592ff"}'>
                                        <label class="btn bg-transparent border-0" for="theme-color-default" data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Color" data-bs-original-title="Reset color">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="../../../../../../www.w3.org/2000/svg.html">
                                                <path d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z" fill="#31BAF1"/>
                                                <path d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z" fill="#0169CA"/>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-cols-5 mb-4 d-grid gap-3">
                                <div data-setting="radio">
                                    <input type="radio" value="theme-color-blue" class="btn-check" name="theme_color"
                                        id="theme-color-1" data-colors='{"primary": "#4285F4", "info": "#EA4335"}'>
                                    <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Gmail" data-bs-original-title="Gmail">
                                        <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                            <circle cx="12" cy="12" r="10" fill="#4285F4" />
                                            <path d="M2,12 a1,1 1 1,0 20,0" fill="#EA4335" />
                                        </svg>
                                    </label>
                                </div>
                                <div data-setting="radio">
                                    <input type="radio" value="theme-color-red" class="btn-check" name="theme_color" id="theme-color-2" data-colors='{"primary": "#FF4500", "info": "#1A73E8"}'>
                                    <label class="btn btn-border  d-block bg-transparent p-2" for="theme-color-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Reddit" data-bs-original-title="Reddit">
                                        <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                            <circle cx="12" cy="12" r="10" fill="#FF4500" />
                                            <path d="M2,12 a1,1 1 1,0 20,0" fill="#1A73E8" />
                                        </svg>
                                    </label>
                                </div>
                                <div data-setting="radio">
                                    <input type="radio" value="theme-color-purple" class="btn-check" name="theme_color" id="theme-color-3" data-colors='{"primary": "#8755f2", "info": "#EE4266"}'>
                                    <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitch" data-bs-original-title="Twitch">
                                        <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                            <circle cx="12" cy="12" r="10" fill="#8755f2" />
                                            <path d="M2,12 a1,1 1 1,0 20,0" fill="#EE4266" />
                                        </svg>
                                    </label>
                                </div>
                                <div data-setting="radio">
                                    <input type="radio" value="theme-color-cyan" class="btn-check" name="theme_color" id="theme-color-4" data-colors='{"primary": "#0A66C2", "info": "#333333"}'>
                                    <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-4" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkdin" data-bs-original-title="Linkdin">
                                        <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                            <circle cx="12" cy="12" r="10" fill="#0A66C2" />
                                            <path d="M2,12 a1,1 1 1,0 20,0" fill="#333333" />
                                        </svg>
                                    </label>
                                </div>
                                <div data-setting="radio">
                                    <input type="radio" value="theme-color-green" class="btn-check" name="theme_color" id="theme-color-5" data-colors='{"primary": "#00b75a", "info": "#000000"}'>
                                    <label class="btn btn-border d-block bg-transparent p-2" for="theme-color-5" data-bs-toggle="tooltip" data-bs-placement="top" title="Spotify" data-bs-original-title="Spotify">
                                        <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                            <circle cx="12" cy="12" r="10" fill="#00b75a" />
                                            <path d="M2,12 a1,1 1 1,0 20,0" fill="#000000" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>
                          <!-- Theme end here -->
                        <hr class="hr-horizontal">
                        <div>
                            <h5 class="mb-3 mt-4">Direction</h5>
                            <div class=" mb-3" data-setting="radio">
                                <div class="form-check mb-0 w-100">
                                    <input class="form-check-input custum-redio-btn" type="radio" value="ltr" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-ltr" checked>
                                    <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="theme-scheme-direction-ltr">
                                       <span>LTR</span>
                                        <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="../../../../../../www.w3.org/2000/svg.html">
                                            <circle cx="11.5" cy="13.5002" r="6.5" fill="currentColor"/>
                                            <rect x="21" y="7.70026" width="34" height="5" rx="2" fill="#80868B"/>
                                            <rect opacity="0.5" x="21" y="16.1003" width="25.6281" height="3.2" rx="1.6" fill="#80868B"/>
                                            <rect x="0.375" y="0.375244" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"/>
                                        </svg>
                                    </label>
                                </div>
                               
                            </div>
                             <div class="mb-3" data-setting="radio">
                                <div class="form-check mb-0 w-100">
                                    <input class="form-check-input custum-redio-btn" type="radio" value="rtl" class="btn-check" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-rtl">
                                    <label class="form-check-label h6 d-flex align-items-center justify-content-between "  for="theme-scheme-direction-rtl">
                                        <span>RTL</span>
                                        <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="../../../../../../www.w3.org/2000/svg.html">
                                            <circle r="6.5" transform="matrix(-1 0 0 1 48.5 13.5002)" fill="currentColor"/>
                                            <rect width="34" height="5" rx="2" transform="matrix(-1 0 0 1 39 7.70026)" fill="#80868B"/>
                                            <rect opacity="0.5" width="25.6281" height="3.2" rx="1.6" transform="matrix(-1 0 0 1 39 16.1003)" fill="#80868B"/>
                                            <rect x="-0.375" y="0.375" width="59.25" height="26.25" rx="4.125" transform="matrix(-1 0 0 1 59.25 0.000244141)" stroke="currentColor" stroke-width="0.75"/>
                                        </svg>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Theme end here -->
                        <!-- Active Menu Style end here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Settings sidebar end here -->

<a class="btn btn-fixed-end btn-danger btn-icon btn-setting" id="settingbutton"
    data-bs-toggle="offcanvas" data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
    <span class="icon material-symbols-outlined animated-rotate text-white">
        settings
    </span>
</a>  <!-- Live Customizer end -->

<div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn" aria-labelledby="shareBottomLabel">
   <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
       <div class="close-icon" data-bs-dismiss="offcanvas">
            <svg xmlns="http://www.w3.org/2000/svg"  width="24px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>
   </div>
   <div class="offcanvas-body small">
      <div class="d-flex flex-wrap align-items-center">
         <div class="text-center me-3 mb-3">
            <img src="../assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
            <h6>Facebook</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="../assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
            <h6>Twitter</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="../assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
            <h6>Instagram</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="../assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
            <h6>Google Plus</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="../assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
            <h6>LinkedIn</h6>
         </div>
         <div class="text-center me-3 mb-3">
            <img src="../assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
            <h6>YouTube</h6>
         </div>
      </div>
   </div>
</div>  

@endsection