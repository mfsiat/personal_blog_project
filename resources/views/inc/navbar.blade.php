<nav class="navbar navbar-expand-md navbar-inverse bg-transparent">
<div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{config('app.name', 'Blog')}}
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/services">Services</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/posts">Blog</a>
                        </li>
                        {{-- <li>
                            <a href="/posts/create">Create Post</a>
                        </li> --}}
                    </ul> 
                </ul>
            <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/dashboard" class="dropdown-item">Dashboard</a></li>
                            {{-- <li><a href="/dashboard" class="btn btn-success">Dashboard</a></li> --}}
                            <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>    

                            </li>
                        </ul>
                    </li>
                @endguest
        </ul>
        </div>
    </div>
</nav>
<br>

