@extends('admin.layouts.main')

@php 

@endphp
@section('title') {{ $title ?? __('Edit Users') }} @stop

@section('css')
    @parent

    <!-- Loading button css -->
    <link href="{{asset('admin/assets/libs/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />

@stop

@section('content')

<div class="row ra__plants__display">

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">@lang('User')</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{route('admin_users_update', [ Request::segment(1), 'id' => $user->id ])}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group mb-3">
                                <label>@lang('Name')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">N</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="@lang('Name')" aria-label="@lang('Name')" aria-describedby="basic-addon1" name="name" id='name' value="{{ $user->name }}">
                                </div>
                            </div>
        
                            <div class="form-group mb-3">
                                <label>@lang('Email')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="@lang('Email')" aria-label="@lang('Email')" aria-describedby="basic-addon1" name='email' id='email' value="{{ $user->email }}">
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
                                <label>@lang('Confirm Password')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">C</span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="@lang('Confirm Password')" aria-label="@lang('Confirm Password')" aria-describedby="basic-addon1" name="password_confirmation" id='password_confirmation' readonly onfocus="this.removeAttribute('readonly');">
                                </div>
                            </div>
        
                            <div class="form-group mb-3">
                                <label>@lang('Phone Number')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">P</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="@lang('Phone Number')" aria-label="@lang('Phone Number')" aria-describedby="basic-addon1" name='phone_number' id='phone_number' value="{{ $user->phone_number }}">
                                </div>
                            </div>
        
                            <div class="form-group mb-3">
                                <button class="ladda-button btn btn-success" dir="ltr" data-style="expand-left">
                                    @lang('Edit')
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>

@stop

@section('js')
    @parent

    <!-- Loading buttons js -->
    <script src="{{asset('admin/assets/libs/ladda/spin.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/ladda/ladda.min.js')}}"></script>

    <!-- Buttons init js-->
    <script src="{{asset('admin/assets/js/pages/loading-btn.init.js')}}"></script>

@stop
