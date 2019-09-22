@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($cart as $c)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="data:image/png;base64, {{ $c->image_64 }}" class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $c->name }}</h5>
                                <p class="card-text">{{ $c->description}}</p>

                                <a href="{{ url('cart/remove', $c->id) }}">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection