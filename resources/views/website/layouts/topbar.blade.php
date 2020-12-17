<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column header-column-logo">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route( 'home', [ Request::segment( 1 ) ] ) }}">
                                <img alt="Porto" src="{{ asset( 'assets/images/logo-light.png' ) }}" />
                            </a>
                        </div>
                    </div>
                </div>

                @include( 'website.layouts.topnav' )
            </div>
        </div>
    </div>
</header>
