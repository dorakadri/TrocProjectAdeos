@extends('components.layout')
@section('content')
@extends('components.layout')
@section('content')
<div class="container container-fluide px-5 py-5">
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
            <div class="col-sm-12">
            <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white text-center mt-5"> Add Contact </h3>
                </div>
            </div>
        </div>

        <div class="card-body">
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

                <div class="form-group">
                    <label class="form-label" for="name">Phone Number</label>
                    <input type="text" class="form-control" name="number" placeholder="Number">
                </div>
             
                <div class="form-group">
                    <label class="form-label" for="address">Local Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Local Address">
                </div>

                <button type="submit" class="btn btn-primary">Create Contact</button>
            </div>
        </div>
    </form>
</div>
@endsection


@endsection