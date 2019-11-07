<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item" href="{{route('home')}}">
                <img src="{{asset('images/devmarketer-logo.png')}}" alt="Advance Blog Logo" />
            </a>
            <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
            <a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
            <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>
        </div>
        <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>
        <div class="nav-right nav-menu" style="overflow: visible;">
            <a href="#" class="nav-item is-tab is-hidden-tablet is-active">Learn</a>
            <a href="#" class="nav-item is-tab is-hidden-tablet">Discuss</a>
            <a href="#" class="nav-item is-tab is-hidden-tablet">Share</a>
            @if (Auth::guest())
                <a href="{{route('login')}}" class="nav-item is-tab">Login</a>
                <a href="{{route('register')}}" class="nav-item is-tab">Join the Community</a>
            @else
            <button class="dropdown is-aligned-right nav-item is-tab">
                Hey {{Auth::user()->name}} <span class="icon"><i class="fa fa-caret-down"></i></span>
                <ul class="dropdown-menu">
                    <li><a href="#"><span class="icon"><i class="fa fa-fw fa-user-circle-o"></i></span> Profile</a></li>
                    <li><a href="#"><span class="icon"><i class="fa fa-fw fa-bell"></i></span> Notifications</a></li>
                    <li><a href="{{route('manage.dashboard')}}"><span class="icon"><i class="fa fa-fw fa-cog"></i></span> Manage</a></li>
                    <li class="separator"></li>
                    <li>
                        <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                            <span class="icon">
                                <i class="fa fa-fw fa-sign-out"></i>
                            </span> 
                        Logout
                        </a> 
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </button>
            @endif
        </div>
    </div>
</nav>