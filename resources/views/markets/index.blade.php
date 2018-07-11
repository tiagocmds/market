		@extends('layouts.app')
		@section('main')
		
		
			@foreach($markets as $market)
				
					<a href="{{ route('markets.show', $market) }}">
						{{ $market->name }}<br>
					</a>
				
			@endforeach
			    {{ $markets->links() }}
		<br>
		<a class="btn btn-primary" href="{{ route('markets.create') }}">Cadastrar</a>

		<br>
		@endsection	


		