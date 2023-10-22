@if(session()->has('message'))
<div x-data="{show : true}" x-init="setTimeout(() => show = false ,4000)" x-show="show"   class="alert  alert-solid  alert-success " role="alert"  
 style="min-width: 40rem;left: 2rem;    bottom: 1rem;    max-width: max-content; 
    position: fixed;    z-index: 100000; ">
   <div  class="d-flex gap-3 align-items-cente">

    <span ><i class="material-symbols-outlined">thumb_up</i></span>
    <h4  class="text-white">{{session('message')}}</h4>

   </div>

 </div>
@elseif(session()->has('infoMessage'))
<div x-data="{show : true}" x-init="setTimeout(() => show = false ,4000)" x-show="show"   class="alert  alert-solid  alert-info " role="alert"  
 style="min-width: 40rem;left: 2rem;    bottom: 2rem;    max-width: max-content; 
    position: fixed;    z-index: 100000; ">
   <div  class="d-flex gap-3 align-items-cente">

    <span ><i class="material-symbols-outlined me-1">done</i></span>
    <h4  class="text-white">{{session('infoMessage')}}</h4>

   </div>

 </div>
@endif

 
 