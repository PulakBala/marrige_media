<aside class="bg-black p-3" style="width: 250px; height: 100vh;">
    <ul class="nav flex-column">
        <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
        @if(auth()->user()->role == 'admin')
            <li class="nav-item"><a href="{{ route('admin.users') }}" class="nav-link">Manage Users</a></li>
        @endif
        {{-- <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Logout</a></li> --}}
    </ul>
</aside>
