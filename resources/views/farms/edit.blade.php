@extends('layouts.app')
@section('main')

	<form action="{{ route('markets.update', $farm) }}" method="post">
		{{ method_field('patch') }}
		{{ csrf_field() }}
	<div class="form-group">
	<h4><label class="label label-default" for="name">Farm Name</label></h4>
	<input type="text" class="form-control" name="name" placeholder="Nome da Fazenda" :focus value="{{$farm->name}}">
	</div>
	<br>
	<div class="form-group">
	<h4><label class="label label-default" for="city">Farm City</label></h4>
	<input type="text" class="form-control" name="city" placeholder="Nome da Cidade" value="{{$farm->city}}">
	</div>
	<br>
	<div class="form-group">
	<h4><label class="label label-default" for="website">Farm WebSite</label></h4>
	<input type="text" class="form-control" name="website" placeholder="Nome do Website" value="{{$farm->website}}">
	</div>
	<br>
	<br>		
	<button type="submit" class="btn btn-success">Create</button>
	<a class="btn btn-danger" href="{{route('farms.index')}}">Voltar</a>
	</form>	
@endsection		