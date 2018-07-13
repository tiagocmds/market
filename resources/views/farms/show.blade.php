@extends('layouts.app')
@section('main')
	<div class="panel panel-primary">
	  <div class="panel-heading"><h3>{{ $farm->name }}</h3></div>
	  <div class="panel-body">
	    <b>Location City:</b> {{ $farm->city }} 
	    <br>
	    <b>Website:</b> {{ $farm->website }}
	  </div>
	</div>
	<a class="btn btn-primary" href="{{route('farms.index')}}">Voltar</a>
@endsection	