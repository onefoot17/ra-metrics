@section( 'title' ) {{ $title ?? __( 'About' ) }} @stop

@extends( 'website.layouts.main' )

@section( 'css' )
    @parent
@stop

@section( 'content' )
    <div role="main" class="main" id="about">
        <section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>About</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-right">
                            <li><a href="#">Home</a></li>
                            <li class="active">About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container pb-1">

            <div class="row pt-4">
                <div class="col">
                    <div class="overflow-hidden mb-3">
                        <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">Our Project</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-10">
                    <div class="overflow-hidden">
                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Sociis natoque penatibus et magnis dis parturient montes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="450">
                    <a href="#" class="btn btn-modern btn-primary mt-1">Participate</a>
                </div>
            </div>
        </div>
        <section class="section section-default border-0 my-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750">
            <div class="container py-4">

                <div class="row align-items-center">
                    <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                        <div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                            <div>
                                <img alt="" class="img-fluid" src="{{asset ('website/porto/img/generic/generic-corporate-3-2-full.jpg') }}">
                            </div>

                            <div>
                                <img alt="" class="img-fluid" src="{{asset ('website/porto/img/generic/generic-corporate-3-3-full.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">Who We Are</h2>
                        </div>

                        <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
                        <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="section section-default border-0 my-5">
            <div class="container py-4">

                <div class="row">
                    <div class="col pb-4 text-center">
                        <h2 class="text-color-dark font-weight-normal mb-0 pt-2">Meet Our Team</h2>

                        <p>Rockstars lorem ipsum dolor sit amet, consectetur adipiscing elit ac laoreet libero.</p>
                    </div>
                </div>
                <div class="row pb-4 mb-2">
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                        <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <a href="about-me.html">
                                    <img src="{{asset ('website/porto/img/team/team-1.jpg') }}" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">John Doe</span>
                                        <span class="thumb-info-type">CEO</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <a href="about-me.html">
                                    <img src="{{asset ('website/porto/img/team/team-2.jpg') }}" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Jessica Doe</span>
                                        <span class="thumb-info-type">Marketing</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                        <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <a href="about-me.html">
                                    <img src="{{asset ('website/porto/img/team/team-3.jpg') }}" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Rick Edward Doe</span>
                                        <span class="thumb-info-type">Developer</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                        <span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <a href="about-me.html">
                                    <img src="{{asset ('website/porto/img/team/team-4.jpg') }}" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Melinda Wolosky</span>
                                        <span class="thumb-info-type">Design</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row py-5 my-5">
                <div class="col">

                    <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                        <div>
                            <img class="img-fluid opacity-2" src="img/logos/logo-1.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="img/logos/logo-3.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="img/logos/logo-5.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="img/logos/logo-6.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="img/logos/logo-4.png" alt="">
                        </div>
                        <div>
                            <img class="img-fluid opacity-2" src="img/logos/logo-2.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include( 'website.layouts.footernav' )
@stop

@section( 'footer-scripts' )
@stop
