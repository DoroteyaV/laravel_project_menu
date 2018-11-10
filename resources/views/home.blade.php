@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<form>
					{{ csrf_field() }}
					<select name="restaurant_id">
					@foreach( $restaurant as $rest )
						<option value="{{ $rest->id }}">{{ $rest->name }}</option>
					@endforeach
					</select>
					</form>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
