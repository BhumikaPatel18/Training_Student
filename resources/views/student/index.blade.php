@extends('layouts.app')
@section('content')
    <div class="container">
        <a href={{route('students.create')}} class="btn btn-primary">Insert New Record</a>
        <table class="table" id="myTable">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">DoB</th>
                <th scope="col">Address</th>
                <th scope="col">Country</th>
                <th scope="col">State</th>
                <th scope="col">Hobby</th>
                {{-- <th colspan=2  class="text-center">Action</th> --}}

              </tr>
            </thead>
            {{-- <tbody>
                @foreach ($students as $student)

                    <tr>
                        <td><a href="{{route('students.show', $student->id)}}">{{$student->name}}</a></td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->country}}</td>
                        <td>{{$student->state}}</td>
                        <td>{{$student->hobby}}</td>
                        <td><a href="{{route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a></td>
                        <td><form action="{{route('students.destroy',$student->id)}}" method="post">
                            @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary">Delete</button>
                        </form></td>


                    </tr>

                @endforeach --}}

            </tbody>
          </table>
    </div>




    <script>


     </script>
@endsection
