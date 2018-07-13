@extends('layouts.app')
@section('main')
	<div class="panel panel-primary">
	  <div class="panel-heading"><h3>{{ $market->name }}</h3></div>
	  <div class="panel-body">
	    <b>Location City:</b> {{ $market->city }} 
	    <br>
	    <b>Website:</b> {{ $market->website }}
	  </div>
	</div>
	<a class="btn btn-primary" href="{{route('markets.index')}}">Voltar</a>
	<a class="btn btn-primary" href="{{route('markets.edit', $market)}}">Editar</a>
@endsection		