@extends('admin.layouts.main')

@php 

@endphp
@section('title') {{ $title ?? __('Edit Plant Type') }} @stop

@section('css')
    @parent

@stop

@section('content')

<div class="row ra__plants__display">

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">@lang('Edit Plant Type')</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{route('plant_types_update', [Request::segment(1), 'id' => $plantType->id])}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label for="simpleinput">@lang('Enter specie name')</label>
                                <input type="text" class="form-control" placeholder="@lang('Enter specie name')" name="characteristic" id='characteristic' value="{{$plantType->characteristic}}" />
                            </div>
                            <div class="form-group">
                                <label for="simpleinput">@lang('Comments')</label>
                                <textarea class="form-control" rows="3" name='comments' id='comments'>{{$plantType->comments}}</textarea>
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
