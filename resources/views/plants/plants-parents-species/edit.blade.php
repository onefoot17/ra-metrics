@extends('layouts.admin.main')

@php 

@endphp
@section('title') {{ $title ?? __('Edit Plant Parents Species') }} @stop

@section('css')
    @parent

@stop

@section('content')

<div class="row ra__plants__display">

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">@lang('New Plant Parents / Species')</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{route('plant_parents_species_update', [Request::Segment(1), 'id' => $plantParentSpecie->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="simpleinput">@lang('Parent name')</label>
                                <input type="text" class="form-control" name="plant_parent_name" id='plant_specie_name' value="{{$plantParentSpecie->plant_parent_name}}" />
                            </div>
                            <div class="form-group">
                                <label>@lang('Image')</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="simpleinput">@lang('Comments')</label>
                                <textarea class="form-control" rows="3" name='comments' id='comments'>{{$plantParentSpecie->comments}}</textarea>
                                <small class="f-s-12 text-grey-darker pull-right">@lang('Only 255 characters')</small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success waves-effect waves-light">@lang('Submit')</button>
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

@stop