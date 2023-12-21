<header>
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="index.html" class="d-flex">
                                    <img src="{{ asset('dist/img/logo/logo.png') }}" alt="Logo" height="44px" style="margin-right: 8px">
                                    <span style="font-size: 28px; font-weight: bold; letter-spacing: 1px; color: white;">TellTale</span>
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li><a href="{{ route('home') }}">home</a></li>
                                    <li><a href="#">genres</a></li>
                                    <li><a href="#">contact us</a></li>
                                    {{-- <li class="menu-item-has-children"><a href="#">genres</a>
                                        <ul class="submenu">
                                            <li><a href="movie.html">Action</a></li>
                                            <li><a href="movie-details.html">Romance</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="header-search"><a href="#" data-toggle="modal"
                                            data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                    {{-- <li class="header-lang">
                                        <form action="#">
                                            <div class="icon"><i class="flaticon-globe"></i></div>
                                            <select id="lang-dropdown">
                                                <option value="">En</option>
                                                <option value="">Au</option>
                                                <option value="">AR</option>
                                                <option value="">TU</option>
                                            </select>
                                        </form>
                                    </li> --}}
                                    <li class="header-btn"><a href="{{ route('login') }}" class="btn">Log Out</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <div class="close-btn"><i class="fas fa-times"></i></div>

                        <nav class="menu-box">
                            <div class{{ asset('dist/="nav-logo"><a href="index.html"><img src="img/logo/logo.png') }}" alt="" title=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->

                    <!-- Modal Search -->
                    {{-- <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form>
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Modal Search-end -->

                </div>
            </div>
        </div>
    </div>
</header>