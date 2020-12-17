@section( 'title' ) {{ $title ?? __( 'Home' ) }} @stop

@extends( 'website.layouts.main' )

@section( 'css' )
    @parent

    <link href="{{asset('admin/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
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

                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="widget-rounded-circle ra__card-box card-box">
                            <div class="row">
                                <div class="col-3">
                                    <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                        <i class="fas fa-tree font-22 avatar-title text-primary"></i>
                                    </div>
                                </div>

                                <div class="col-9">
                                    <div class="text-right">
                                        <h3 class="mt-1"><span data-plugin="counterup">548</span></h3>
                                        <p class="mb-1 text-truncate">@lang('Plant Parents / Species')</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->

                        <div class="ra__card card">
                            <div class="card-body" dir="ltr">
                                <div class="card-widgets">
                                    <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                    <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>

                                <h4 class="header-title mb-0">Donut Chart</h4>

                                <div id="lifetime-sales2" data-colors="#4fc6e1,#6658dd,#ebeff2" style="height: 270px;" class="morris-chart mt-3"></div>

                                <div id="cardCollpase1" class="collapse pt-3 show">
                                    <div class="text-center">
                                        <div class="row mt-2">
                                            <div class="col-4">
                                                <h3 data-plugin="counterup">3,487</h3>
                                                <p class="font-13 mb-0 text-truncate">Total Sales</p>
                                            </div>
                                            <div class="col-4">
                                                <h3 data-plugin="counterup">814</h3>
                                                <p class="font-13 mb-0 text-truncate">Open Campaign</p>
                                            </div>
                                            <div class="col-4">
                                                <h3 data-plugin="counterup">5,324</h3>
                                                <p class="font-13 mb-0 text-truncate">Daily Sales</p>
                                            </div>
                                        </div> <!-- end row -->

                                    </div>
                                </div> <!-- end collapse-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-lg-4">
                        <div class="widget-rounded-circle ra__card-box card-box">
                            <div class="row">
                                <div class="col-3">
                                    <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                        <i class="fe-archive font-22 avatar-title text-success"></i>
                                    </div>
                                </div>

                                <div class="col-9">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">214</span></h3>
                                        <p class="mb-1 text-truncate">@lang('Plant Types')</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->

                        <div class="ra__card card">
                            <div class="card-body" dir="ltr">
                                <div class="card-widgets">
                                    <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                    <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>

                                <h4 class="header-title mb-0">Lifetime Sales</h4>

                                <div class="text-center">
                                    <div id="total-users2" class="mt-3" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14">
                                        <canvas width="220" height="220" style="display: inline-block; width: 220px; height: 220px; vertical-align: top;"></canvas>
                                    </div>
                                </div>

                                <div id="cardCollpase3" class="collapse pt-3 show">
                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <p class="font-15 mb-1 text-truncate">Target</p>
                                            <h4><i class="fe-arrow-down text-danger mr-1"></i>18k</h4>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-15 mb-1 text-truncate">Last week</p>
                                            <h4><i class="fe-arrow-up text-success mr-1"></i>3.25k</h4>
                                        </div>
                                        <div class="col-4">
                                            <p class="font-15 mb-1 text-truncate">Last Month</p>
                                            <h4><i class="fe-arrow-up text-success mr-1"></i>28k</h4>
                                        </div>
                                    </div> <!-- end row -->
                                </div> <!-- collapsed end -->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-lg-4">
                        <div class="widget-rounded-circle ra__card-box card-box">
                            <div class="row">
                                <div class="col-3">
                                    <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                        <i class="fab fa-pagelines font-22 avatar-title text-info"></i>
                                    </div>
                                </div>

                                <div class="col-9">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">1009</span></h3>
                                        <p class="mb-1 text-truncate">@lang('Total Plants')</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->

                        <div class="ra__card card">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                    <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>

                                <h4 class="header-title mb-0">Pie Chart</h4>

                                <div id="lifetime-sales" data-colors="#4fc6e1,#6658dd,#ebeff2" style="height: 270px;" class="morris-chart mt-3"></div>

                                <div id="cardCollpase1" class="collapse pt-3 show">
                                    <div class="text-center">
                                        <div class="row mt-2">
                                            <div class="col-4">
                                                <h3 data-plugin="counterup">548</h3>
                                                <p class="font-13 mb-0 text-truncate">@lang('Plant Parents / Species')</p>
                                            </div>
                                            <div class="col-4">
                                                <h3 data-plugin="counterup">214</h3>
                                                <p class="font-13 mb-0 text-truncate">@lang('Plant Types')</p>
                                            </div>
                                            <div class="col-4">
                                                <h3 data-plugin="counterup">1009</h3>
                                                <p class="font-13 mb-0 text-truncate">@lang('Total Plants')</p>
                                            </div>
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end collapse-->
                            </div> <!-- end card-body -->
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row-->
            </div>
        </section>

        {{-- Reports --}}
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
                <div class="ra__card card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>

                            <a data-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>

                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>

                        <h4 class="header-title mb-0">Top 15 @lang('Plant Parent / Species')</h4>

                        <div id="cardCollpase5" class="collapse pt-3 show">
                            <div class="table-responsive">
                                <table class="table table-hover table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ASOS Ridley High Waist</td>
                                            <td>$79.49</td>
                                            <td>82</td>
                                            <td>$6,518.18</td>
                                        </tr>
                                        <tr>
                                            <td>Marco Lightweight Shirt</td>
                                            <td>$128.50</td>
                                            <td>37</td>
                                            <td>$4,754.50</td>
                                        </tr>
                                        <tr>
                                            <td>Half Sleeve Shirt</td>
                                            <td>$39.99</td>
                                            <td>64</td>
                                            <td>$2,559.36</td>
                                        </tr>
                                        <tr>
                                            <td>Lightweight Jacket</td>
                                            <td>$20.00</td>
                                            <td>184</td>
                                            <td>$3,680.00</td>
                                        </tr>
                                        <tr>
                                            <td>Marco Shoes</td>
                                            <td>$28.49</td>
                                            <td>69</td>
                                            <td>$1,965.81</td>
                                        </tr>
                                        <tr>
                                            <td>ASOS Ridley High Waist</td>
                                            <td>$79.49</td>
                                            <td>82</td>
                                            <td>$6,518.18</td>
                                        </tr>
                                        <tr>
                                            <td>Half Sleeve Shirt</td>
                                            <td>$39.99</td>
                                            <td>64</td>
                                            <td>$2,559.36</td>
                                        </tr>
                                        <tr>
                                            <td>Lightweight Jacket</td>
                                            <td>$20.00</td>
                                            <td>184</td>
                                            <td>$3,680.00</td>
                                        </tr>
                                        <tr>
                                            <td>Lightweight Jacket</td>
                                            <td>$20.00</td>
                                            <td>184</td>
                                            <td>$3,680.00</td>
                                        </tr>
                                        <tr>
                                            <td>Lightweight Jacket</td>
                                            <td>$20.00</td>
                                            <td>184</td>
                                            <td>$3,680.00</td>
                                        </tr>
                                        <tr>
                                            <td>Lightweight Jacket</td>
                                            <td>$20.00</td>
                                            <td>184</td>
                                            <td>$3,680.00</td>
                                        </tr>
                                        <tr>
                                            <td>Lightweight Jacket</td>
                                            <td>$20.00</td>
                                            <td>184</td>
                                            <td>$3,680.00</td>
                                        </tr>
                                        <tr>
                                            <td>Lightweight Jacket</td>
                                            <td>$20.00</td>
                                            <td>184</td>
                                            <td>$3,680.00</td>
                                        </tr>
                                        <tr>
                                            <td>Lightweight Jacket</td>
                                            <td>$20.00</td>
                                            <td>184</td>
                                            <td>$3,680.00</td>
                                        </tr>
                                        <tr>
                                            <td>Lightweight Jacket</td>
                                            <td>$20.00</td>
                                            <td>184</td>
                                            <td>$3,680.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table responsive-->
                        </div> <!-- collapsed end -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div>
        </div>

        {{-- Participants --}}
        <section id="participants" class="ra__dark section section-height-3 bg-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
            <div class="container my-3">
                <div class="row mb-5">
                    <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h2 class="font-weight-bold text-color-light mb-2">Participants</h2>

                        <p class="text-color-light opacity-7">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="widget-rounded-circle ra__card-box card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                            <i class="fe-users font-22 avatar-title text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup">97</span></h3>
                                            <p class="mb-1 text-truncate">@lang('Participants')</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div>

                        <div class="ra__card card">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                    <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>
                                <h4 class="header-title mb-0">Total Users</h4>

                                <div id="cardCollpase3" class="collapse pt-3 show">
                                    <div class="text-center">
                                        <div id="total-users" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14"><canvas width="220" height="220" style="display: inline-block; width: 220px; height: 220px; vertical-align: top;"></canvas></div>
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <p class="font-15 mb-1 text-truncate">Target</p>
                                                <h4><i class="fe-arrow-down text-danger mr-1"></i>18k</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="font-15 mb-1 text-truncate">Last week</p>
                                                <h4><i class="fe-arrow-up text-success mr-1"></i>3.25k</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="font-15 mb-1 text-truncate">Last Month</p>
                                                <h4><i class="fe-arrow-up text-success mr-1"></i>28k</h4>
                                            </div>
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- collapsed end -->
                            </div> <!-- end card-body -->
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                    <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                    <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                </div>
                                <h4 class="header-title mb-0">Users Growth over Time</h4>

                                <div id="cardCollpase3" class="collapse pt-3 show" dir="ltr">
                                    <div id="apex-line-2" class="apex-charts" data-colors="#f672a7"></div>
                                </div> <!-- collapsed end -->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>
                </div>
                <!-- end row -->
            </div>
        </section>

        {{-- Contact Us Form --}}
        {{-- @include( 'website/layouts/components/form-contact-us' ) --}}
    </div>

    @include( 'website.layouts.footernav' )
