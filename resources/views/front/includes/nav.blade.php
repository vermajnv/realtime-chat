<!-- Nav Bar Start -->
<nav class="navbar navbar-expand-sm navbar-dark fixed-top">
    <!-- Logo Start -->
    <a class="navbar-brand" href="/">
        <img src="{{asset('images/front/logo.png')}}" alt="Logo" style="width:40px;" />
        Solicitor
    </a>
    <!-- Logo End -->

    <!-- Toggler/collapsibe Button Start -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Toggler/collapsibe Button End -->

    <!-- Nav Bar Links Start -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 3</a>
            </li>
        </ul>
        <!-- Nav Bar Links End -->

        <!-- Sign Up and Log In Button Start -->
        <div class="navbar-nav ml-auto">
            @guest
                @if (Route::has('register'))
                    <button class="btn btn-outline-light mr-sm-2" data-toggle="modal" data-target="#exampleModal">Sign Up</button>
                @endif
                <button class="btn btn-outline-light my-2 my-sm-0" data-toggle="modal" data-target="#signinModal" >Log In</button>
            @else
                {{-- <button class="btn btn-outline-light my-2 my-sm-0" >Profile</button> --}}
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">Profile </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            @endguest
        </div>
        <!-- Sign Up and Log In Button End -->
    </div>
</nav>
<!-- Nav Bar Ends -->
