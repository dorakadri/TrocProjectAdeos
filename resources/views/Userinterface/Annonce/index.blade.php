
@extends('components.layout')
@section('content')

<div class="position-relative">
</div>
<div id="content-page" class="content-page">
  <div class="container">
        <div class="row">
            <div class="col-lg-8 row m-0 p-0">
                <div class="col-sm-12">
                  @include('Userinterface.Annonce.create')
         </div>
         @unless (count($annonces)==0)


         @foreach ($annonces as $annonce )

       <x-Annonce-card  :annonce="$annonce" />
        @endforeach
        
        @else 
        <p>no Annonce found</p>
        @endunless 
       </div>
       <div class="col-lg-4">
         <div class="card">
           <div class="card-header d-flex justify-content-between">
             <div class="header-title">
               <h4 class="card-title">Events</h4>
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
               <li class="d-flex mb-3 align-items-center active">
                 <img
                   src="../assets/images/page-img/s2.jpg"
                   alt="story-img"
                   class="rounded-circle img-fluid"
                 />
                 <div class="stories-data ms-3">
                   <h5>Anna Mull</h5>
                   <p class="mb-0">1 hour ago</p>
                 </div>
               </li>
               <li class="d-flex mb-3 align-items-center">
                 <img
                   src="../assets/images/page-img/s3.jpg"
                   alt="story-img"
                   class="rounded-circle img-fluid"
                 />
                 <div class="stories-data ms-3">
                   <h5>Ira Membrit</h5>
                   <p class="mb-0">4 hour ago</p>
                 </div>
               </li>
               <li class="d-flex align-items-center">
                 <img
                   src="../assets/images/page-img/s1.jpg"
                   alt="story-img"
                   class="rounded-circle img-fluid"
                 />
                 <div class="stories-data ms-3">
                   <h5>Bob Frapples</h5>
                   <p class="mb-0">9 hour ago</p>
                 </div>
               </li>
             </ul>
             <a href="#" class="btn btn-primary d-block mt-3">See All</a>
           </div>
         </div>
        
         <div class="card">
           <div class="card-header d-flex justify-content-between">
             <div class="header-title">
               <h4 class="card-title">Suggested Communities</h4>
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
                     ><span class="material-symbols-outlined me-2 md-18">
                       visibility </span
                     >View</a
                   >
                   <a
                     class="dropdown-item d-flex align-items-center"
                     href="#"
                     ><span class="material-symbols-outlined me-2 md-18">
                       delete </span
                     >Delete</a
                   >
                   <a
                     class="dropdown-item d-flex align-items-center"
                     href="#"
                     ><span class="material-symbols-outlined me-2 md-18">
                       edit </span
                     >Edit</a
                   >
                   <a
                     class="dropdown-item d-flex align-items-center"
                     href="#"
                     ><span class="material-symbols-outlined me-2 md-18">
                       print </span
                     >Print</a
                   >
                   <a
                     class="dropdown-item d-flex align-items-center"
                     href="#"
                     ><span class="material-symbols-outlined me-2 md-18">
                       file_download </span
                     >Download</a
                   >
                 </div>
               </div>
             </div>
           </div>
           <div class="card-body">
             <ul class="suggested-page-story m-0 p-0 list-inline">
               <li class="mb-3">
                 <div class="d-flex align-items-center mb-3">
                   <img
                     src="../assets/images/page-img/42.png"
                     alt="story-img"
                     class="rounded-circle img-fluid avatar-50"
                     loading="lazy"
                   />
                   <div class="stories-data ms-3">
                     <h5>Iqonic Studio</h5>
                     <p class="mb-0">Lorem Ipsum</p>
                   </div>
                 </div>
                 <img
                   src="../assets/images/small/img-1.jpg"
                   class="img-fluid rounded"
                   alt="Responsive image"
                   loading="lazy"
                 />
                 <div class="mt-3">
                   <a
                     href="#"
                     class="d-flex align-items-center justify-content-center"
                     ><span class="material-symbols-outlined me-2 md-18">
                       thumb_up
                     </span>
                     Like Page</a
                   >
                 </div>
               </li>
               <li class="">
                 <div class="d-flex align-items-center mb-3">
                   <img
                     src="../assets/images/page-img/42.png"
                     alt="story-img"
                     class="rounded-circle img-fluid avatar-50"
                     loading="lazy"
                   />
                   <div class="stories-data ms-3">
                     <h5>Cakes & Bakes</h5>
                     <p class="mb-0">Lorem Ipsum</p>
                   </div>
                 </div>
                 <img
                   src="../assets/images/small/img-2.jpg"
                   class="img-fluid rounded"
                   alt="Responsive image"
                 />
                 <div class="mt-3">
                   <a
                     href="#"
                     class="d-flex align-items-center justify-content-center"
                     ><span class="material-symbols-outlined me-2 md-18">
                       thumb_up
                     </span>
                     Like Page</a
                   >
                 </div>
               </li>
             </ul>
           </div>
         </div>
       </div>
   
     </div>
        </div>
       
    </div>
  @endsection