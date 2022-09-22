@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Student</h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">           
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('students.update',$student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-6">
        <div class="col-md-12">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" value="{{ $student->name }}" class="form-control" >
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" value="{{ $student->email }}" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Phone:</label>
                <input type="number" name="phone" value="{{ $student->phone }}" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Grade:</label>
                <input type="text" name="grade" value="{{ $student->grade }}" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Age:</label>
                <input type="number" name="age" min="1" value="{{ $student->age }}" class="form-control" >
            </div>
        </div>
        <div class="col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
    </form>
</div>
@endsection
