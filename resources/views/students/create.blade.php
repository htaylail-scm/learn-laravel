@extends('layouts.app')
@section('content')
<div class="container">
    
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create Student</h2>
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
    <form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="col-md-6">
            <div class="col-md-8">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" >
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" >
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                <strong>Phone:</strong>
                <input type="number" min="1" name="phone" class="form-control">
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <strong>Grade:</strong>
                <input type="text" min="1"  name="grade" class="form-control">
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <strong>Age:</strong>
                <input type="number" min="1" name="age" class="form-control">
            </div>
        </div>
        <div class="col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
</div>
@endsection