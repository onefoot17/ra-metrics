@extends('layouts.admin.main')

@php 

@endphp
@section('title') {{ $title ?? __('List Plant Parents Species') }} @stop

@section('css')
    @parent

@stop

@section('content')

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle ra__card-box card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                            <i class="fas fa-tree font-22 avatar-title text-primary"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="mt-1"><span data-plugin="counterup">548</span></h3>
                            <p class="mb-1 text-truncate">@lang('Plant Parents / Species')</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle ra__card-box card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                            <i class="fe-archive font-22 avatar-title text-success"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">214</span></h3>
                            <p class="mb-1 text-truncate">@lang('Plant Types')</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle ra__card-box card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                            <i class="fab fa-pagelines font-22 avatar-title text-info"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">1009</span></h3>
                            <p class="mb-1 text-truncate">@lang('Total Plants')</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
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
        </div> <!-- end col-->
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-lg-6">
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
        </div> <!-- end col -->
        <div class="col-lg-6">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <!-- Portlet card -->
                    <div class="ra__card card">
                        <div class="card-body" dir="ltr">
                            <div class="card-widgets">
                                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h4 class="header-title mb-0">Lifetime Sales</h4>
        
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
        
                                    <div id="lifetime-sales" data-colors="#4fc6e1,#6658dd,#ebeff2" style="height: 270px;" class="morris-chart mt-3"></div>                
                                
                                </div>
                            </div> <!-- end collapse-->
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
        
                <div class="col-lg-12">
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
                                    <div id="total-users" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14"></div>
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
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end row -->   

    <div class="row">
        <div class="col-xl-4 col-md-6">
            <!-- Portlet card -->
            <div class="ra__card card">
                <div class="card-body" dir="ltr">
                    <div class="card-widgets">
                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                        <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                    </div>
                    <h4 class="header-title mb-0">Donut Chart</h4>

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

                            <div id="lifetime-sales2" data-colors="#4fc6e1,#6658dd,#ebeff2" style="height: 270px;" class="morris-chart mt-3"></div>                
                        
                        </div>
                    </div> <!-- end collapse-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-4">
            <div class="ra__card-box card-box">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div>
                </div>

                <h4 class="header-title mb-0">Radial Bars Chart</h4>

                <div class="widget-chart text-center" dir="ltr">
                    
                    <div id="total-revenue" class="mt-0"  data-colors="#f1556c"></div>

                    <h5 class="mt-0">Total sales made today</h5>
                    <h2>$178</h2>

                    <p class="w-75 mx-auto sp-line-2">Traditional heading elements are designed to work best in the meat of your page content.</p>

                    <div class="row mt-3">
                        <div class="col-4">
                            <p class="font-15 mb-1 text-truncate">Target</p>
                            <h4><i class="fe-arrow-down text-danger mr-1"></i>$7.8k</h4>
                        </div>
                        <div class="col-4">
                            <p class="font-15 mb-1 text-truncate">Last week</p>
                            <h4><i class="fe-arrow-up text-success mr-1"></i>$1.4k</h4>
                        </div>
                        <div class="col-4">
                            <p class="font-15 mb-1 text-truncate">Last Month</p>
                            <h4><i class="fe-arrow-down text-danger mr-1"></i>$15k</h4>
                        </div>
                    </div>
                    
                </div>
            </div> <!-- end ra__card-box card-box -->
        </div> <!-- end col-->

        <div class="col-lg-4">
            <div class="ra__card card">
                <div class="card-body">
                    <div class="card-widgets">
                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                        <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                    </div>
                    <h4 class="header-title mb-0">Pie Chart</h4>

                    <div id="cardCollpase3" class="collapse pt-3 show">
                        <div class="text-center">
                            <div id="total-users2" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14"></div>
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
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

@stop

@section('js')
    @parent

    <script src="{{asset('ubold/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

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
    <script src="{{('ubold/assets/libs/morris.js06/morris.min.js')}}"></script>
    <script src="{{('ubold/assets/libs/raphael/raphael.min.js')}}"></script>

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

    <script src="{{asset('ubold/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <script>
        //
        // Total Revenue
        //
        var colors = ['#f1556c'];
        var dataColors = $("#total-revenue").data('colors');
        if (dataColors) {
            colors = dataColors.split(",");
        }
        var options = {
            series: [68],
            chart: {
                height: 220,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '65%',
                    }
                },
            },
            colors: colors,
            labels: ['Revenue'],
        };

        var chart = new ApexCharts(document.querySelector("#total-revenue"), options);
        chart.render();
    </script>

@stop
