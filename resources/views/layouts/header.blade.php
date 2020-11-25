<!-- begin #header -->
<div id="header" class="header navbar-default">
    <!-- begin navbar-header -->
    <div class="navbar-header">
        <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>RA</b>-METRICS</a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- end navbar-header --><!-- begin header-nav -->
    <ul class="navbar-nav navbar-right">
        <li class="navbar-form">
            <form action="" method="POST" name="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter keyword" />
                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                <i class="fa fa-bell"></i>
                <span class="label">5</span>
            </a>
            <div class="dropdown-menu media-list dropdown-menu-right">
                <div class="dropdown-header">NOTIFICATIONS (5)</div>
                <a href="javascript:;" class="dropdown-item media">
                    <div class="media-left">
                        <i class="fa fa-bug media-object bg-silver-darker"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
                        <div class="text-muted f-s-10">3 minutes ago</div>
                    </div>
                </a>
                <a href="javascript:;" class="dropdown-item media">
                    <div class="media-left">
                        <img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
                        <i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading">John Smith</h6>
                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                        <div class="text-muted f-s-10">25 minutes ago</div>
                    </div>
                </a>
                <a href="javascript:;" class="dropdown-item media">
                    <div class="media-left">
                        <img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
                        <i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading">Olivia</h6>
                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                        <div class="text-muted f-s-10">35 minutes ago</div>
                    </div>
                </a>
                <a href="javascript:;" class="dropdown-item media">
                    <div class="media-left">
                        <i class="fa fa-plus media-object bg-silver-darker"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading"> New User Registered</h6>
                        <div class="text-muted f-s-10">1 hour ago</div>
                    </div>
                </a>
                <a href="javascript:;" class="dropdown-item media">
                    <div class="media-left">
                        <i class="fa fa-envelope media-object bg-silver-darker"></i>
                        <i class="fab fa-google text-warning media-object-icon f-s-14"></i>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading"> New Email From John</h6>
                        <div class="text-muted f-s-10">2 hour ago</div>
                    </div>
                </a>
                <div class="dropdown-footer text-center">
                    <a href="javascript:;">View more</a>
                </div>
            </div>
        </li>
        <li class="dropdown navbar-language">
            <a href="#" class="dropdown-toggle pr-1 pl-1 pr-sm-3 pl-sm-3" data-toggle="dropdown">
                @if(App::getLocale() == 'en' or App::getLocale() == 'fr')
                    <span class="flag-icon flag-icon-ca" title="ca"></span>
                @else
                    <span class="flag-icon flag-icon-br" title="br"></span>
                @endif

                <span class="name d-none d-sm-inline">{{App::getLocale()}}</span> <b class="caret"></b>
            </a>
            <div class="dropdown-menu">
                <a href="{{route(Route::currentRouteName(), ['en', 'id' => request()->id])}}" class="dropdown-item"><span class="flag-icon flag-icon-ca" title="ca"></span> @lang('English')</a>
                <a href="{{route(Route::currentRouteName(), ['fr', 'id' => request()->id])}}" class="dropdown-item"><span class="flag-icon flag-icon-ca" title="ca"></span> @lang('French')</a>
                <a href="{{route(Route::currentRouteName(), ['pt_BR', 'id' => request()->id])}}" class="dropdown-item"><span class="flag-icon flag-icon-br" title="br"></span> @lang('Portuguese')</a>
                <div class="dropdown-divider"></div>
                <a href="javascript:;" class="dropdown-item text-center">@lang('more options')</a>
            </div>
        </li>
        <li class="dropdown navbar-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('color-admin/assets/img/user/user-13.jpg')}}" alt="" /> 
                <span class="d-none d-md-inline">{{Auth::user()->name}}</span> <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:;" class="dropdown-item">Edit Profile</a>
                <a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
                <a href="javascript:;" class="dropdown-item">Calendar</a>
                <a href="javascript:;" class="dropdown-item">Setting</a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="javascript:;" 
                        class="dropdown-item" 
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">{{ __('Logout') }}</a>
                </form>
            </div>
        </li>
    </ul>
    <!-- end header-nav -->
</div>
<!-- end #header -->