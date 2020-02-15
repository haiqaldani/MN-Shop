<header class="site-navbar" role="banner">
    <div class="site-navbar-top">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                    <form action="" class="site-block-top-search">
                    <span class="icon icon-search2"></span>
                    <input type="text" class="form-control border-0" placeholder="Search">
                    </form>
                </div>

                <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                    <div class="site-logo">
                    <a href="{{route('home')}}" class="js-logo-clone">MN-SHOP</a>
                    </div>
                </div>

                <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                    <div class="site-top-icons">
                        <ul>
                            <li>
                                <a href="cart.html" class="site-cart" style="margin-right: 20px;">
                                    <span class="icon icon-shopping_cart"></span>
                                    <span class="count">2</span>
                                </a>

                            </li>
                            @guest
                            <li>
                                <a class="site-cart btn  my-2 my-sm-0 px-4"
                                    type="button"
                                    onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                                        LOGIN
                                </a>
                            </li>
                            @endguest
                            @auth
                            <li>
                                <form action="{{ url('logout') }}" method="POST">
                                @csrf
                                    <button class="site-cart btn  my-2 my-sm-0 px-4" type="submit">
                                        LOGOUT
                                    </button>
                                </form>
                            </li>
                            @endauth
                            <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
            <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                <li class="has-children">
                    <a href="{{route('categories')}}">Category</a>
                    <ul class="dropdown">
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Children</a></li>
                        <li><a href="#">Women</a></li>
                    </ul>
                </li>
                <li><a href=" {{route('items')}} ">Shop</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
