
@extends('layouts.app')
@section('main')
<form  class ="form-inline" action="{{ route('markets.store') }}" method="post">
	{{ csrf_field() }}
	<div class="form-group">
	<h4><label class="label label-default" for="name">Market Name</label></h4>
	<input type="text"
	class="form-control" name="name" placeholder="Nome do Mercado" :focus>
	</div>
	<br>
	<div class="form-group">
	<h4><label class="label label-default" for="city">Market City</label></h4>
	<input type="text" class="form-control" name="city" placeholder="Nome da Cidade">
	</div>
	<br>
	<div class="form-group">
	<h4><label class="label label-default" for="website">Market WebSite</label></h4>
	<input type="text" class="form-control" name="website" placeholder="Nome do Website">
	</div>
	<br>
	<br>
	<button type="submit" class="btn btn-success">Create</button>
	<a class="btn btn-danger" href="{{route('markets.index')}}">Voltar</a>
</form>	
@endsection	