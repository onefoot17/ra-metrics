@extends('layouts.main')

@php 

@endphp
@section('title') {{ $title ?? 'Create Plant Types' }} @stop

@section('css')
    @parent

@stop

@section('content')

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Plants</a></li>
        <li class="breadcrumb-item active">Insert Plant Types</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Plant <small> insert</small></h1>
    <!-- end page-header -->
    
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Plant Types</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <form action="{{route('plant_types_store')}}" method="POST" enctype="application/x-www-form-urlencoded">
                @csrf
                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3">Characteristic</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control m-b-5" placeholder="Characteristic" name="characteristic" id='characteristic' />
                    </div>
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3">Comments</label>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="3" name='comments' id='comments'></textarea>
                        <small class="f-s-12 text-grey-darker pull-right">Only 255 characters</small>
                    </div>
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3"></label>
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-lime">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end panel -->
</div>
<!-- end #content -->

@stop

@section('js')
    @parent

@stop