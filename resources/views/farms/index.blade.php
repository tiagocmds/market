@extends('layouts.app')
		@section('main')
		
		
			@foreach($farms as $farm)
				
					<a href="{{ route('farms.show', $farm) }}">
						{{ $farm->name }}<br>
					</a>
				
			@endforeach
			    {{ $farms->links() }}
		<br>
		<a class="btn btn-primary" href="{{ route('farms.create') }}">Cadastrar</a>
		<br>
		
		@endsection	