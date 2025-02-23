<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Matrimony</a>
        <div>
            @auth
                {{-- <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a> --}}
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">Logout</button>
                </form>

            @else

                {{-- <a href="{{ route('register') }}" class="btn btn-outline-light">Sign Up</a> --}}
                <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
            @endauth
        </div>
    </div>
</nav>
@include('auth.login')

