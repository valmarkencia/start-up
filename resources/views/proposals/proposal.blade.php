@extends('layouts.master')

@section('content')
<!-- Options panel -->

<div class="pull-right options">
  <a href="/proposals/create" class="btn btn-primary"><i class="fa fa-plus"></i> Create Proposal</a>
</div>
<div class="clear"></div>
<hr>
<div class="table-fluid">
	<table class="table">
		<thead>
			<tr>
				<th>Project Name</th>
				<th>Client</th>
				<th>Status</th>
				<th>Date Finished</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
		@foreach($proposals as $pro)
			<tr>
				<td>{{ucwords($pro->project_name)}}</td>
				<td>{{ucwords($pro->client_name)}}</td>
				<td>
				@if($pro->status == 0)
					<span class="label label-warning">Pending</span>
				@else
					<span class="label label-success">Approved</span>
				@endif
				</td>
				<td>{{$pro->date_finished}}</td>
				<td>
				<a href="#" class="btn btn-success"><i class="fa fa-pencil"></i></a>
				<a href="proposals/delete" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection