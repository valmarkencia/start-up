@extends('layouts.master')

@section('content')

<div>
@if ($users->isEmpty())
	No task were created yet. Click <a class="modal-link" data-toggle="modal" data-target="#myModal">
  here
</a> to create

@else
	@foreach ($users as $user)
		{{$user->name}}<br>
		{{$user->email}}<br>
		{{$user->permission}}<br>
		{{$user->created_at}}<br>
	@endforeach
@endif

@endsection