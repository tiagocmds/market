@extends('layouts.app')
@section('main')
<h1>{{ $market->name }}</h1>

<ul>
		<li>Location City: {{ $market->city }} </li>
		<li>Website: {{ $market->website }}</li>
</ul>
<form action="{{ route('markets.store') }}" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="_token" value="DaBSErIR...WPPI">
	<label for="name">Market Name</label>
	<input type="text" name="name">
	<label for="city">Market Name</label>
	<input type="text" name="city">
	<label for="website">Market Name</label>
	<input type="text" name="website">
	<button type="submit">Create</button>
</form>	
@endsection		