@stop

@section( 'footer-scripts' )
    <!-- Third Party js-->
    <script src="{{ asset( 'admin/assets/libs/apexcharts/apexcharts.min.js' ) }}"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>

    <!-- init js -->
    <script src="{{ asset( 'admin/assets/js/pages/apexcharts.init.js' ) }}"></script>

    {{-- Total Users --}}
    <script src="{{asset('admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <script>
        $( document ).ready(function() {

            var DrawSparkline = function() {
                // Pie Chart
                var colors = ['#00acc1','#4b88e4','#e3eaef','#fd7e14'];
                var dataColors = $("#total-users").data('colors');
                if (dataColors) {
                    colors = dataColors.split(",");
                }
                $('#total-users').sparkline([20, 40, 30, 10], {
                    type: 'pie',
                    width: '220',
                    height: '220',
                    sliceColors: colors
                });

                $('#total-users2').sparkline([30, 50, 15, 45], {
                    type: 'pie',
                    width: '220',
                    height: '220',
                    sliceColors: colors
                });
            };

            DrawSparkline();

            var resizeChart;

            $(window).resize(function(e) {
                clearTimeout(resizeChart);
                resizeChart = setTimeout(function() {
                    DrawSparkline();
                }, 300);
            });
        });
    </script>

    <!-- Plugins js -->
    <script src="{{asset('admin/assets/libs/morris.js06/morris.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/raphael/raphael.min.js')}}"></script>

    {{-- Plants --}}
    <script>
        !function($) {
            "use strict";

            var Dashboard4 = function() {};

            //creates Donut chart
            Dashboard4.prototype.createDonutChart = function(element, data, colors) {
                Morris.Donut({
                    element: element,
                    data: data,
                    barSize: 0.2,
                    resize: true, //defaulted to true
                    colors: colors,
                    backgroundColor: 'transparent'
                });
            },
            Dashboard4.prototype.init = function() {

                //creating donut chart
                var $donutData = [
                    {label: " Species ", value: 12},
                    {label: " Plants", value: 30},
                    {label: " Types ", value: 20}
                ];
                var colors = ['#4fc6e1','#6658dd', '#ebeff2'];
                var dataColors = $("#lifetime-sales").data('colors');
                if (dataColors) {
                    colors = dataColors.split(",");
                }
                this.createDonutChart('lifetime-sales', $donutData, colors);

                this.createDonutChart('lifetime-sales2', $donutData, colors);
            },
            //init
            $.Dashboard4 = new Dashboard4, $.Dashboard4.Constructor = Dashboard4
        }(window.jQuery),

        //initializing
        function($) {
            "use strict";
            $.Dashboard4.init();
        }(window.jQuery);

    </script>
@stop
