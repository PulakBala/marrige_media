<nav class="navbar navbar-dark  fixed-top shadow">
    <div class="container">
        <a class="navbar-brand" href="#">দ্বীনিনিকাহ</a>
        <div>
            @auth
                {{-- <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a> --}}
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">লগআউট</button>
                </form>
                <button class="navbar-toggler d-lg-none" type="button" id="sidebarToggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
            @else

                {{-- <a href="{{ route('register') }}" class="btn btn-outline-light">Sign Up</a> --}}
                <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal">লগইন</a>
            @endauth
        </div>
    </div>
</nav>
@include('auth.login')




