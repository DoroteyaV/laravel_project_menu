@extends('layouts.app')

@section('content')



<div style="text-align:center">
<h1>
	Въведи нов ресторант!
</h1>
<form action="{{ route('menu.store')}}" method="POST">
{{ csrf_field() }}
	<p>Името на храната</p>
	<input type="text" name="dishname">
	<p>Цена на храната</p>
	<input type="text" name="dishprice">
	<p>Количество на храната</p>
	<input type="number" name="dishquantity">
	<p></p>
	<p>Името на напитката</p>
	<input type="text" name="drinkname">
	<p>Цена на напитката</p>
	<input type="text" name="drinkprice">
	<p>Количество на напитката</p>
	<input type="number" name="drinkquantity">
	<p></p>
	<p>Името на категорията</p>
	<input type="text" name="categoryname">
	<select name="course_id">
		@foreach( $dish as $key )
		<option value="{{ $key->id }}">{{ $key->name }}</option>
		@endforeach
	</select>
	<p></p>
	<input class="btn btn-secondary" type="submit" value="Въведи">
</form>
</div>
@endsection