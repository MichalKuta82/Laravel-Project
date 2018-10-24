@extends('layouts.admin')

@section('content')

<h1>Users</h1>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Active</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
    </tr>
  </thead>
  <tbody>
  	@if($users)

	  	@foreach($users as $user)
		    <tr>
		      <td>{{$user->id}}</td>
		      <td>{{$user->name}}</td>
		      <td>{{$user->email}}</td>
		      <td>{{$user->role->name}}</td>
		      <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
		      <td>{{$user->created_at->toDayDateTimeString()}}</td>
		      <td>{{$user->updated_at->toDayDateTimeString()}}</td>
		    </tr>
	    @endforeach

    @endif
  </tbody>
</table>

@stop