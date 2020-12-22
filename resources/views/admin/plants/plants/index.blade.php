@extends('admin.layouts.main')

@php

@endphp

@section('title') {{ $title ?? __('List Plants') }} @stop

@section('css')
    @parent

    <!-- Sweet Alert-->
    <link href="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('admin/assets/libs/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">@lang('Plants')</h4>
                    
                    @if(isset($plant))
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('plant_types_update', [Request::Segment(1), 'id' => $plantType->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label for="simpleinput">@lang('Characteristic')</label>
                                    <input type="text" class="form-control @error('characteristic') is-invalid @enderror" name="characteristic" id='characteristic' value="{{$plantType->characteristic}}" />
                                    @error('characteristic')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="simpleinput">@lang('Comments')</label>
                                    <small class="f-s-12 text-grey-darker pull-right" style="font-size: 10px">@lang('(Only 255 characters)')</small>
                                    <textarea class="form-control @error('comments') is-invalid @enderror" rows="3" name='comments' id='comments'>{{$plantType->comments}}</textarea>
                                    @error('comments')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">@lang('Update')</button>
                                    <a href="{{route('plant_types_index', [Request::segment(1)])}}" type="submit" class="btn btn-success waves-effect waves-light">@lang('Clean')</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    @else
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{route('plant_store', [Request::Segment(1)])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Plant Parent')</label>
                                        <select class="selectpicker" multiple data-selected-text-format="count > 3" data-style="btn-light" name="plant_parent_specieid" id="plant_parent_specieid">
                                            @foreach($plantParentsSpecies as $ind => $plantParentsSpeciesCollection)
                                                <option value="{{$plantParentsSpeciesCollection->id}}">{{$plantParentsSpeciesCollection->plant_parent_name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Plant Type')</label>
                                        <select class="selectpicker" multiple data-selected-text-format="count > 3" data-style="btn-light" name="plant_typeid" id="plant_typeid">
                                            @foreach($plantTypes as $ind => $plantTypesCollection)
                                                <option value="{{$plantTypesCollection->id}}">{{$plantTypesCollection->characteristic}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Comments')</label>
                                        <small class="f-s-12 text-grey-darker pull-right" style="font-size: 10px">@lang('(Only 255 characters)')</small>
                                        <textarea class="form-control @error('comments') is-invalid @enderror" rows="3" name='comments' id='comments'>{{old('comments')}}</textarea>
                                        @error('comments')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">@lang('Save')</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->

        <div class="col-lg-8">
            <div class="card-box">
                <h4 class="header-title">@lang('Plants List')</h4>

                <div class="table-responsive">
                    <table class="table mb-0 ra__plants__table-alt">
                        <tbody>
                            @foreach($plants as $ind => $plantsCollection)

                                @php $ind++ @endphp

                                <tr>
                                    <td>
                                        <div class="d-flex flex-wrap justify-content-between h-100">
                                            <h5>{{ $plantsCollection->plantParentSpecie->plant_parent_name }}</h5>

                                            <form method="POST" action="{{route('plant_destroy', [Request::segment(1), 'id' => $plantsCollection->id])}}" id='form-plant-{{$plantsCollection->id}}'>
                                                @csrf

                                                <input type="hidden" name="_method" value="DELETE">

                                                <a href="#" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#modal-plant-{{$plantsCollection->id}}">@lang('More')</a>

                                                <!-- Modals -->
                                                <div id="modal-plant-{{$plantsCollection->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">{{ $plantsCollection->plantParentSpecie->plant_parent_name }}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body p-4">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group no-margin">
                                                                            <label for="field-7" class="control-label">@lang('Type'):</label>
                                                                            <p>{{ $plantsCollection->plantType->characteristic }}</p>
                                                                            <br>
                                                                            <label for="field-7" class="control-label">@lang('Comments'):</label>
                                                                            <p>{{ $plantsCollection->comments }}</p>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger waves-effect waves-light delete_data" data-dismiss="modal">@lang('Close')</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal -->

                                                <!-- End of Modals-->

                                                <a href="{{route('plant_edit', [Request::segment(1), 'id' => $plantsCollection->id])}}" class="btn btn-success waves-effect waves-light">@lang('Edit')</a>

                                                <a href="javascript:;" class="btn btn-danger waves-effect waves-light delete_data" variable-name='plant' plant='{{$plantsCollection->id}}' {{-- onclick="event.preventDefault(); this.closest('form').submit();" --}}>@lang('Delete')</a>
                                            </form>

                                            <p class="text-truncate">{{ $plantsCollection->plantType->characteristic }} - {{ $plantsCollection->comments_less }}</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div> <!-- end row -->
@stop

@section('js')
    @parent

    <script src="{{asset('admin/assets/libs/bootstrap-select/js/bootstrap-select.min.js')}}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <script>
    $().ready(function(){

        $('.delete_data').click(function(){

            let variable_name = $(this).attr('variable-name')

            let id = $(this).attr(variable_name);

            Swal.fire({
                title: "@lang('Are you sure?')",
                text: "@lang('You will not be able to recover this information!')",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "@lang('Yes, delete it!')",
                cancelButtonText: "@lang('No, cancel!')",
                confirmButtonClass: "btn btn-success mt-2",
                cancelButtonClass: "btn btn-danger ml-2 mt-2",
                buttonsStyling: !1,
            }).then(function (t) {

                if(t.value === true){
                    Swal.fire({
                        title: "@lang('Deleted!')",
                        text: "@lang('Your file has been deleted.')",
                        type: "success"
                    }).then(function(button_success){

                        document.getElementById('form-'+variable_name+'-'+id).submit();

                    });
                } else {
                    t.dismiss === Swal.DismissReason.cancel && Swal.fire({
                        title: "@lang('Cancelled')",
                        text: "@lang('Nothing was deleted')",
                        type: "error"
                    });
                }
            });

        })
    });

    </script>

@stop
