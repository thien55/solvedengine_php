<header class="site-header">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav nav-light">
        <div class="container bg-blue nav-cont">
            <a class="navbar-brand" href="{{ url('/') }}" style="width:300px;">
                <img src="soledeng/logo.png" alt="logo">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link" href="{{ url('/') }}" aria-haspopup="true" aria-expanded="false">
                            Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link" href="{{ url('services') }}" aria-haspopup="true" aria-expanded="false">
                            Services </a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link" href="{{ url('project') }}" aria-haspopup="true" aria-expanded="false">
                            Projects </a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link" href="{{ url('client') }}" aria-haspopup="true" aria-expanded="false">
                            Client </a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link" href="{{ url('team') }}" aria-haspopup="true" aria-expanded="false">
                            Team </a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link" href="{{ url('career') }}" aria-haspopup="true" aria-expanded="false">
                            Career </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <ul class="social-icons darkcolor social-icons-simple d-lg-inline-block d-none animated fadeInUp"
                data-wow-delay="300ms">
                <li><a href="#." class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                <li><a href="#." class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                <li><a href="#." class="linkedin"><i class="fab fa-linkedin-in"></i> </a> </li>
            </ul>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span class="bg-dark"></span> <span class="bg-dark"></span> <span class="bg-dark"></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 ">
        <div class="overlay"></div>
        <div class="inner-wrapper bg-blue">
            <span class="btn-close bg-white" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('services') }}">
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('project') }}">
                            Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('client') }}">
                            Client
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('team') }}">
                            Team
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('career') }}">
                            Career
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple darkcolor top40">
                    <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
                <p class="text-white">&copy; 2021 Solved_Engineering_Inc Pvt.Ltd</p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>