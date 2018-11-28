@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Restaurant4.0</div>
                <div class="card-body">
					<a href=" {{ route('restaurants.index') }}">Разгледай ресторантите</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
