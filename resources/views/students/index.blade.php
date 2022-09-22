@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb">            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Create Student</a>
            </div><br>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nae</th>
            <th>Eami</th>
            <th>Phone</th>
            <th>Grade</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
        @foreach ($studentList as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->grade }}</td>
            <td>{{ $student->age }}</td>
            <td><form action="{{ route('students.destroy',$student->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Do you really want to delete student!')" class="btn btn-danger">Delete</button>
            </form></td>
        </tr>
        @endforeach
    </table>
{!! $studentList->links() !!}
</div>
@endsection
