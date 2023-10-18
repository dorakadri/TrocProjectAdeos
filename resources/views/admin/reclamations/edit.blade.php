@extends('admin.components.layout')
@section('contentadmin')
    <div id="content-page" class="content-page">
          <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <div class="container">

  <div class="row">
            <div class="col-sm-12">
                <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white"> Edit Reclamation</h3>
                  
                </div>
                </div>
            </div>
         
            <div class="col-sm-12 col-lg-12">
                <div class="card-body">
                  
                   <form method="post" action="{{route('reclamation.update', ['reclamation' => $reclamation])}}">
        @csrf 
        @method('put')
                    
                       <div class="form-group">
    <label class="form-label" for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title" value="{{$reclamation->title}}" readonly>
</div>
<div class="form-group">
    <label class="form-label" for="description">Description</label>
    <input type="text" class="form-control" name="description" placeholder="Description" value="{{$reclamation->description}}" readonly>
</div>

                      
                      <div class="form-group">
    <label class="form-label" for="status">Status</label>
    <select class="form-control" name="status" id="status">
        <option value="treated" {{ $reclamation->status === 'treated' ? 'selected' : '' }}>Treated</option>
        <option value="not_treated" {{ $reclamation->status === 'not_treated' ? 'selected' : '' }}>Not Treated</option>
    </select>
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