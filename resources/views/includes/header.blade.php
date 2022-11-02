<header
    class="site-header site-header--menu-center site-header--menu-center-adjustment bg-transparent site-header--logo-dark mobile-menu-trigger-dark site-header--absolute">
    <div class="container">
        <nav class="navbar site-navbar">
            <!-- Brand Logo-->
            <div class="site-header__brand">
                <a href="{{ route("getIndex") }}">
                    <!-- light version logo (logo must be black)-->
                    <img src="/img/workout/Planbig-b-01.png" style="max-width: 160px" alt=""
                    class="logo-white">
                <!-- Dark version logo (logo must be White)-->
                <img src="/img/workout/Planbig-b-01.png" style="max-width: 160px" alt=""
                    class="logo-black">
                </a>
            </div>
            <div class="menu-block-wrapper ">
                <div class="menu-overlay"></div>
                <nav class="menu-block menu-block-inner" id="append-menu-header">
                    <div class="mobile-menu-head">
                        <div class="go-back">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="site-menu-main">
                        <li class="nav-item nav-item-has-children">
                            <a href="{{ route('getIndex') }}" class="nav-link-item drop-trigger text-dark">Home
                            </a>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="{{ route('getPricing') }}" class="nav-link-item drop-trigger text-dark">Pricing</a>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="{{ route('getContact') }}" class="nav-link-item drop-trigger text-dark">Contact Us</a>
                        </li>
                    </ul>
                </nav>
                <div class="header-button site-header__btns  site-header__btns--09 d-flex align-items-center">
                    @if (auth()->check())
                        <a href="{{ route('getProfile') }}" class="ms-2 text-{{ $header_mode }}">Hello,
                            {{ auth()->user()->name }}</a>
                        <div class="v-divider"></div>
                        <a class="btn btn-transparent btn-1" href="{{ route('getLogout') }}">
                            Logout
                        </a>
                    @else
                        <a class="btn btn-transparent btn-1 text-dark" href="{{ route('getSignin') }}">
                            Login
                        </a>
                        <a class="btn btn-primary btn-primary-hvr btn-2 rounded" href="{{ route('getSignup') }}">
                            Sign Up
                        </a>
                    @endif
                </div>
            </div>
            <!-- mobile menu trigger -->
            <div class="mobile-menu-trigger">
                <span></span>
            </div>
            <!--/.Mobile Menu Hamburger Ends-->
        </nav>
    </div>
</header>
