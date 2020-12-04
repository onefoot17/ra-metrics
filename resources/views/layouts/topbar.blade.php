<!-- Topbar Start -->
<div class="ra__navbar navbar-custom">
    <div class="ra__navbar__inner container-fluid">
        <!-- LOGO -->
        <div class="ra__navbar__logo-box logo-box">
            <a href="{{route('home', [Request::segment(1)])}}" class="logo logo-light text-center">
                <span class="ra__navbar__logo-con logo-sm">
                    <img class="ra__navbar__logo" src="{{asset('images/logo-light.png')}}" alt="" width="150" />
                </span>

                <span class="ra__navbar__logo-con logo-lg">
                    <img class="ra__navbar__logo" src="{{asset('images/logo-light.png')}}" alt="" width="150" />
                </span>
            </a>
        </div>

        @include('layouts.topnav')

        <ul class="ra__navbar__topnav-menu list-unstyled topnav-menu float-right mb-0">
            {{-- <li class="d-none d-lg-block">
                <form class="app-search">
                    <div class="app-search-box dropdown">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search..." id="top-search">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found 22 results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-home mr-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-aperture mr-1"></i>
                                <span>How can I help you?</span>
                            </a>
                
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings mr-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="media">
                                        <img class="d-flex mr-2 rounded-circle" src="{{asset('ubold/assets/images/users/user-2.jpg')}}" alt="Generic placeholder image" height="32">
                                        <div class="media-body">
                                            <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="media">
                                        <img class="d-flex mr-2 rounded-circle" src="{{asset('ubold/assets/images/users/user-5.jpg')}}" alt="Generic placeholder image" height="32">
                                        <div class="media-body">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>  
                    </div>
                </form>
            </li> --}}

            <li class="ra__navbar__topnav-menu__nav-link-con dropdown d-inline-block">
                <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-right p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>

            {{-- <li class="ra__navbar__topnav-menu__nav-link-con dropdown d-none d-lg-inline-block">
                <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                    <i class="fe-maximize noti-icon"></i>
                </a>
            </li> --}}

            {{-- <li class="ra__navbar__topnav-menu__nav-link-con dropdown d-none d-lg-inline-block topbar-dropdown">
                <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-grid noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-right">

                    <div class="p-lg-1">
                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{asset('ubold/assets/images/brands/slack.png')}}" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{asset('ubold/assets/images/brands/github.png')}}" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{asset('ubold/assets/images/brands/dribbble.png')}}" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{asset('ubold/assets/images/brands/bitbucket.png')}}" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{asset('ubold/assets/images/brands/dropbox.png')}}" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{asset('ubold/assets/images/brands/g-suite.png')}}" alt="G Suite">
                                    <span>G Suite</span>
                                </a>
                            </div>
                
                        </div>
                    </div>

                </div>
            </li> --}}

            <li class="ra__navbar__topnav-menu__nav-link-con ra__navbar__topnav-menu__nav-link-con--lang-con dropdown d-lg-inline-block topbar-dropdown">
                <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    @if(App::getLocale() == 'en' or App::getLocale() == 'fr')
                        <img src="{{asset('ubold/assets/images/flags/ca.png')}}" alt="user-image" height="16">
                    @elseif(App::getLocale() == 'ro')
                        <img src="{{asset('ubold/assets/images/flags/ro.png')}}" alt="user-image" height="16">
                    @else
                        <img src="{{asset('ubold/assets/images/flags/br.png')}}" alt="user-image" height="16">
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right">

                    <!-- item-->
                    <a href="{{route(Route::currentRouteName(), ['en', 'id' => request()->id])}}" class="dropdown-item">
                        <img src="{{asset('ubold/assets/images/flags/ca.png')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">@lang('English')</span>
                    </a>

                    <!-- item-->
                    <a href="{{route(Route::currentRouteName(), ['fr', 'id' => request()->id])}}" class="dropdown-item">
                        <img src="{{asset('ubold/assets/images/flags/ca.png')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">@lang('French')</span>
                    </a>

                    <!-- item-->
                    <a href="{{route(Route::currentRouteName(), ['ro', 'id' => request()->id])}}" class="dropdown-item">
                        <img src="{{asset('ubold/assets/images/flags/ro.png')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">@lang('Romanian')</span>
                    </a>

                    <!-- item-->
                    <a href="{{route(Route::currentRouteName(), ['pt_BR', 'id' => request()->id])}}" class="dropdown-item">
                        <img src="{{asset('ubold/assets/images/flags/br.png')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">@lang('Portuguese')</span>
                    </a>

                </div>
            </li>

            {{-- <li class="ra__navbar__topnav-menu__nav-link-con dropdown notification-list topbar-dropdown">
                <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-right">
                                <a href="" class="text-dark">
                                    <small>Clear All</small>
                                </a>
                            </span>Notification
                        </h5>
                    </div>

                    <div class="noti-scroll" data-simplebar>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                            <div class="notify-icon">
                                <img src="{{asset('ubold/assets/images/users/user-1.jpg')}}" class="img-fluid rounded-circle" alt="" /> </div>
                            <p class="notify-details">Cristina Pride</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Hi, How are you? What about our next meeting</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon">
                                <img src="{{asset('ubold/assets/images/users/user-4.jpg')}}" class="img-fluid rounded-circle" alt="" /> </div>
                            <p class="notify-details">Karen Robinson</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Wow ! this admin looks good and awesome design</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="text-muted">5 hours ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">4 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-secondary">
                                <i class="mdi mdi-heart"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <b>Admin</b>
                                <small class="text-muted">13 days ago</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                        View all
                        <i class="fe-arrow-right"></i>
                    </a>

                </div>
            </li> --}}

            <li class="ra__navbar__topnav-menu__nav-link-con dropdown notification-list topbar-dropdown">
                <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    {{-- <img src="{{asset('ubold/assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle"> --}}
                    <span class="pro-user-name ml-1">
                        {{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="{{route('my_profile_edit', [Request::segment(1)])}}" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>@lang('My Profile')</span>
                    </a>

                    <!-- item-->
                    <a href="{{route('settings_edit', [Request::segment(1)])}}" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>@lang('Settings')</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item" onclick="event.preventDefault();
                        this.closest('form').submit();">
                            <i class="fe-log-out"></i>
                            <span>{{ __('Logout') }}</span>
                        </a>
                    </form>

                </div>
            </li>

            <li class="ra__navbar__topnav-menu__nav-link-con dropdown notification-list">
                <a href="javascript:void(0);" class="ra__navbar__topnav-menu__nav-link nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li>

        </ul>

        <ul class="ra__navbar__topnav-menu-left list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="ra__navbar__navbar-toggle navbar-toggle ra__navbar__topnav-menu-left__nav-link nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>   

            {{-- <li class="dropdown d-none d-xl-block">
                <a class="ra__navbar__topnav-menu-left__nav-link nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Create New
                    <i class="mdi mdi-chevron-down"></i> 
                </a>
                <div class="dropdown-menu">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-briefcase mr-1"></i>
                        <span>New Projects</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-user mr-1"></i>
                        <span>Create Users</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-bar-chart-line- mr-1"></i>
                        <span>Revenue Report</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-headphones mr-1"></i>
                        <span>Help & Support</span>
                    </a>

                </div>
            </li> --}}
        </ul>

        {{-- <div class="clearfix"></div> --}}
    </div>
</div>
<!-- end Topbar -->
