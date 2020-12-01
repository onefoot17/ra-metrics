@extends('layouts.main')

@php 

@endphp
@section('title') {{ $title ?? __('List Plant Parents Species') }} @stop

@section('css')
    @parent

@stop

@section('content')

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

@stop

@section('js')
    @parent

@stop