@extends('admin.layouts.main')

@php 

@endphp
@section('title') {{ $title ?? __('Edit Plant') }} @stop

@section('css')
    @parent

@stop

@section('content')

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">@lang('Home')</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">@lang('Plants')</a></li>
        <li class="breadcrumb-item active">@lang('')Edit Plant</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">@lang('Plant') <small> @lang('edit')</small></h1>
    <!-- end page-header -->
    
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">@lang('Plant')</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <form action="{{route('plant_update', [Request::segment(1), 'id' => $plant->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3">@lang('Plant Parent')</label>
                    <div class="col-md-9">
                        <select class="form-control" name="plant_parent_specieid" id="plant_parent_specieid">
                            <option value="{{old('plant_parent_specieid')}}">@lang('Select one')</option>
                            @foreach($plantParentsSpecies as $ind => $plantParentSpeciesCollection)
                                <option value="{{$plantParentSpeciesCollection->id}}" @if($plantParentSpeciesCollection->id == $plant->plant_parent_specieid) selected @endif>{{$plantParentSpeciesCollection->plant_parent_name}}</option>
                            @endforeach
                            @error('plant_parent_specieid')
                                <br/>
                                <div class="alert alert-danger fade show">
                                    <span class="close" data-dismiss="alert">×</span>
                                    {{ $message }}
                                </div>
                        @enderror
                        </select>
                    </div>
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3">@lang('Plant type')</label>
                    <div class="col-md-9">
                        <select class="form-control" name="plant_typeid" id="plant_typeid">
                            <option value="{{old('plant_typeid')}}">@lang('Select one')</option>
                            @foreach($plantTypes as $ind => $plantTypesCollection)
                                <option value="{{$plantTypesCollection->id}}" @if($plantTypesCollection->id == $plant->plant_typeid) selected @endif>{{$plantTypesCollection->characteristic}}</option>
                            @endforeach
                        </select>
                        @error('plant_typeid')
                            <br/>
                            <div class="alert alert-danger fade show">
                                <span class="close" data-dismiss="alert">×</span>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3">@lang('Comments')</label>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="3" name='comments' id='comments'>{{$plant->comments}}</textarea>
                        <small class="f-s-12 text-grey-darker pull-right">
                            @lang('Only 255 characters')
                            @error('comments')
                                <br/>
                                <div class="alert alert-danger fade show">
                                    <span class="close" data-dismiss="alert">×</span>
                                    {{ $message }}
                                </div>
                            @enderror
                        </small>
                    </div>
                </div>
                <div class="form-group row m-b-15">
                    <label class="col-form-label col-md-3"></label>
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-lime">@lang('Submit')</button>
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
