		@extends('layouts.app')
		@section('main')
		<a href="{{ route('markets.create') }}">Cadastrar</a>
		<ul>
			@foreach($markets as $market)
				<li>
					<a href="{{ route('markets.show', $market) }}">
						{{ $market->name }}
					</a>
				</li>
			@endforeach
		</ul>
		{{ $markets->links() }}
		@endsection	


		