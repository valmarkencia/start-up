@extends('layouts.master')

@section('content')
<div>
@if ($finances->isEmpty())
  No Income yet. Click <a class="modal-link" data-toggle="modal" data-target="#myModal">
  here
</a> to add your income.

@else
<a class="btn btn-success" data-toggle="modal" data-target="#myModal">
  Create
</a>
<div class="table-responsive">
</div>
@endif
<!-- Modal -->
<form method="POST" action="{{url('/finances')}}">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New Task</h4>
      </div>

      <div class="modal-body">
        <div class="form-group">
        {{csrf_field()}}
        <label name="amount">Amount</label>
        <input required type="text" name="amount" class="form-control"><br>
        <label name="comment">Comment</label>
        <input type="text" name="comment" class="form-control"><br>
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