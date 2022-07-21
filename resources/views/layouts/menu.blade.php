<nav class="navbar navbar-expand-lg bg-white border-b border-gray-100  ">
    <div class="container ">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" alt="logo" width="140px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
            <ul class="navbar-nav w-75">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">Contacto</a>
                </li>

                @auth
                    @if (Auth::user()->role === 'admin')
                        <li class="nav-item">
                            <a href="{{ url('/perfil') }}" class="nav-link">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin') }}" class="nav-link">Admin</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ url('/perfil') }}" class="nav-link">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Cliente</a>
                        </li>
                    @endif

                @endauth

            </ul>
            @if (Route::has('login'))
                <div class="">

                    @auth
                        <ul>
                            <li class="nav-item dropdown">
                                
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    
                                    <img src="{{asset('img/user/'. Auth::user()->perfil->imagen)}}" alt="" width="80px" class="rounded-circle">
                                  
                                </a>
                                <div class="dropdown-menu">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Salir') }}
                                        </x-dropdown-link>
                                    </form>

                                </div>
                            </li>
                        </ul>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-info">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-success">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>
