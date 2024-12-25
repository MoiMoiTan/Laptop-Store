<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
        <div class="container-fluid">
            <!-- Left side -->
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="javascript:void();">
                        <i class="zmdi zmdi-menu"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form class="search-bar">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tìm kiếm...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>

            <!-- Right side -->
            <ul class="navbar-nav align-items-center right-nav-link">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="zmdi zmdi-email"></i>
                        <span class="notification">4</span>
                    </a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="zmdi zmdi-notifications"></i>
                        <span class="notification">3</span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="zmdi zmdi-globe"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-vn mr-2"></i> Tiếng Việt</a>
                        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us mr-2"></i> English</a>
                    </div>
                </li>

                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd">
                        <div>
                            <div class="user-details">
                                <h6>{{ Auth::user()->name }}</h6>
                                <p>{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            <i class="zmdi zmdi-account mr-2"></i> Hồ sơ
                        </a>
                        <a class="dropdown-item" href="{{ route('settings') }}">
                            <i class="zmdi zmdi-settings mr-2"></i> Cài đặt
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="zmdi zmdi-power mr-2"></i> Đăng xuất
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endauth
            </ul>
        </div>
    </nav>
</header>