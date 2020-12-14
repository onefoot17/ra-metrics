<div class="ra__navbar__topnav topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="ra__navbar__topnav-menu__nav-link-con nav-item dropdown">
                        <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none" href="{{ route( 'home', [ Request::segment( 1 ) ] ) }}" id="topnav-ui" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-home mr-1"></i> @lang( 'Website' )
                        </a>
                    </li>

                    <li class="ra__navbar__topnav-menu__nav-link-con nav-item dropdown">
                        <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none" href="{{route('plant_dashboard_index', [Request::segment(1)])}}" id="topnav-ui" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fab fa-pagelines mr-1"></i> @lang( 'Plants' )
                        </a>
                    </li>

                    <li class="ra__navbar__topnav-menu__nav-link-con nav-item dropdown">
                        <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none" href="#" id="topnav-ui" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-users mr-1"></i> @lang('Participants')
                        </a>
                    </li>

                    <li class="ra__navbar__topnav-menu__nav-link-con nav-item dropdown">
                        <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none" href="{{route('admin_users_index', [Request::segment(1)])}}" id="topnav-ui" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-user-plus mr-1"></i> @lang('Users')
                        </a>
                    </li>

                    <li class="ra__navbar__topnav-menu__nav-link-con nav-item dropdown">
                        <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none" href="#" id="topnav-ui" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="icon dripicons-location mr-1"></i> @lang('Locations/Sites')
                        </a>
                    </li>

                    <li class="ra__navbar__topnav-menu__nav-link-con nav-item dropdown">
                        <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none" href="#" id="topnav-ui" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-database mr-1"></i> @lang( 'Plant Data' )
                        </a>
                    </li>

                    <li class="ra__navbar__topnav-menu__nav-link-con nav-item dropdown">
                        <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none" href="#" id="topnav-ui" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-clipboard mr-1"></i> @lang( 'Reports' )
                        </a>
                    </li>

                    <li class="ra__navbar__topnav-menu__nav-link-con nav-item dropdown">
                        <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none" href="#" id="topnav-ui" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-help-circle mr-1"></i> @lang( 'Help' )
                        </a>
                    </li>

                    {{-- <li class="ra__navbar__topnav-menu__nav-link-con nav-item dropdown">
                        <a class="ra__navbar__topnav-menu__nav-link nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-layers mr-1"></i> Components <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-extendedui"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-pocket mr-1"></i> Extended UI <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-extendedui">
                                    <a href="extended-nestable.html" class="dropdown-item">Nestable List</a>
                                    <a href="extended-range-slider.html" class="dropdown-item">Range Slider</a>
                                    <a href="extended-dragula.html" class="dropdown-item">Dragula</a>
                                    <a href="extended-animation.html" class="dropdown-item">Animation</a>
                                    <a href="extended-sweet-alert.html" class="dropdown-item">Sweet Alert</a>
                                    <a href="extended-tour.html" class="dropdown-item">Tour Page</a>
                                    <a href="extended-scrollspy.html" class="dropdown-item">Scrollspy</a>
                                    <a href="extended-loading-buttons.html" class="dropdown-item">Loading Buttons</a>
                                </div>
                            </div>
                            <a href="widgets.html" class="dropdown-item"><i class="fe-gift mr-1"></i> Widgets</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-bookmark mr-1"></i> Forms <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                    <a href="forms-elements.html" class="dropdown-item">General Elements</a>
                                    <a href="forms-advanced.html" class="dropdown-item">Advanced</a>
                                    <a href="forms-validation.html" class="dropdown-item">Validation</a>
                                    <a href="forms-pickers.html" class="dropdown-item">Pickers</a>
                                    <a href="forms-wizard.html" class="dropdown-item">Wizard</a>
                                    <a href="forms-masks.html" class="dropdown-item">Masks</a>
                                    <a href="forms-summernote.html" class="dropdown-item">Summernote</a>
                                    <a href="forms-quilljs.html" class="dropdown-item">Quilljs Editor</a>
                                    <a href="forms-file-uploads.html" class="dropdown-item">File Uploads</a>
                                    <a href="forms-x-editable.html" class="dropdown-item">X Editable</a>
                                    <a href="forms-image-crop.html" class="dropdown-item">Image Crop</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-bar-chart-2 mr-1"></i> Charts <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                    <a href="charts-apex.html" class="dropdown-item">Apex Charts</a>
                                    <a href="charts-flot.html" class="dropdown-item">Flot Charts</a>
                                    <a href="charts-morris.html" class="dropdown-item">Morris Charts</a>
                                    <a href="charts-chartjs.html" class="dropdown-item">Chartjs Charts</a>
                                    <a href="charts-peity.html" class="dropdown-item">Peity Charts</a>
                                    <a href="charts-chartist.html" class="dropdown-item">Chartist Charts</a>
                                    <a href="charts-c3.html" class="dropdown-item">C3 Charts</a>
                                    <a href="charts-sparklines.html" class="dropdown-item">Sparklines Charts</a>
                                    <a href="charts-knob.html" class="dropdown-item">Jquery Knob Charts</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-grid mr-1"></i> Tables <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                    <a href="tables-basic.html" class="dropdown-item">Basic Tables</a>
                                    <a href="tables-datatables.html" class="dropdown-item">Data Tables</a>
                                    <a href="tables-editable.html" class="dropdown-item">Editable Tables</a>
                                    <a href="tables-responsive.html" class="dropdown-item">Responsive Tables</a>
                                    <a href="tables-footables.html" class="dropdown-item">FooTable</a>
                                    <a href="tables-bootstrap.html" class="dropdown-item">Bootstrap Tables</a>
                                    <a href="tables-tablesaw.html" class="dropdown-item">Tablesaw Tables</a>
                                    <a href="tables-jsgrid.html" class="dropdown-item">JsGrid Tables</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-cpu mr-1"></i> Icons <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="icons-two-tone.html" class="dropdown-item">Two Tone Icons</a>
                                    <a href="icons-feather.html" class="dropdown-item">Feather Icons</a>
                                    <a href="icons-mdi.html" class="dropdown-item">Material Design Icons</a>
                                    <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                    <a href="icons-font-awesome.html" class="dropdown-item">Font Awesome 5</a>
                                    <a href="icons-themify.html" class="dropdown-item">Themify</a>
                                    <a href="icons-simple-line.html" class="dropdown-item">Simple Line</a>
                                    <a href="icons-weather.html" class="dropdown-item">Weather</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-map mr-1"></i> Maps <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                    <a href="maps-google.html" class="dropdown-item">Google Maps</a>
                                    <a href="maps-vector.html" class="dropdown-item">Vector Maps</a>
                                    <a href="maps-mapael.html" class="dropdown-item">Mapael Maps</a>
                                </div>
                            </div>
                        </div>
                    </li> --}}
                </ul> <!-- end navbar-->
            </div> <!-- end .collapsed-->
        </nav>
    </div> <!-- end container-fluid -->
</div> <!-- end topnav-->
