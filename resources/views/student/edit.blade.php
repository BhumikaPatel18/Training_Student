@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Edit Record</h2>

    {!! Form::open([
        'route' => ['students.update',$student->id],
        'method' => 'Post'
        ]) !!}
   
    @method('PATCH')
    @include('student.form')
    <button type="submit" class="btn btn-primary">Update form</button>
    <a href="{{route('students.index')}}" class="btn btn-primary">Cancel</a>

{!! Form::close() !!}

</div>
    
@endsection