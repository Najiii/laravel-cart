<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('img/logo.png') }}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown_1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                    @foreach($errors as $c)
                                        <a class="dropdown-item" href="{{ url('category/show', $c->id) }}">{{ $c->name }}</a>
                                    @endforeach
                                </div>
                            </li>
                            
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                            @endguest

                            @if (Auth()->user())
                            <li class="nav-item">
                                <a href="{{ url('cart/show') }}" class="nav-link">Cart</a>
                            </li>
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex">
                        <a id="search_1">
                            <i class="fas fa-search"></i>
                        </a>
                        <a>
                            <i class="far fa-heart"></i>
                        </a>
                        <div class="dropdown cart">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cart-plus"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>