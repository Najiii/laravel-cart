@extends('layouts.app')

@section('content')
    @if ( isset($cart) && count($cart) > 0)
    <section class="cart_area padding_top">
        <div class="container">
            <div class="cart_inner">
                <div class="table_responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($cart as $c)
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="data:image/png;base64, {{ $c->image_64 }}" width="145px" height="85px"/>
                                            </div>
                                            <div class="media-body">
                                                <h3>{{ $c->name }}</p>
                                                <p>{{ $c->description }}</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                      <h5>{{ $c->price }} Rs</h5>
                                    </td>

                                    <td>
                                        <a href="{{ url('cart/remove', $c->id) }}" class="btn btn-danger btn-sm">Remove</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @else
        <h1 style="margin: 20% auto; text-align: center; font-weight: 400;">Add some items to cart!</h1>
    @endif
@endsection