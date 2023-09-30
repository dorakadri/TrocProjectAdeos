@extends('components.layout')
@section('content')
<div class="col-sm-12">
                <div class="card position-relative " style="height: 150px;">
                <div class="inner-page-title">
                <a href="{{ route('post.create') }}" class="btn btn-sm btn-success d-flex align-items-center">Add Posts</a>
                  
                </div>
                </div>
            </div>

<div class="row">

      <div class="col-lg-12">
      @foreach($posts as $post )
         <div class="card card-block card-stretch card-height blog-list">
       
            <div class="card-body">
               <div class="row align-items-center">
               
               <img src="{{ asset('logos/'.$post->image) }}" alt="image Post" style="max-width: 80px;">


                     </div>
                  </div>
                  <div class="col-md-6">
                  
                     <div class="blog-description p-2 rounded">
                        <div class="blog-meta d-flex align-items-center justify-content-between mb-2">
                           <div class="date"><a href="#" tabindex="-1">{{$post->title}}</a>
                           </div>
                        </div>
                        <h5 class="mb-2">{{$post->description}}</h5>
                      
                        <div class="group-smile mt-4 d-flex flex-wrap align-items-center justify-content-between position-right-side">

                        <a href="{{ route('post.edit', ['post' => $post]) }}" class="btn btn-warning btn-rounded btn-sm my-0">Edit</a>
                        <span class="table-remove">
                           <form method="post" action="{{ route('post.destroy', ['post' => $post]) }}">
                              @csrf 
                              @method('delete')
                               <button type="submit" class="btn btn-danger btn-rounded btn-sm my-0">Delete</button>
                            </form>
                        </span>
                        </div>
                     </div>
                  </div>
                 
               </div>
            </div>.
            @endforeach
         </div>
        
      </div>
@endsection