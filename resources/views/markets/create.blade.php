
@extends('layouts.app')
@section('main')
<form action="{{ route('markets.store') }}" method="post">
	{{ csrf_field() }}
	
	<label for="name">Market Name</label>
	<input type="text" name="name">
	<label for="city">Market City</label>
	<input type="text" name="city">
	<label for="website">Market WebSite</label>
	<input type="text" name="website">
	<button type="submit" class="btn btn-default">Create</button>
</form>	
@endsection	