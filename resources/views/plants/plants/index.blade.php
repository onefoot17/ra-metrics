@extends('layouts-color-admin.main')

@php 

@endphp
@section('title') {{ $title ?? __('') }} @stop

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
        <li class="breadcrumb-item active">@lang('Plants List')</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">@lang('Plant') <small> @lang('list')</small></h1>
    <!-- end page-header -->
    
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">@lang('Plants')</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
            

            <!-- begin table-responsive -->
            <div class="table-responsive">
                <table class="table table-striped m-b-0">
                    <thead>
                        <tr>
                            <th>@lang('Plant Parent')</th>
                            <th>@lang('Plant Type')</th>
                            <th>@lang('Comments')</th>
                            <th width="1%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($plants as $ind => $plantsCollection)
                            <tr>
                                <td>{{$plantsCollection->plantParentSpecie->plant_parent_name}}</td>
                                <td>{{$plantsCollection->plantType->characteristic}}</td>
                                <td>{{$plantsCollection->comments}}</td>
                                <td class="with-btn" nowrap>
                                    <form method="POST" action="{{route('plant_destroy', [Request::segment(1), 'id' => $plantsCollection->id])}}" id='form_{{$plantsCollection->id}}'>
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{route('plant_edit', [Request::segment(1), 'id' => $plantsCollection->id])}}" class="btn btn-sm btn-primary width-60 m-r-2">@lang('Edit')</a>
                                        <a href="javascript:;" 
                                            class="btn btn-sm btn-red width-60"
                                            data-click="swal-danger"
                                            id="{{$plantsCollection->id}}"
                                                >@lang('Delete')</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- end table-responsive -->


        </div>
    </div>
    <!-- end panel -->
</div>
<!-- end #content -->

@stop

@section('js')
    @parent

    <script src="{{asset('color-admin/assets/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>

    <script>
        var handleSweetNotification = function() {
            $('[data-click="swal-danger"]').click(function(e) {
                let id = $(this).attr('id');
                e.preventDefault();
                swal({
                    title: '@lang("Are you sure?")',
                    text: '@lang("You will not be able to recover this information!")',
                    icon: 'error',
                    dangerMode: true,
                    buttons: {
                        cancel: {
                            text: '@lang("Cancel")',
                            value: null,
                            visible: true,
                            className: 'btn btn-default',
                            closeModal: true,
                        },
                        confirm: {
                            text: '@lang("Delete")',
                            value: true,
                            visible: true,
                            className: 'btn btn-danger',
                            closeModal: true
                        }
                    }
                })
                .then((value) => {
                    if(value === true){
                        document.getElementById('form_'+id).submit();
                    } 
                });
            });
        };

        var Notification = function () {
            "use strict";
            return {
                //main function
                init: function () {
                    handleSweetNotification();
                }
            };
        }();

        $(document).ready(function() {
            Notification.init();
        });
    </script>

@stop