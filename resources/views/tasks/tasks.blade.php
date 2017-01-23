@extends('layouts.master')

@section('content')
<div>
@if ($tasks->isEmpty())
	No task were created yet. Click <a class="modal-link" data-toggle="modal" data-target="#myModal">
  here
</a> to create.

@else
<a class="btn btn-success" data-toggle="modal" data-target="#myModal">
  Create
</a>
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
    	<th>ID</th>
    	<th>Title</th>
    	<th>Description</th>
    	<th>Priority</th>
    	<th>Due Date</th>
    </tr>
   </thead>
   <tbody>
   	@foreach ($tasks as $task)
   	<tr>
		<td>{{$task->id}}</td>
		<td>{{ucwords($task->title)}}</td>
		<td>{{$task->description}}</td>
		<td>{{$task->priority}}</td>
		<td>{{$task->due_date->diffForHumans()}}</td>
	
   	</tr>
   	@endforeach
   </tbody>
  </table>
</div>
@endif
<!-- Modal -->
<form method="POST" action="{{url('/tasks')}}">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New Task</h4>
      </div>

	<div class="modal-body">
	<div class="row">
	<div class="col-xs-6">	
        <div class="form-group">
        	{{csrf_field()}}
        	<label name="title">Title</label>
        	<input type="text" name="title" class="form-control"><br>
        	<label name="description">Description</label>
        	<textarea rows="3" name="description" class="form-control"> </textarea>
        	<label name="priority">Priority</label>
        	<input type="text" name="priority" class="form-control"><br>
        </div>
	</div>
        <div class="col-xs-6">
	        <label name="due_date">Due Date:  </label>
			<input type="hidden" name="due_date" id="my_hidden_input" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}" class="date">
	    	<div id="datepicker" data-date="{{ Carbon\Carbon::now()->format('Y-m-d') }}"></div>
		</div>
	</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create</button>
       
      </div>
    </div>
  </div>
</div>
</form>
@endsection