<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/landing/" class="logo d-flex align-items-center">
            <img src="{{ asset("landing_files/assets/img/logo.png") }}" alt="">
            <span>FlexStart</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="/landing/#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="/landing/#about">About</a></li>
                <li><a class="nav-link scrollto" href="/landing/#services">Services</a></li>
                <li><a class="nav-link scrollto" href="/landing/#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="/landing/#team">Team</a></li>
                <li><a href="{{ route('landing.blog' )}}">Blog</a></li>
                <li class="dropdown"><a href="/landing/"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="/landing/">Deep Drop Down 1</a></li>
                                <li><a href="/landing/">Deep Drop Down 2</a></li>
                                <li><a href="/landing/">Deep Drop Down 3</a></li>
                                <li><a href="/landing/">Deep Drop Down 4</a></li>
                                <li><a href="/landing/">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="/landing/">Drop Down 2</a></li>
                        <li><a href="/landing/">Drop Down 3</a></li>
                        <li><a href="/landing/">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="/landing/#contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="/landing/#about">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
