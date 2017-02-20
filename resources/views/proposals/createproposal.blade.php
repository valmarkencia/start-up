@extends('layouts.master')

@section('content')
<!-- Options panel -->

<div class="options">
<form method="POST" action='/projects/proposal/create'>
{{ csrf_field() }}
	<ol class="breadcrumb">
	  <li><a href="/proposals">Proposal</a></li>
	  <li class="active">Create Proposal</li>
	  <button href="#" class="btn btn-success pull-right">Save</button>
	</ol>
</div>
<div class="clear"></div>
<hr>
<div class="">
	<label for="projectname">Project Name</label>
	<input required autocomplete="off" type="text" name="project_name" class="form-control"></input>

	<label for="clientname">Client Name</label>
	<input required autocomplete="off" type="text" class="form-control" name="client_name"></input>

	<div class="info">
	<div class="row"><div class="col-xs-8"><label for="milestone[]">Milestone 1</label><textarea required type="text" name="milestone[]" class="form-control" rows="1"></textarea></div>
	<div class="col-xs-3">
      <label for="price[]">Price</label><div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" name="price[]" class="form-control milestone price" autocomplete="off" maxlength="5" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'">
      <div class="input-group-addon">.00</div>
    </div>
    </div>
    <div class="col-xs-1"><label for="option">Delete</label><a href="#" class="remove_field btn btn-danger" style="margin-top: 2px;"><i class="fa fa-times"></i></a></div></div>
	</div>
	<a class="pull-right add-new-row btn btn-success" style="margin-top: 10px;"><i class="fa fa-plus"></i> Add new Milestone</a>

</div>
</form>
<script>
	$(document).ready(function(){
		$('.add-new-row').click(function(e){ //on add input button click
        	e.preventDefault();
	        var milestone = $('.row');
	        var i = milestone.length;
            $('.info').append('<div class="row"><div class="col-xs-8"><label for="milestone[]">Milestone ' + i + '</label><textarea type="text" required name="milestone[]" class="form-control" rows="1"></textarea></div><div class="col-xs-3"><label for="price[]">Price</label><div class="input-group"><div class="input-group-addon">$</div><input type="text" required name="price[]" maxlength="5" autocomplete="off" class="form-control milestone price" onkeypress="return event.charCode >= 48 && event.charCode <= 57"><div class="input-group-addon">.00</div></div></div><div class="col-xs-1"><label for="option">Delete</label><a href="#" class="remove_field btn btn-danger" style="margin-top: 2px;"><i class="fa fa-times"></i></a></div></div>');

    	});
		$('.row').on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('.row').remove();
        i--;
    	})
	});
</script>

@endsection