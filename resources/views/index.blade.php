<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            ecommerce
        </title>

        @include('master.stylesheet') 

    </head>
    <body>
        @include('master.navbar')

        <section class="product_list section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_list_slider owl-carousel">
                            <div class="single_product_list_slider">
                                <div class="row align-items-center justify-content-between">
                                    @foreach ($products as $product)
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single_product_item">
                                                <img src="data:image/jpeg;base64, {{ $product->image_64 }}" width="280px" height="200px">
                                                <div class="single_product_text">
                                                    <h4>{{ $product->name }}</h4>
                                                    <h3>{{ $product->price }}</h3>

                                                    @guest
                                                        <a href="{{ route('login') }}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                    @endguest
                                                    
                                                    @auth
                                                        <a href="{{ url('cart/add', $product->id) }}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>   
                                                    @endauth
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('master.scripts') 
    </body>
</html>
