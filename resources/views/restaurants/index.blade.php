@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Restaurant4.0</div>
                <div class="card-body">
<table border='1'>
	<tr>
			<td> 
				Име
			</td>
			<td> 
				Свободни места
			</td>
	</tr>

@foreach($restaurants as $restaurant)
	<tr>
			<td> 
			<a href=" {{ route('restaurants.show', $restaurant->id) }}">{{ $restaurant->name }}
			</td>
			<td> 
			{{ $restaurant->friday_capacity}}
			</td>
	</tr>


@endforeach
</table>
</div>
            </div>
        </div>
    </div>
</div>
@endsection


