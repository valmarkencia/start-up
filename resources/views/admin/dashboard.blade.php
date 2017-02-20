@extends('layouts.master')

@section('content')

<div>
@if (!$users->isEmpty() && Auth::user()->permission === 'admin')
  <div class="overview">
    <div class="row"> 
      <div class="col-sm-6"></div>
      <div class="col-sm-6">
          <div class="col-sm-3"></div>
          <div class="col-sm-3">
            <div class="data">
            @if ($users->isEmpty())
              No users yet!

            @else
            {{ $users->count() }}
            @endif
            </div>
            <div class="title">
            @if ( $users->count() == '1')
              User
            @else
              Users
            @endif
            </div>
          </div>



          <div class="col-sm-3">
          <div class="data">{{ $tasks->count() }}</div>
            <div class="title">Tasks</div>
          </div>

          <div class="col-sm-3">
            <div class="data">
              {{ number_format($income, 2) }}
            </div>
            <div class="title">
              Income
            </div>
          </div>

      </div>
      </div>
    </div>
@endif
  </div>
@if ($users->isEmpty())
	No task were created yet. Click <a class="modal-link" data-toggle="modal" data-target="#myModal">
  here
</a> to create

@else


@endif

@endsection