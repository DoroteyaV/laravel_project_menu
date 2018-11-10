@extends('layouts.app')
		
@section('content')
<h1>
	МЕНЮ
</h1>
<table border="1">
	<tr>
	@foreach($menu as $menu)
		
		<td>
			{{ $menu->name}}
		</td>
		
	@endforeach
	
	@foreach($dish as $key)
		
		<td>
			{{ $key->name}}
		</td>
		<td>
			{{ $key->price}}
		</td>
		
	@endforeach
	</tr>
</table>
<p></p>
<a class="btn btn-primary" href="{{route('menu.create')}}">състави меню </a>

@endsection