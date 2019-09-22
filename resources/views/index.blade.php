<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            ecommerce
        </title>

        @include('master.stylesheet') 

        <style>
            body {
                background-color: #6ab04d;
            }

            .card img {
                width: 100%;
                height: 200px;
            }

            .card-link {
                color: white;
                padding: 5px 80px;
                background-color: #6ab04d;
            }

            .card-link:hover {
                color: white;
            }

            @media only screen and (max-width: 1195px) {
                .card {
                    margin: 5px auto;
                }
            }
        </style>
    </head>
    <body>
        @include('master.navbar')

        <div class="container-fluid mt-5">
            <div class="row d-flex justify-content-center">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-3 col-sm-2 col-12 align-middle">
                        <div class="card" style="width: 18rem;">
                            <img src="data:image/png;base64, {{ $product->image_64 }}" class="card-img-top">
                            
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                            </div>
                        
                            <div class="card-body">
                                <a class="card-link" href="{{ url('cart/add', $product->id) }}">Add to cart!</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
            
        @include('master.scripts') 
    </body>
</html>
