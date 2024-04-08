<header class="p-3 border-bottom">
    <div class="container ">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <img src="{{ asset('icon.png') }}" width="50px" />
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-body-emphasis">Overview</a></li>
                <li><a href="#" class="nav-link px-2 link-body-emphasis">Customers</a></li>
                <li><a href="#" class="nav-link px-2 link-body-emphasis">Products</a></li>

                @if (Auth::check())
                    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#reviewBuilderOffcanvas" role="button"
                        aria-controls="offcanvasExample">
                        Review Builder
                    </a>

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="reviewBuilderOffcanvas"
                        aria-labelledby="reviewBuilderOffcanvasLabel">
                        <div class="offcanvas-header">
                            <h4 class="offcanvas-title" id="reviewBuilderOffcanvasLabel">Review Builder</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div>
                                Our widget seamlessly integrates with your website, allowing visitors to easily view and
                                engage with your Google reviews without ever leaving your site.
                            </div>
                            <h5 class="my-3">Layout</h5>
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <a class="btn btn-secondary mx-1 my-1" href="{{route('reviews-builder','carousel')}}"><i class="bi bi-grid-3x3-gap-fill fs-2"></i> Carousel</a>
                                    </div>
                                    <div class="col-4">
                                        <a class="btn btn-secondary mx-1 my-1" href="{{route('reviews-builder','list')}}"><i class="bi bi-view-stacked fs-2"></i> List</a>
                                    </div>
                                    
                                    <div class="col-4">
                                        <a class="btn btn-secondary mx-1 my-1" href="{{route('reviews-builder','slider')}}"><i class="bi bi-card-image  fs-2"></i> Slider</a>
                                    </div>
                                </div>
                                
                                
                                
                            </div>


                            
                        </div>
                    </div>
                @endif
            </ul>



            <button id="toggleTheme"
            {{-- add rounded-circle class for rounded circle --}}
                class="mx-2 btn btn-light btn-icon  d-flex align-items-center bi theme-icon bi-sun-fill"
                type="button" aria-expanded="false" aria-label="Toggle theme (auto)">
                <i class="bi theme-icon-active"></i>
                <span class="visually-hidden bs-theme-text">Toggle theme</span>
            </button>


            @if (Auth::check())
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/assets/placeholder/user.jpg" style="border:2px solid gray" alt="mdo"
                            width="32" height="32" class="rounded-circle">

                        <!-- Instead of avatar , we can use the first letter of the name -->
                        <!-- <span  style="background-color:#D36E1E;padding:10px;border:3px solid black;"  class="rounded-circle"> -->
                        <!-- {{ Auth::user()->first_name[0] . Auth::user()->last_name[0] }} -->
                        </span>
                    </a>
                    <ul class="dropdown-menu text-small" style="">
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('security') }}">Security</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary mx-1">Login</a>
                <a href="{{ route('register') }}" class="btn btn-sm btn-primary mx-1">Register</a>
            @endif
        </div>
    </div>
</header>
