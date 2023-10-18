
@extends('components.layout')
@section('content')

<div class="card">
    <div class="card-header">
        Contact Details
    </div>
    <div class="card-body">
        <p class="card-text">Number: {{ $contact->number }}</p>
        <p class="card-text">Address: {{ $contact->address }}</p>
        <p class="card-text">Association: {{ $contact->association->name }}</p> <!-- Assuming there's a 'name' property in the Association model -->
    </div>
</div>

@endsection

        