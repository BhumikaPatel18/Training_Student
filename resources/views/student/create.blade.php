@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Create Record</h2>

    {!! Form::open([
        'route' => 'students.store',
        'method' => 'Post'
    ]) !!}

    @include('student.form')
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('students.index')}}" class="btn btn-primary">Cancel</a>

    {!! Form::close() !!}

</div>
    
@endsection