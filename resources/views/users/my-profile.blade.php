@extends('layouts.main')

@section('title') {{ $title ?? __('My Profile') }} @stop

@section('css')
    @parent

    <!-- Loading button css -->
    <link href="{{asset('ubold/assets/libs/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />

@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">@lang('My Profile') <small>(@lang('Last updated'): 2020-02-02 15:14)</small></h4>

                <form action="{{route('my_profile_update', [Request::segment(1)])}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group mb-3">
                        <label>@lang('Name')</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">N</span>
                            </div>
                            <input type="text" class="form-control" placeholder="@lang('Name')" aria-label="@lang('Name')" aria-describedby="basic-addon1" value="{{Auth::User()->name}}" name="name" id='name'>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label>@lang('Email')</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="@lang('Email')" aria-label="@lang('Email')" aria-describedby="basic-addon1" value="{{Auth::User()->email}}" name='email' id='email' readonly>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label>@lang('Password')</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">P</span>
                            </div>
                            <input type="password" class="form-control" placeholder="@lang('Password')" aria-label="@lang('Password')" aria-describedby="basic-addon1" name="password" id='password' readonly onfocus="this.removeAttribute('readonly');">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <button class="ladda-button btn btn-success" dir="ltr" data-style="expand-left">
                            @lang('Edit')
                        </button>
                    </div>

                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->

@stop

@section('js')
    @parent

    <!-- Loading buttons js -->
    <script src="{{asset('ubold/assets/libs/ladda/spin.min.js')}}"></script>
    <script src="{{asset('ubold/assets/libs/ladda/ladda.min.js')}}"></script>

    <!-- Buttons init js-->
    <script src="{{asset('ubold/assets/js/pages/loading-btn.init.js')}}"></script>

@stop