@extends('layouts.app')
@section('main')
	<div class="panel panel-primary">
	  <div class="panel-heading"><h3>{{ $farm->name }}</h3></div>
	  <div class="panel-body">
	    <b>Location City:</b> {{ $farm->city }} 
	    <br>
	    <b>Website:</b> {{ $farm->website }}
	    <br>
	    <b>Mercados Associados:</b>
	    @foreach($farm->markets()->get() as $market)
    
        <label for ='{{ $market }}'>
        <div class="panel-body">{{$market->name}}</div>
        </label>
        
 		@endforeach	
	  </div>
	</div>

	<a class="btn btn-primary" href="{{route('farms.index')}}">Voltar</a>
	<a class="btn btn-primary" href="{{route('farms.edit', $farm)}}">Editar</a>
@endsection	