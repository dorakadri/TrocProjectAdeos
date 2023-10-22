@extends('components.layout')
@section('content')
<style>
    .error-message {
        color: red;
        font-weight: bold;
    }
</style>

      <div>
 <div class="position-relative">
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li class="error-message">{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
</div>

    <div id="content-page" class="content-page">
   
    <div class="container">

  <div class="row">
            <div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white"> Add Reclamation</h3>
                  
                </div>
                </div>
            </div>
         
            <div class="col-sm-12 col-lg-12">
                <div class="card-body">
                  
                    <form method="post" action="{{route('reclamation.store')}}">
         @csrf 
        @method('post')
                      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group">
                            <label class="form-label" for="title">title</label>
                            <input type="text" class="form-control" name="title" placeholder="title">
                        </div>
                            <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">description</label>
                            <input type="text" class="form-control" name="description" placeholder="description">
                        </div>
                      
 <div class="form-group">
    <label class="form-label" for="status">Status</label>
    <input type="hidden" name="status" value="not_treated">
    <span class="form-control">Not Treated</span>
</div>


                      

                         
                        
                    
                  
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                       
                    </form>
                </div>
                </div>
            
            </div>
             </div>
            </div>
           </div>
     </div>
       </div>
 




    @endsection