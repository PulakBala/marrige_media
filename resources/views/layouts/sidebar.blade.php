<aside class="p-3 sidebar" id="sidebar"style="position: fixed; top: 56px; width: 250px; height: calc(100vh - 56px); overflow-y: auto;">
    <ul class="nav flex-column gap-4">
        <li class="nav-item shadow">
            <a href="{{ route('dashboard') }}"class="nav-link text-white py-2 px-3 rounded hover-effect {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
            </a></li>
        <li class="nav-item shadow">
            <a href="{{ route('all.users') }}" class="nav-link text-white {{ request()->routeIs('all.users') ? 'active' : '' }}">
                <i class="fas fa-users me-2"></i>Home
            </a></li>
        <li class="nav-item shadow">
            <a href="#" class="nav-link text-white {{ request()->is('messages') ? 'active' : '' }}"><i class="fas fa-envelope me-2"></i>Messages
            </a></li>
        <li class="nav-item shadow">
            <a href="#" class="nav-link text-white {{ request()->is('activity') ? 'active' : '' }}"><i class="fas fa-chart-line me-2"></i>Activity</a></li>
        <li class="nav-item shadow">
            <a href="#" class="nav-link text-white {{ request()->is('search') ? 'active' : '' }}"><i class="fas fa-search me-2"></i>Search</a></li>
        <li class="nav-item shadow">
            <a href="#" class="nav-link text-white {{ request()->is('popular-searches') ? 'active' : '' }}"><i class="fas fa-fire me-2"></i>Popular Searches
            </a></li>
        <li class="nav-item shadow">
            <a href="{{route('profile.dashboard')}}" class="nav-link text-white {{ request()->routeIs('profile.dashboard') ? 'active' : '' }}"><i class="fas fa-user me-2"></i>My Profile
            </a></li>
        <li class="nav-item shadow">
            <a href="#" class="nav-link text-white {{ request()->is('settings') ? 'active' : '' }}"><i class="fas fa-cog me-2"></i>Settings
            </a></li>
        <li class="nav-item shadow">
            <a href="#" class="nav-link text-white {{ request()->is('help') ? 'active' : '' }}"><i class="fas fa-question-circle me-2"></i>Help
            </a></li>
        <li class="nav-item shadow"><a href="#" class="nav-link text-white {{ request()->is('other-pages') ? 'active' : '' }}"><i class="fas fa-ellipsis-h me-2"></i>Other Pages
        </a></li>



        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-outline-light btn-sm me-2 nav-link"><i class="fas fa-sign-out-alt me-2"></i>Logout</button>
        </form>
        @if(auth()->user()->role == 'admin')
            <li class="nav-item"><a href="{{ route('admin.users') }}" class="nav-link">Manage Users</a></li>
        @endif
        {{-- <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Logout</a></li> --}}
    </ul>
</aside>
