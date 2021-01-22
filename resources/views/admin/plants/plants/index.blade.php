@extends('admin.layouts.main')

@php

@endphp

@section('title') {{ $title ?? __('Plants List') }} @stop

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
                    <h4 class="header-title">@lang('New Plant')</h4>

                    @if(isset($plant))
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{route('plant_update', [Request::Segment(1), 'id' => $plant->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Plant Parent')</label>
                                        <select class="selectpicker @error('plant_parent_specieid') is-invalid @enderror" multiple data-selected-text-format="count > 3" data-style="btn-light" name="plant_parent_specieid[]" id="plant_parent_specieid">
                                            <option value="">Select an item</option>
                                            @foreach($plantParentsSpecies as $ind => $plantParentsSpeciesCollection)
                                                <option value="{{$plantParentsSpeciesCollection->id}}" @if($plant->plantChildren->contains('id', $plantParentsSpeciesCollection->id)) selected @endif>{{$plantParentsSpeciesCollection->plant_parent_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('plant_parent_specieid')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Plant Type')</label>
                                        <select class="selectpicker @error('plant_typeid') is-invalid @enderror" {{--multiple--}} data-selected-text-format="count > 3" data-style="btn-light" name="plant_typeid" id="plant_typeid">
                                            <option value="">Select an item</option>
                                            @foreach($plantTypes as $ind => $plantTypesCollection)
                                                <option value="{{$plantTypesCollection->id}}" @if($plantTypesCollection->id == $plant->plant_typeid) selected @endif>{{$plantTypesCollection->characteristic}}</option>
                                            @endforeach
                                        </select>
                                        @error('plant_typeid')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Plant Name')</label>
                                        <input type="text" class="form-control @error('plant_name') is-invalid @enderror" name="plant_name" id='plant_name' value="{{$plant->plant_name}}" />
                                        @error('plant_name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Cross')</label>
                                        <input type="text" class="form-control @error('cross') is-invalid @enderror" name="cross" id='cross' value="{{$plant->cross}}" />
                                        @error('cross')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>@lang('Image')</label>
                                        <div class="input-group">
                                            {{-- <div class="custom-file"> --}}
                                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="plant_image" name="image" value="{{old('image')}}">
                                                @error('image')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                <label class="custom-file-label" for="plant_image">Choose file</label>
                                            {{-- </div> --}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Comments')</label>
                                        <small class="f-s-12 text-grey-darker pull-right" style="font-size: 10px">@lang('(Only 255 characters)')</small>
                                        <textarea class="form-control @error('comments') is-invalid @enderror" rows="3" name='comments' id='comments'>{{$plant->comments}}</textarea>
                                        @error('comments')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">@lang('Save')</button>
                                        <a href="{{route('plant_index', [Request::segment(1)])}}" type="submit" class="btn btn-success waves-effect waves-light">@lang('Clean')</a>
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
                                        <select class="selectpicker @error('plant_parent_specieid') is-invalid @enderror" multiple data-selected-text-format="count > 3" data-style="btn-light" name="plant_parent_specieid[]" id="plant_parent_specieid">
                                            <option value="">Select an iten</option>
                                            @foreach($plantParentsSpecies as $ind => $plantParentsSpeciesCollection)
                                                <option value="{{$plantParentsSpeciesCollection->id}}">{{$plantParentsSpeciesCollection->plant_parent_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('plant_parent_specieid')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Plant Type')</label>
                                        <select class="selectpicker @error('plant_typeid') is-invalid @enderror" {{--multiple--}} data-selected-text-format="count > 3" data-style="btn-light" name="plant_typeid" id="plant_typeid">
                                            <option value="">Select an iten</option>
                                            @foreach($plantTypes as $ind => $plantTypesCollection)
                                                <option value="{{$plantTypesCollection->id}}">{{$plantTypesCollection->characteristic}}</option>
                                            @endforeach
                                        </select>
                                        @error('plant_typeid')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Plant Name')</label>
                                        <input type="text" class="form-control @error('plant_name') is-invalid @enderror" name="plant_name" id='plant_name' value="{{old('plant_name')}}" />
                                        @error('plant_name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Cross')</label>
                                        <input type="text" class="form-control @error('cross') is-invalid @enderror" name="cross" id='cross' value="{{old('cross')}}" />
                                        @error('cross')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>@lang('Image')</label>
                                        <div class="input-group">
                                            {{-- <div class="custom-file"> --}}
                                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="plant_image" name="image" value="{{old('image')}}">
                                                @error('image')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                <label class="custom-file-label" for="plant_image">Choose file</label>
                                            {{-- </div> --}}
                                        </div>
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
                                    <td class="ra__plants__table-alt__img-con">
                                        @if(is_null($plantsCollection->image_path))
                                            <img src="{{ asset('images/black-and-white-flower.jpg') }}" alt="image" class="img-fluid rounded" />
                                        @else
                                            <img src="{{ asset(Storage::url($plantsCollection->image_path)) }}" alt="image" class="img-fluid rounded" />
                                        @endif
                                    </td>

                                    <td>
                                        <section class="d-flex flex-wrap justify-content-between h-100">
                                            <section>
                                                @if ( !empty ( $plantsCollection->plant_name ) )
                                                    <h5>{{ $plantsCollection->plant_name }}</h5>
                                                @endif

                                                @if ( !empty ( $plantsCollection->cross ) )
                                                    <h6>Cross</h6>
                                                    <p>{{ $plantsCollection->cross }}</p>
                                                @endif

                                                @if ( $plantsCollection->plantChildren->count() > 0 )
                                                    <h6>Parents</h6>
                                                    <p>
                                                        @foreach( $plantsCollection->plantChildren as $ind => $plantChildrenCollection )
                                                            <span>{{ $plantChildrenCollection->plant_parent_name }}@if ( $loop->iteration < $loop->count ), @endif </span>
                                                        @endforeach
                                                    </p>
                                                @endif

                                                @if ( !empty ( $plantsCollection->plantType->characteristic ) )
                                                    <h6>Type</h6>
                                                    <p class="text-truncate">{{ $plantsCollection->plantType->characteristic }} - {{ $plantsCollection->comments_less }}</p>
                                                @endif
                                            </section>

                                            <section>
                                                <form method="POST" action="{{route('plant_destroy', [Request::segment(1), 'id' => $plantsCollection->id])}}" id='form-plant-{{$plantsCollection->id}}'>
                                                    @csrf

                                                    <input type="hidden" name="_method" value="DELETE">

                                                    <a href="#" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#modal-plant-{{$plantsCollection->id}}">@lang('More')</a>

                                                    <!-- Modals -->
                                                    <div id="modal-plant-{{$plantsCollection->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Plants list</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body p-4">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group no-margin">
                                                                                <center>
                                                                                    <img src="{{ asset(Storage::url($plantsCollection->image_path)) }}" alt="image" class="img-fluid rounded" />
                                                                                </center>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group no-margin">
                                                                                <label for="field-7" class="control-label">@lang('Plant Parents'):</label>
                                                                                @foreach($plantsCollection->plantChildren as $ind => $plantChildrenCollection)
                                                                                    <p>{{ $plantChildrenCollection->plant_parent_name }}</p>
                                                                                @endforeach
                                                                                <br>
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
                                            </section>
                                        </tr>
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
