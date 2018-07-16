@extends('layouts.app')
@section('main')
	<div class="panel panel-primary">
	  <div class="panel-heading"><h3>{{ $market->name }}</h3></div>
	  <div class="panel-body">
	    <b>Location City:</b> {{ $market->city }} 
	    <br>
	    <b>Website:</b> {{ $market->website }}
	    <br>
	    <b>Fazendas Associadas:</b>
	    @foreach($market->farms()->get() as $farm)
        <label for ='{{ $farm }}'>
        <div class="panel-body">{{$farm->name}}</div>
        </label>
 		@endforeach
	  </div>
	</div>
	<a class="btn btn-primary" href="{{route('markets.index')}}">Voltar</a>
	<a class="btn btn-primary" href="{{route('markets.edit', $market)}}">Editar</a>
@endsection		