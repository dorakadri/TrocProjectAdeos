@extends('components.layout')
@section('content')

<div class="container">
    <h3 class="text-center mb-4">Association Details</h3>
    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{$association->name}}</td>
        </tr>
        <tr>
            <th>Logo</th>
            <td><img src="{{ asset('logos/'.$association->logo) }}" alt="Association Logo" style="max-width: 200px;"></td>
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
