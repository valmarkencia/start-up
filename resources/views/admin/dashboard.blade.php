@extends('layouts.master')

@section('content')

<div>
@if ($users->isEmpty())
	No task were created yet. Click <a class="modal-link" data-toggle="modal" data-target="#myModal">
  here
</a> to create

@else
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    	<th>ID</th>
    	<th>Name</th>
    	<th>Email</th>
    	<th>Permission</th>
    	<th>Date Registered</th>
    </tr>
   </thead>
   <tbody>
   	@foreach ($users as $user)
   	<tr>
		<td>{{$user->id}}</td>
		<td>{{ucwords($user->name)}}</td>
		<td>{{$user->email}}</td>
		<td>{{$user->permission}}</td>
		<td>{{$user->created_at->diffForHumans()}}</td>
   	</tr>
	@endforeach
   </tbody>
  </table>
</div>
@endif

@endsection