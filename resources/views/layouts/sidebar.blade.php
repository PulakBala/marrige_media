
<aside class="p-3 sidebar"
    id="sidebar"style=" top: 56px;  ">

        <ul class="nav flex-column gap-4">
            <li class="nav-item shadow">
                <a
                    href="{{ route('dashboard') }}"class="nav-link text-black py-2 px-3 rounded hover-effect {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt me-2"></i>ড্যাশবোর্ড
                </a>
            </li>
            <li class="nav-item shadow">
                <a href="{{ route('all.users') }}"
                    class="nav-link text-black {{ request()->routeIs('all.users') ? 'active' : '' }}">
                    <i class="fas fa-users me-2"></i>হোম
                </a>
            </li>
            {{-- <li class="nav-item shadow">
            <a href="#" class="nav-link text-black {{ request()->is('messages') ? 'active' : '' }}"><i class="fas fa-envelope me-2"></i>Messages
            </a></li> --}}
            <li class="nav-item shadow">
                <a href="{{ route('connection') }}"
                    class="nav-link text-black {{ request()->is('connection') ? 'active' : '' }}"><i
                        class="fas fa-chart-line me-2"></i>
                    কানেকশন</a>
            </li>


            <li class="nav-item shadow">
                <a href="{{ route('connection.add') }}"
                    class="nav-link text-black {{ request()->is('connection/add') ? 'active' : '' }}"><i
                        class="fas fa-chart-line me-2"></i>কানেকশন যোগ করুন</a>
            </li>

            <li class="nav-item">
                <a href="{{ route('subscriptions.index') }}"
                    class="nav-link {{ request()->routeIs('subscriptions.index') ? 'active text-white ' : 'text-black' }}">
                    <i class="fas fa-list me-2"></i>আমার সাবস্ক্রিপশন
                </a>
            </li>


            <li class="nav-item shadow">
                <a href="#" class="nav-link text-black {{ request()->is('search') ? 'active' : '' }}"><i
                        class="fas fa-search me-2"></i>অনুসন্ধান করুন</a>
            </li>
            {{-- <li class="nav-item shadow">
            <a href="#" class="nav-link text-black {{ request()->is('popular-searches') ? 'active' : '' }}"><i class="fas fa-fire me-2"></i>Popular Searches
            </a></li> --}}
            <li class="nav-item shadow">
                <a href="{{ route('profile.dashboard') }}"
                    class="nav-link text-black {{ request()->routeIs('profile.dashboard') ? 'active' : '' }}"><i
                        class="fas fa-user me-2"></i>আমার প্রোফাইল
                </a>
            </li>
            <li class="nav-item shadow">
                <a href="{{ route('settings') }}"
                    class="nav-link text-black {{ request()->is('settings') ? 'active' : '' }}"><i
                        class="fas fa-cog me-2"></i>সেটিংস
                </a>
            </li>
            <li class="nav-item shadow">
                <a href="{{ route('user.shortlist') }}"
                    class="nav-link text-black {{ request()->routeIs('user.shortlist') ? 'active' : '' }}">
                    <i class="fas fa-user me-2"></i>সংক্ষিপ্ত তালিকা
                </a>
            </li>
            <li class="nav-item shadow">
                <a href="{{ route('user.ignorelist') }}"
                    class="nav-link text-black {{ request()->routeIs('user.ignorelist') ? 'active' : '' }}">
                    <i class="fas fa-cog me-2"></i>ইগনোর তালিকা
                </a>
            </li>
            <li class="nav-item shadow">
                <a href="{{ route('support.help') }}" class="nav-link text-black {{ request()->routeIs('support.help') ? 'active' : '' }}">
                    <i class="fas fa-question-circle me-2"></i>সাহায্য ও সহায়তা
                </a>
            </li>

            {{-- <li class="nav-item shadow"><a href="#" class="nav-link text-black {{ request()->is('other-pages') ? 'active' : '' }}"><i class="fas fa-ellipsis-h me-2"></i>Other Pages
        </a></li> --}}




            @if (auth()->user()->role == 'admin')
                <li class="nav-item"><a href="{{ route('admin.users') }}" class="nav-link">Manage Users</a></li>
            @endif
            {{-- <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Logout</a></li> --}}
        </ul>

        {{-- <ul class="nav flex-column gap-4 mt-3">
        <li class="nav-item shadow">
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="nav-link text-black py-2 px-3 rounded hover-effect" style="border: none; background: none;">
                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                </button>
            </form>
        </li>
    </ul> --}}
    </aside>





