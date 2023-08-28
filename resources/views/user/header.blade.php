<header>

    {{-- <div class="header-1">

    <div class="share">
        <span> follow us : </span>
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>

     <div class="call">
        <span> call us : </span>
        <a href="#">+92 3087278088</a>
    </div>

</div> --}}

<div class="header-2">

    <a href="{{url('/')}}" class="logo"><img src="{{asset('images/logo.png')}}" alt="" style="width: 60px;color:white" ></a>


        <form action="{{ URL::to('/product') }}" class="search-bar-container" method="GET">
            <input type="search" name="search" id="search-bar" placeholder="search here...">
            <button type="submit" style="background: transparent"><label for="search-bar"
                    class="fas fa-search"></label></button>
        </form>
        <div class="col-2 mr-0 float-right">
            @if (Auth::user() == '')
                <a href="{{ route('login') }}"><button class="btn btn-primary m-0 mr-2 p-3">Log In</button></a>

                <a href="{{ route('register') }}"><button class="btn btn-primary m-0 ml-2 p-3">Register</button></a>
            @else
                <a href="{{ route('logoutt') }}"><button class="btn btn-danger m-0 mr-2 p-3">Log Out</button></a>
            @endif
        </div>

    </div>

    <div class="header-3">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="{{ url('/') }}">home</a>

            {{-- <li class="">
            <a class="nav-link dropdown-toggle nav-item dropdown" href="{{URL::to('/category')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Catagories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Flower</a>
              <a class="dropdown-item" href="#">Plant For Home</a>
              <a class="dropdown-item" href="#">Plant For Office</a>
              <a class="dropdown-item" href="#">Gift Plants</a>
              <a class="dropdown-item" href="#">Seed</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> --}}
            {{-- <a href="#category">Categories</a> --}}
            <div class="dropdown">
                <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Categories
                </a>
                {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @if (!empty($category_list))
                        @foreach ($category_list as $value)
                        <form action="{{ URL::to('/product') }}" method="GET">
                            <input type="hidden" name="category" value="{{$value->categories}}">
                            {{-- <form action="{{ URL::to('/product') }}" method="GET">
                                <input type="hidden" name="category" value="{{ $value->categories }}"> --}}
                                {{-- <a class="dropdown-item" type="submit" href="">{{ $value->categories }}</a>
                            </form>
                        @endforeach
                    @endif
                </div> --}}
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @if (!empty($category_list))
                        @foreach ($category_list as $value)
                            <form action="{{ URL::to('/product') }}" method="GET">
                                <input type="hidden" name="category" value="{{ $value->categories }}">
                               <a href="" style="text-decoration: none;" class=" m-0"><button style="" type="submit" class="dropdown-item" >{{ $value->categories }}</button></a>
                            </form>
                        @endforeach
                    @endif
                </div>


            </div>
            <a href="{{ URL::to('/product') }}">product</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/contact') }}">Contact Us</a>
            <a href="{{ url('/newslatter') }}">Newslatters</a>
            {{-- <a href="{{url('/contact')}}">My Team</a> --}}
        </nav>

        <div class="icons">
            <a href="{{ route('view_cart') }}" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="{{ route('user_profile') }}" class="fas fa-user-circle"></a>
        </div>

    </div>

</header>
