@extends('admin.components.layout')
@section('contentadmin')

<div class="container">
<div class="col-sm-12 px-5 py-5" >
         <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
            <h3 class="text-white text-center mt-5"  >  Associations  Detail</h3>
              
            </div>
         </div>
    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{$association->name}}</td>
        </tr>
        <tr>
            <th>Logo</th>
            <td><img src="{{ asset('storage/'.$association->logo) }}"  alt="Association Logo" style="max-width: 200px;"></td>
        </tr>
        </tr>
        <tr>
            <th>Responsable</th>
            <td>{{$association->responsable}}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{$association->description}}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>Not Treated</td>
        </tr>
        @foreach($association->contact as $contact)
        <tr>
            <th>Contact</th>
            <td>{{$contact->number}}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{$contact->address}}</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
