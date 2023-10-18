
@extends('admin.components.layout')
@section('contentadmin')



<div class="card " classname="justify-content-center">

    <div class="card-header ">
        <h3 class="text-center" >Contact Details</h3>
    </div>
    <div class="card-body">
        <p class="card-text">Number: {{ $contact->number }}</p>
        <p class="card-text">Address: {{ $contact->address }}</p>
        <p class="card-text">Association: {{ $contact->association->name }}</p> <!-- Assuming there's a 'name' property in the Association model -->
    </div>
</div>

@endsection

        