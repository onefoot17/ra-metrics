@extends('layouts.main')

@php 

@endphp
@section('title') {{ $title ?? __('List Plant Parents Species') }} @stop

@section('css')
    @parent

@stop

@section('content')

    <!-- Start Content-->
    <div class="container-fluid">
                        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">@lang('Home')</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">@lang('Plants')</a></li>
                            <li class="breadcrumb-item active">@lang('List Plant Parents Species')</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Admin</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">

            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title">Plants</h4>

                    <div class="badge badge-secondary mb-3">Ongoing</div>

                    <h6>Project Overview:</h6>

                    <p class="text-muted mb-2">
                        Panel content here.
                    </p>

                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->

@stop

@section('js')
    @parent

@stop