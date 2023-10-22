@extends('components.layout')
@section('content')

<div class="container">
    <div class="col-sm-12 px-5 py-5">
        <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
                <h3 class="text-white text-center mt-5">Edit Association</h3>
            </div>
        </div>

        <form method="post" action="{{ route('associations.update1', ['id' => $association->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="name" value="{{$association->name}}" >
                        </div>
                        <div class="form-group">
                                <label class="form-label" for="logo">Logo</label>
                                <input type="file" class="form-control" name="logo" accept="image/*">
                            </div>
                      
                            <div class="form-group">
                            <label class="form-label" for="exampleInputPlaceholder">description</label>
                            <input type="text" class="form-control" name="description" placeholder="description" value="{{$association->description}}" >
                        </div>
                      

                    
                        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
