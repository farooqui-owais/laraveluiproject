<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/">Demo Bank</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">                        
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Contact</a></li>
                        @if (Route::has('login'))
                        
                    @auth
                    <li class="nav-item mx-0 mx-lg-1"><a href="{{ url('/home') }}" class="nav-link py-3 px-0 px-lg-3 rounded">Home</a></li>
                    @else
                    <li class="nav-item mx-0 mx-lg-1"><a href="{{ route('login') }}" class="nav-link py-3 px-0 px-lg-3 rounded">Log in</a></li>

                        @if (Route::has('register'))
                        <li class="nav-item mx-0 mx-lg-1"><a href="{{ route('register') }}" class="nav-link py-3 px-0 px-lg-3 rounded">Register</a></li>
                        @endif
                    @endauth
                      
            @endif

                    </ul>
                </div>
            </div>
        </nav>