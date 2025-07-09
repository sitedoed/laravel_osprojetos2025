<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contato</a>
                </li>
            </ul>
            
            <!-- Link para dashboard (será usado depois) -->
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
            @endauth
        </div>
    </div>
</nav>