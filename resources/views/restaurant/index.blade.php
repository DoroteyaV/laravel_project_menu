@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h1>Restaurants</h1>
					</div>
					<div class="card-body">
						@if (session('status'))
						<div class="alert alert-success" role="alert">
								{{ session('status') }}
						</div>
						@endif
						<form action="{{ route('menu.index') }}" method="GET">
							{{ csrf_field() }}
						
							<select name="restaurant_id">
								<option>---</option>
							@foreach( $restaurant as $rest )
								<option value="{{ $rest->id }}">{{ $rest->name }}</option>
							@endforeach
							</select>
							<input class="btn btn-secondary" type="submit" value="Избери">
						</form>
						<p>
							<a href="{{ route('restaurant.create') }}">Въведи ресторант</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection