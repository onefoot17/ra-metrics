@section('title') {{ $title ?? __('Home') }} @stop

@include('website.styles')

@section('css-default')
    <link rel="stylesheet" href="{{ asset( 'website/assets/css/frontend.css' ) }}">
@stop

@include('layouts.header')

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="logo text-uppercase" href="index.html">
                    <img src="{{asset('assets/images/logo-light.png')}}" alt="" class="logo-light" height="30" />
                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="" class="logo-dark" height="30" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact Us</a>
                        </li>
                        
                        @auth
                        <li class="nav-item">
                            <a href="{{ route('admin_home', [ Request::segment( 1 ) ] ) }}" class="nav-link">Admin</a>
                        </li>
                        @endauth
                    </ul>

                    <button class="btn btn-info navbar-btn">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="javascript:void(0);" class="" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fe-log-out"></i>

                                    <span>{{ __( 'Logout' ) }}</span>
                                </a>
                            </form>
                        @else
                            <a href="/login" class="">Login</a>
                        @endauth
                    </button>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- home start -->
        <section class="bg-home bg-gradient" id="home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="home-title mo-mb-20">
                                    <h1 class="mb-4 text-white">Ubold is a fully featured premium admin template</h1>
                                    <p class="text-white-50 home-desc mb-5">Ubold is a fully featured premium admin template built on top of awesome Bootstrap 4.4.1, modern web technology HTML5, CSS3 and jQuery. It has many ready to use hand crafted components. </p>
                                    <div class="subscribe">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control" placeholder="Enter your e-mail address">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn btn-primary">Subscribe Us</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-7">
                                <div class="home-img position-relative">
                                    <img src="{{ asset( 'website/assets/images/home-img.png')}}" alt="" class="home-first-img">
                                    <img src="{{ asset( 'website/assets/images/home-img.png')}}" alt="" class="home-second-img mx-auto d-block">
                                    <img src="{{ asset( 'website/assets/images/home-img.png')}}" alt="" class="home-third-img">
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
            </div>
        </section>
        <!-- home end -->

        <!-- clients start -->
        <section>
            <div class="container-fluid">
                <div class="clients p-4 bg-white">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="client-images">
                                <img src="{{ asset( 'website/assets/images/clients/1.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-images">
                                <img src="{{ asset( 'website/assets/images/clients/3.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-images">
                                <img src="{{ asset( 'website/assets/images/clients/4.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-images">
                                <img src="{{ asset( 'website/assets/images/clients/6.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div>
            </div> <!-- end container-fluid -->
        </section>
        <!-- clients end -->

        <!-- features start -->
        <section class="section-sm" id="features">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h3 class="mb-3">The admin is fully responsive and easy to customize</h3>
                            <p class="text-muted">The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="{{ asset( 'website/assets/images/icons/layers.png')}}" alt="">
                            </div>
                            <h4 class="mb-2">Responsive Layouts</h4>
                            <p class="text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="{{ asset( 'website/assets/images/icons/core.png')}}" alt="">
                            </div>
                            <h4 class="mb-2">Based on Bootstrap UI</h4>
                            <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="{{ asset( 'website/assets/images/icons/paperdesk.png')}}" alt="">
                            </div>
                            <h4 class="mb-2">Creative Design</h4>
                            <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="{{ asset( 'website/assets/images/icons/solarsystem.png')}}" alt="">
                            </div>
                            <h4 class="mb-3">Awesome Support</h4>
                            <p class="text-muted">At solmen va esser necessi far uniform grammatica pronun e plu sommun paroles.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="{{ asset( 'website/assets/images/icons/datatext.png')}}" alt="">
                            </div>
                            <h4 class="mb-3">Easy to customize</h4>
                            <p class="text-muted">If several languages coalesce the grammar of the is more simple languages.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <img src="{{ asset( 'website/assets/images/icons/browserscript.png')}}" alt="">
                            </div>
                            <h4 class="mb-3">Quality Code</h4>
                            <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container-fluid -->
        </section>
        <!-- features end -->

        <!-- available demos start -->
        <section class="section bg-light" id="demo">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title text-center mb-3">
                            <h3>Available Demos</h3>
                            <p class="text-muted">At solmen va esser necessi far uniform grammatica.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="demo-box bg-white mt-4 p-2">
                            <a href="#" class="text-dark">
                                <img src="{{ asset( 'website/assets/images/demo/index_1.jpg')}}" alt="" class="img-fluid mx-auto d-block">
                                <div class="p-3 text-center">
                                    <h5 class="mb-0">light Layouts</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="demo-box bg-white mt-4 p-2">
                            <a href="#" class="text-dark">
                                <img src="{{ asset( 'website/assets/images/demo/index_2.jpg')}}" alt="" class="img-fluid mx-auto d-block">
                                <div class="p-3 text-center">
                                    <h5 class="mb-0">Dark Layouts</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="demo-box bg-white mt-4 p-2">
                            <a href="#" class="text-dark">
                                <img src="{{ asset( 'website/assets/images/demo/index_3.jpg')}}" alt="" class="img-fluid mx-auto d-block">
                                <div class="p-3 text-center">
                                    <h5 class="mb-0">Material Design </h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="demo-box bg-white mt-4 p-2">
                            <a href="#" class="text-dark">
                                <img src="{{ asset( 'website/assets/images/demo/index_4.jpg')}}" alt="" class="img-fluid mx-auto d-block">
                                <div class="p-3 text-center">
                                    <h5 class="mb-0">Purple Layouts</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="demo-box bg-white mt-4 p-2">
                            <a href="#" class="text-dark">
                                <img src="{{ asset( 'website/assets/images/demo/index_5.jpg')}}" alt="" class="img-fluid mx-auto d-block">
                                <div class="p-3 text-center">
                                    <h5 class="mb-0">Boxed Layouts</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="demo-box bg-white mt-4 p-2">
                            <a href="#" class="text-dark">
                                <img src="{{ asset( 'website/assets/images/demo/index_6.jpg')}}" alt="" class="img-fluid mx-auto d-block">
                                <div class="p-3 text-center">
                                    <h5 class="mb-0">Horizontal </h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="text-center mt-4">
                            <button class="btn btn-info navbar-btn">More Demos <i class="mdi mdi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- end container-fluid -->
        </section>
        <!-- available demos end -->

        <!-- features start -->
        <section class="section">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h3>Ultra Features</h3>
                            <p class="text-muted">The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="feature-img">
                            <img src="{{ asset( 'website/assets/images/features-img/img-2.png')}}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5 features-content">
                            <div class="features-icon mb-4">
                                <i class="mdi mdi-chart-bar h4 text-white text-center"></i>
                            </div>
                            <h3 class="mb-3">It's designed for describing your app, agency or business</h3>
                            <p class="text-muted mb-4">
                                If several languages coalesce the grammar of the resulting language is more simple and regular than that of the individual languages.
                            </p>
                            <a href="#" class="btn btn-primary btn-sm">Learn More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center mt-5">
                    <div class="col-lg-6">
                        <div class="p-5 features-content">
                            <div class="features-icon mb-4">
                                <i class="mdi mdi-auto-fix h4 text-white text-center"></i>
                            </div>
                            <h3 class="mb-3">Explore the new world of creativity</h3>
                            <p class="text-muted mb-4">
                                Everyone realizes why a new common language would be desirable one could refuse to expensive translators it would be necessary.
                            </p>
                            <a href="#" class="btn btn-primary btn-sm">Learn More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature-img">
                            <img src="{{ asset( 'website/assets/images/features-img/img-1.png')}}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- features end -->

        <!-- pricing start -->
        <section class="section pb-0 bg-gradient" id="pricing">
            <div class="bg-shape">
                <img src="{{ asset( 'website/assets/images/bg-shape.png')}}" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                            <h3 class="text-white">Choose Our Pricing Plans</h3>
                            <p class="text-white-50">The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="pricing-plan bg-white p-4 mt-4">
                                    <div class="pricing-header text-center">
                                        <h5 class="plan-title text-uppercase mb-4">Single Application</h5>
                                        <h1><sup><small>$</small></sup>49</h1>
                                        <div class="plan-duration text-muted">Per License</div>
                                    </div>
                                    <ul class="list-unstyled pricing-list mt-4">
                                        <li>
                                            <i class="mdi mdi-album"></i>
                                            <p>Number of end products <b>1</b></p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-lifebuoy"></i>
                                            <p>Customer support<p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-update"></i>
                                            <p>Free Updates</p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-earth"></i>
                                            <p> 1 Domain<p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-history"></i>
                                            <p>Monthly updates</p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-alarm-check"></i>
                                            <p>24x7 Support</p>
                                        </li>
                                    </ul>
                                    <div class="text-center mt-5">
                                        <a href="#" class="btn btn-primary">Purchase Now</a>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="pricing-plan active p-4 mt-4">
                                    <span class="lable">Popular</span>
                                    <div class="pricing-header text-white text-center">
                                        <h5 class="plan-title text-white text-uppercase mb-4">Multiple Application</h5>
                                        <h1 class=" text-white"><sup><small>$</small></sup>149</h1>
                                        <div class="plan-duration">Per License</div>
                                    </div>
                                    <ul class="list-unstyled text-white pricing-list mt-4">
                                        <li>
                                            <i class="mdi mdi-album"></i>
                                            <p>Number of end products <b>5</b></p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-lifebuoy"></i>
                                            <p>Customer support<p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-update"></i>
                                            <p>Free Updates</p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-earth"></i>
                                            <p> 1 Domain<p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-history"></i>
                                            <p>Monthly updates</p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-alarm-check"></i>
                                            <p>24x7 Support</p>
                                        </li>
                                    </ul>
                                    <div class="text-center mt-5">
                                        <a href="#" class="btn shadow btn-light">Purchase Now</a>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="pricing-plan bg-white p-4 mt-4">
                                    <div class="pricing-header text-center">
                                        <h5 class="plan-title text-uppercase mb-4">Extended</h5>
                                        <h1><sup><small>$</small></sup>999</h1>
                                        <div class="plan-duration text-muted">Per License</div>
                                    </div>
                                    <ul class="list-unstyled pricing-list mt-4">
                                        <li>
                                            <i class="mdi mdi-album"></i>
                                            <p>Number of end products <b>1</b></p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-lifebuoy"></i>
                                            <p>Customer support<p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-update"></i>
                                            <p>Free Updates</p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-earth"></i>
                                            <p> 1 Domain<p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-history"></i>
                                            <p>Monthly updates</p>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-alarm-check"></i>
                                            <p>24x7 Support</p>
                                        </li>
                                    </ul>
                                    <div class="text-center mt-5">
                                        <a href="#" class="btn btn-primary">Purchase Now</a>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- end col-xl-10 -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- pricing end -->

        <!-- faqs start -->
        <section class="section" id="faq">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                            <h3>Frequently Asked Questions</h3>
                            <p class="text-muted">At solmen va esser necessi far uniform grammatica.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question">What is Lorem Ipsum?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>

                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question">Why use Lorem Ipsum?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                        </div>

                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question">How many variations exist?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>

                    </div>
                    <!--/col-lg-5 -->

                    <div class="col-lg-5">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question">Is safe use Lorem Ipsum?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>

                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question">When can be used?</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                        </div>

                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question">License &amp; Copyright</h4>
                            <p class="faq-answer mb-4 pb-1 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>

                    </div>
                    <!--/col-lg-5-->
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
        </section>
        <!-- faqs end -->

        <!-- testimonial start -->
        <section class="section bg-light" id="clients">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                            <h3>What our Users Says</h3>
                            <p class="text-muted">The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testi-box mt-4">
                            <div class="testi-desc bg-white p-4">
                                <p class="text-muted mb-0">" Excellent support for a tricky issue related to our customization of the template. Author kept us updated as he made progress on the issue and emailed us a patch when he was done. "</p>
                            </div>
                            <div class="p-4">
                                <div class="testi-img float-left mr-2">
                                    <img src="{{ asset( 'website/assets/images/testi/img-2.png')}}" alt="" class="rounded-circle">
                                </div>
                                <div>
                                    <h5 class="mb-0">Michael Morrell</h5>
                                    <p class="text-muted m-0"><small>- Ubold User</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="testi-box mt-4">
                            <div class="testi-desc bg-white p-4">
                                <p class="text-muted mb-0">" Flexible, Everything is in, Suuuuuper light, even for the code is much easier to cut and make it a theme for a productive app. "</p>
                            </div>
                            <div class="p-4">
                                <div class="testi-img float-left mr-2">
                                    <img src="{{ asset( 'website/assets/images/testi/img-1.png')}}" alt="" class="rounded-circle">
                                </div>
                                <div>
                                    <h5 class="mb-0">John Seidel</h5>
                                    <p class="text-muted m-0"><small>- Ubold User</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="testi-box mt-4">
                            <div class="testi-desc bg-white p-4">
                                <p class="text-muted mb-0">" Not only the code, design and support are awesome, but they also update it constantly the template with new content, new plugins. I will buy surely another coderthemes template! "</p>
                            </div>
                            <div class="p-4">
                                <div class="testi-img float-left mr-2">
                                    <img src="{{ asset( 'website/assets/images/testi/img-3.png')}}" alt="" class="rounded-circle">
                                </div>
                                <div>
                                    <h5 class="mb-0">Robert Taylor</h5>
                                    <p class="text-muted m-0"><small>- Ubold User</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div> 
                <!-- end row -->
            </div> 
            <!-- end container-fluid -->
        </section>
        <!-- testimonial end -->

        <!-- contact start -->
        <section class="section pb-0 bg-gradient" id="contact">
            <div class="bg-shape">
                <img src="{{ asset( 'website/assets/images/bg-shape-light.png')}}" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title text-center mb-4">
                            <h3 class="text-white">Have any Questions ?</h3>
                            <p class="text-white-50">Please fill out the following form and we will get back to you shortly</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row mb-4">
                    <div class="col-lg-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-email-outline text-info h2"></i>
                            </div>
                            <div class="contact-details text-white">
                                <h5 class="text-white">E-mail</h5>
                                <p class="text-white-50">example@abc.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-cellphone-iphone text-info h2"></i>
                            </div>
                            <div class="contact-details">
                                <h5 class="text-white">Phone</h5>
                                <p class="text-white-50">012-345-6789</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-map-marker text-info h2"></i>
                            </div>
                            <div class="contact-details">
                                <h5 class="text-white">Address</h5>
                                <p class="text-white-50">4413 Redbud Drive, New York</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <div class="custom-form p-5 bg-white">
                            <div id="message"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email...">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Enter Subject...">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="comments">Message</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-danger" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>
                        </div>
                        <!-- end custom-form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- contact end -->

        <!-- cta start -->
        <section class="section-sm bg-light">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h3 class="mb-0 mo-mb-20">We also customize the theme as per your needs</h3>
                    </div>
                    <div class="col-md-3">
                        <div class="text-md-right">
                            <a href="#" class="btn btn-outline-dark btn-rounded"><i class="mdi mdi-email-outline mr-1"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- cta end -->

        <!-- footer start -->
        <footer class="bg-dark footer">
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-lg-4">
                        <div class="pr-lg-4">
                            <div class="mb-4">
                                <img src="{{ asset( 'website/assets/images/logo-light.png')}}" alt="" height="20">
                            </div>
                            <p class="text-white-50">A Responsive Bootstrap 4 Web App Kit</p>
                            <p class="text-white-50">Ubold is a fully featured premium admin template built on top of awesome Bootstrap 4.1.3, modern web technology HTML5, CSS3 and jQuery.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">About</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Home</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Features</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Faq</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Clients</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">Social</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Facebook </a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Twitter</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Behance</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Dribble</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">Support</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Help & Support</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Privacy Policy</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">More Info</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Pricing</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>For Marketing</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>For Agencies</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Our Apps</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left pull-none">
                            <p class="text-white-50">2015 - 2020 © Ubold. Design by <a href="https://coderthemes.com/" target="_blank" class="text-white-50">Coderthemes</a> </p>
                        </div>
                        <div class="float-right pull-none">
                            <ul class="list-inline social-links">
                                <li class="list-inline-item text-white-50">
                                    Social :
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </footer>
        <!-- footer end -->
        
        <!-- Back to top -->    
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="{{asset('website/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('website/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('website/assets/js/jquery.easing.min.js')}}"></script>
        <script src="{{asset('website/assets/js/scrollspy.min.js')}}"></script>

        <!-- custom js -->
        <script src="{{asset('website/assets/js/app.js')}}"></script>
    </body>

</html>
