@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Restaurant4.0</div>
                <div class="card-body">
<<<<<<< HEAD
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<a href="{{route('restaurant.index')}}">Ресторанти</а>
					</form>
					</div>
=======
					<a href=" {{ route('restaurants.index') }}">Разгледай ресторантите</a>
>>>>>>> master
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
