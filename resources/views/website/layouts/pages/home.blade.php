@section( 'title' ) {{ $title ?? __( 'Home' ) }} @stop

@extends( 'website.layouts.main' )

@section( 'css' )
    @parent
@stop

@section( 'content' )
    <div role="main" class="main" id="home">

        {{-- Slider --}}
        @include( 'website/layouts/components/slider' )

        {{-- Plant Data --}}
        <section id="plant-data" class="section section-height-3 bg-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
            <div class="container my-3">
                <div class="row mb-5">
                    <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h2 class="font-weight-bold text-color-light mb-2">Plant Data</h2>
                        <p class="text-color-light opacity-7">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
                    </div>
                </div>
                <div class="row mb-lg-4">
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-support text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">CUSTOMER SUPPORT</h4>
                                <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font text-color-light">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-layers text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">SLIDERS</h4>
                                <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-menu text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">BUTTONS</h4>
                                <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-doc text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">HTML5 / CSS3 / JS</h4>
                                <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-user text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">ICONS</h4>
                                <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font text-color-light">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-screen-desktop text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">LIGHTBOX</h4>
                                <p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="reports" class="container">
            <div class="row justify-content-center pt-5 mt-5">
                <div class="col-lg-9 text-center">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                        <h2 class="font-weight-bold mb-2">Reports</h2>

                        <p class="mb-4">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
                    </div>

                    <p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.</p>
                </div>
            </div>

            <div class="row pb-5 mb-5">
                <div class="col">
                    <div class="appear-animation popup-gallery-ajax" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset( 'website/porto/img/projects/project.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Presentation</span>
                                                <span class="thumb-info-type">Brand</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-1.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <span class="owl-carousel owl-theme dots-inside m-0" data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}"><span><img src="{{ asset( 'website/porto/img/projects/project-1.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt=""></span><span><img src="{{ asset( 'website/porto/img/projects/project-1-2.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt=""></span></span>
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Porto Watch</span>
                                                <span class="thumb-info-type">Media</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-2.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset( 'website/porto/img/projects/project-2.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Identity</span>
                                                <span class="thumb-info-type">Logo</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-3.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset( 'website/porto/img/projects/project-27.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Porto Screens</span>
                                                <span class="thumb-info-type">Website</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-4.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset( 'website/porto/img/projects/project-4.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Three Bottles</span>
                                                <span class="thumb-info-type">Logo</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-5.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset( 'website/porto/img/projects/project-5.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Company T-Shirt</span>
                                                <span class="thumb-info-type">Brand</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-6.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset( 'website/porto/img/projects/project-6.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Mobile Mockup</span>
                                                <span class="thumb-info-type">Website</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-7.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset( 'website/porto/img/projects/project-7.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Porto Label</span>
                                                <span class="thumb-info-type">Media</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset( 'website/porto/img/projects/project-23.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Business Folders</span>
                                                <span class="thumb-info-type">Logo</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset( 'website/porto/img/projects/project-24.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Tablet Screen</span>
                                                <span class="thumb-info-type">Website</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset( 'website/porto/img/projects/project-25.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Black Watch</span>
                                                <span class="thumb-info-type">Media</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset( 'website/porto/img/projects/project-26.jpg' ) }}" class="img-fluid border-radius-0' ) }}" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">Monitor Mockup</span>
                                                <span class="thumb-info-type">Website</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Contact Us Form --}}
        @include( 'website/layouts/components/form-contact-us' )
    </div>

    @include( 'website.layouts.footernav' )
@stop

@section( 'footer-scripts' )
@stop
