<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Matrimony</a>
        <div>
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
            @else
                {{-- <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a> --}}
                {{-- <a href="{{ route('register') }}" class="btn btn-outline-light">Sign Up</a> --}}
                <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
            @endauth
        </div>
    </div>
</nav>
