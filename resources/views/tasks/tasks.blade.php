@extends('layouts.app')

@section('content')
<div class="container">
<h1>Tasks</h1>
@foreach ($tasks as $task)
	$task->title
@endforeach
</div>
@endsection