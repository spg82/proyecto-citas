<nav class="navbar navbar-expand-lg bg-white border-b border-gray-100  ">
    <div class="container ">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" alt="logo" width="140px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav ">
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
                    <li class="nav-item">
                        <a href="{{ route('perfil.index') }}" class="nav-link">Perfil</a>
                    </li>
                    @if (Auth::user()->role === 'admin')
                        <li class="nav-item">
                            <a href="{{ url('/admin') }}" class="nav-link">Admin</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Cliente</a>
                        </li>
                    @endif

                @endauth

            </ul>
            <ul class="navbar-nav">
                @if (Route::has('login'))


                    @auth

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">

                                @if (isset(Auth::user()->perfil->imagen))
                                    <img src="{{ asset('img/user/' . Auth::user()->perfil->imagen) }}" alt=""
                                        width="70px" class="rounded-circle">
                                @else
                                    <i class="fa-solid fa-user"></i>
                                @endif


                                {{ Auth::user()->name }}

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
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Registro</a>
                            </li>
                        @endif

                    @endauth

                @endif
            </ul>
        </div>
    </div>
</nav>
