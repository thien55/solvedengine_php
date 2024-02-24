<header class="site-header header-with-topbar" id="header">
    <div class="top-header-area d-xs-none">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-9 col-md-8 col-sm-8 d-none d-sm-block position-relative pl-0" aria-hidden="true">
                    <a href="tel:123-456-7891" class="font-14 text-white hover-default" title="Call"><i
                            class="fas fa-mobile-alt mr-2"></i>1-800-975-9723</a>
                </div>
                <div
                    class="col-lg-3 col-md-4 col-sm-4 text-right position-relative pr-0 d-flex d-sm-block justify-content-around">
                    <div class="bg-transparent d-inline-block d-xs-none position-relative mr-2 ml-2"></div>
                    <a href="mailto:megaone@domain.com" class="font-14 text-white hover-default" title="Mail"><i
                            class="far fa-envelope mr-2"></i>
                        info@solvedeng.com</a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg transparent-bg static-nav nav-light ">
        <div class="container bg-blue nav-cont">
            <a class="navbar-brand" href="{{ url('/') }}" style="width:300px;;">
                <img src="soledeng/logo.png" alt="logo" class="logo-default">
                <img src="soledeng/logo.png" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link " href="{{ url('/') }}" aria-haspopup="true" aria-expanded="false">
                            Home </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link " href="{{ url('services') }}" aria-haspopup="true" aria-expanded="false">
                            Services </a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link " href="{{ url('project') }}" aria-haspopup="true" aria-expanded="false">
                            Projects </a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link " href="{{ url('client') }}" aria-haspopup="true" aria-expanded="false">
                            Client </a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link " href="{{ url('team') }}" aria-haspopup="true" aria-expanded="false">
                            Team </a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link " href="{{ url('career') }}" aria-haspopup="true" aria-expanded="false">
                            Career </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span class="bg-white"></span> <span class="bg-white"></span> <span class="bg-white"></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 ">
        <div class="overlay"></div>
        <div class="inner-wrapper bg-blue">
            <span class="btn-close bg-white" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100  ">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ url('/') }}">
                            Home
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('project') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('client') }}">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('team') }}">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('career') }}">Career</a>
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