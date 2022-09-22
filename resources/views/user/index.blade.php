@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
  <tbody>
    @foreach($userList as $user)
    <tr>
        <td>1</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
    </tr>
    @endforeach
  </tbody>
    </table>
</div>
@endsection
