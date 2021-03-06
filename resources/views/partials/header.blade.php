<nav class="navbar navbarHeader navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'Vintage') }} --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="navigation-circle nav-link " href="/">
                        <div class="top">
                            <span></span>
                            <span></span>
                        </div>
                        <div class="bottom">
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </li>
                @guest
                @else
                <li><a class="link" href="/dashboard">OUTLAW</a></li>
                @endguest
                <li><a class="link" href="/cruz">CRUZ</a></li>
                <li><a class="link" href="/scrambler">SCRAMBLER</a></li>
                @guest
                @else
                <li><a class="link" href="/cafe">CAFE</a></li>
                @endguest
            </ul>
            <div class="logo">
                <a href="/"><div class="logoImg"></div></a>
            </div>
            
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <login-button :text="'Login'"/>
                        @if(!auth::user())
                            <login-button :text="'Login'"/>
                            @else
                                <a class="login-button" href="{{route('dashboard')}}">My profile</a>
                            @endif 
                        <a class="nav-link" href="">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                    <ul class="nav navbar-nav flex-row align-items-center ml-auto">
                        <li><a class="linkRight shopNow" href="javascript:void(0)">Shop Now</a></li>
                        <li><a class="linkRight zero" href="javascript:void(0)">0</a></li>
                    </ul>
                @endguest
            </ul>
        </div>
    </div>
</nav>
