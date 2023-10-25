<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="custom/img/profile_small.jpg" />
                         </span>
                    <a>
                        <span class="clear"> 
                            <span class="block m-t-xs"> 
                                <strong class="font-bold">{{ auth()->user()->name }}</strong>
                            </span> 
                            @if (auth()->user()->id == 1 || auth()->user()->email == 'admin@gmail.com')
                                <span class="text-muted text-xs block">Admin</span> 
                            @else
                            <span class="text-muted text-xs block">User</span> 
                            @endif
                        </span> 
                    </a>
                </div>
                <div class="logo-element">
                    The Movie
                </div>
            </li>
            <li>
                <a href="{{ route('movie.index') }}"><i class="fa fa-home"></i> <span class="nav-label">Index</span></a>
            </li>

            @if (auth()->user()->user_id == 1 || auth()->user()->email == 'admin@gmail.com')

                <li>
                    <a href="{{ route('movie.dashboard.index') }}"><i class="fa fa-th-large"></i> <span class="nav-label">All Management</span></a>
                </li>
                <li>
                    <a href="{{ route('movie.dashboard.user') }}"><i class="fa fa-user"></i> <span class="nav-label">User Management</span></a>
                </li>
                <li>
                    <a href="{{ route('movie.dashboard.movie') }}"><i class="fa fa-film"></i> <span class="nav-label">Movie Management</span></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-newspaper-o"></i> <span class="nav-label">News</span></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-shopping-cart"></i> <span class="nav-label">Shop</span></a>
                </li>
            
            @endif
            
            <li>
                <a href="{{ route('movie.logout') }}"><i class="fa fa-sign-out"></i> <span class="nav-label">Log out</span></a>
            </li>
        </ul>
    </div>
</nav>