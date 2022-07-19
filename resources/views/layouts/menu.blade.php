<nav class="navbar navbar-expand-lg bg-white border-b border-gray-100  ">
    <div class="container ">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" alt="logo" width="150px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between align-items-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">Contacto</a>
                </li>
                <li>
                    @auth
                    @if (Auth::user()->role === 'admin')
                        <a href="{{ url('/admin') }}" class="nav-link">Admin</a>
                    @else
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    @endif
                    @endauth
                </li>
            </ul>
            @if (Route::has('login'))
                <div class="">

                    @auth
                        @if (Auth::user()->role === 'admin')
                            <a href="{{ url('/admin') }}" class="btn ">Admin</a>
                        @else
                            <a href="{{ url('/dashboard') }}" class="btn ">Dashboard</a>
                        @endif
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
