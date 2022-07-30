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
                    <a class="nav-link" href="{{route('servicios')}}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('empleados')}}">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">Contacto</a>
                </li>

                @auth
                   
                    @if (Auth::user()->role === 'admin')
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Admin
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                              <li><a class="dropdown-item" href="{{route('servicios.create')}}">Crear servicio</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>
                  
                    @else
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">{{ucwords(Auth::user()->role)}}</a>
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
                                    @if (Auth::user()->perfil->imagen === '')
                                        <i class="fa-solid fa-user"></i>
                                    @else
                                        <img src="{{ asset('img/user/' . Auth::user()->perfil->imagen) }}" alt=""
                                            width="70px" class="rounded-circle">
                                    @endif
                                @else
                                    <i class="fa-solid fa-user"></i>
                                @endif


                                {{ Auth::user()->name }}

                            </a>
                            <div class="dropdown-menu dropdown-menu-dark">
                                
                                <a href="{{ route('perfil.index') }}" class="dropdown-item">Perfil</a>
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
