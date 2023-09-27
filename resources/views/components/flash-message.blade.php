@if(session()->has('message'))
<div x-data="{show : true}" x-init="setTimeout(() => show = false ,3000)" x-show="show"   class="alert alert-success " role="alert">
   <div  class="d-flex gap-3 align-items-cente">

    <span ><i class="material-symbols-outlined">thumb_up</i></span>
    <span>{{session('message')}}</span>

   </div>

 </div>
@endif