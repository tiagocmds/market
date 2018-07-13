@extends('layouts.app')
@section('main')
	<form action="{{ route('markets.update', $market) }}" method="post">
		{{ method_field('patch') }}
		@foreach ($farms as $id => $farm)
			<div>
				<label for="{{ $farm }}">
					<input type="checkbox" name="farms[]" value="{{ $id }}"  {{ $market->farms()->getRelatedIds()->contains($id) ? "checked" : "" }} >
						
						{{ $farm }}
				</label>
			</div>				
    	@endforeach
    	{{ csrf_field() }}
		<div class="form-group">
			<h4><label class="label label-default" for="name">Market Name</label></h4>
			<input type="text" class="form-control" name="name" placeholder="Nome do Mercado" :focus value="{{$market->name}}">
		</div>
		<br>
		<div class="form-group">
		<h4><label class="label label-default" for="city">Market City</label></h4>
		<input type="text" class="form-control" name="city" placeholder="Nome da Cidade" value="{{$market->city}}">
		</div>
		<br>
		<div class="form-group">
		<h4><label class="label label-default" for="website">Market WebSite</label></h4>
		<input type="text" class="form-control" name="website" placeholder="Nome do Website" value="{{$market->website}}">
		</div>
		<br>
		<br>
		<button type="submit" class="btn btn-success">Create</button>
		<a class="btn btn-danger" href="{{route('markets.index')}}">Voltar</a>
	</form>
@endsection	