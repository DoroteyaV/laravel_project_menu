@extends('layouts.app')

@section('content')



<div style="text-align:center">
<h1>
	Въведи храна и напитки
</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
	<p></p>
	<select name="dish_id">
		@foreach( $dish as $key )
		<option value="{{ $key->id }}">{{ $key->name }}</option>
		@endforeach
	</select>
<p></p>
	<p>Името на Менюто</p>
	<input type="text" name="categoryname">
	<p></p>
	<select name="drink_id">
		@foreach( $drink as $drink )
		<option value="{{ $drink->id }}">{{ $drink->name }}</option>
		@endforeach
	</select>
<select name="category_id">
		@foreach( $category as $category )
		<option value="{{ $category->id }}">{{ $category->name }}</option>
		@endforeach
	</select>
	<p></p>
	<input class="btn btn-secondary" type="submit" value="Въведи">
</form>
</div>
@endsection