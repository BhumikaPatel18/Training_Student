@extends('layouts.app')
@section('content')
<div class="container">
    <ul class="list-group">
        <li class="list-group-item">Name: {{$student->name}}</li>
        <li class="list-group-item">Email: {{$student->email}}</li>
        <li class="list-group-item">DoB: {{$student->dob}}</li>
        <li class="list-group-item">Address: {{$student->address}}</li>
        <li class="list-group-item">Country: {{$student->country}}</li>
        <li class="list-group-item">Subject: {{$student->state}}</li>
        <li class="list-group-item">Hobby: {{$student->hobby}}</li>
    </ul>
    <br>
    {{-- <a href="{{route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a> --}}
    <a href="{{route('students.index')}}" class="btn btn-primary">Cancel</a>
</div>

@endsection
