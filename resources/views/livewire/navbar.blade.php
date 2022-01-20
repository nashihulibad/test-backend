<div>
    <nav class="navbar navbar-expand-md navbar-light" style="background:#2B60DE">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <div  style="font-size:1.2rem; color:#ffffff; font-family:poppins;">
                  <strong>Sekawan-Mobil</strong>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">  <strong>{{ __('Login') }}</strong></a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"><strong>{{ __('Register') }}</strong></a>
                    </li>
                    @endif
                    @else
        
            
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>