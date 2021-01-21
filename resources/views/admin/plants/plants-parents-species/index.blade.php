@extends('admin.layouts.main')

@php

@endphp

@section('title') {{ $title ?? __('List Plant Parent / Species') }} @stop

@section('css')
    @parent

    <!-- Sweet Alert-->
    <link href="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">@lang('New Plant Parent')</h4>
                    
                    @if(isset($plantParentSpecie))
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{route('plant_parents_species_update', [Request::Segment(1), 'id' => $plantParentSpecie->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Parent name')</label>
                                        <input type="text" class="form-control @error('plant_parent_name') is-invalid @enderror" name="plant_parent_name" id='plant_specie_name' value="{{$plantParentSpecie->plant_parent_name}}" />
                                        @error('plant_parent_name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('Image')</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="parent_image" name="image">
                                                <label class="custom-file-label" for="parent_image">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Comments')</label>
                                        <small class="f-s-12 text-grey-darker pull-right" style="font-size: 10px">@lang('(Only 255 characters)')</small>
                                        <textarea class="form-control @error('comments') is-invalid @enderror" rows="3" name='comments' id='comments'>{{$plantParentSpecie->comments}}</textarea>
                                        @error('comments')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">@lang('Update')</button>
                                        <a href="{{route('plant_parents_species_index', [Request::segment(1)])}}" type="submit" class="btn btn-success waves-effect waves-light">@lang('Clean')</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{route('plant_parents_species_store', [Request::Segment(1)])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="simpleinput">@lang('Parent name')</label>
                                        <input type="text" class="form-control @error('plant_parent_name') is-invalid @enderror" name="plant_parent_name" id='plant_specie_name' value="{{old('plant_parent_name')}}" />
                                        @error('plant_parent_name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('Image')</label>
                                        <div class="input-group">
                                            {{-- <div class="custom-file"> --}}
                                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="parent_image" name="image" value="{{old('image')}}">
                                                @error('image')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                <label class="custom-file-label" for="parent_image">Choose file</label>
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
                <h4 class="header-title">@lang('Plant Parent')</h4>

                <div class="table-responsive">
                    <table class="table mb-0 ra__plants__table-alt">
                        <tbody>
                            @foreach($plantParentsSpecies as $ind => $plantParentsSpeciesCollection)

                                @php $ind++ @endphp

                                <tr>
                                    <td class="ra__plants__table-alt__img-con">
                                        @if(is_null($plantParentsSpeciesCollection->image_path))
                                            <img src="{{ asset('images/black-and-white-flower.jpg') }}" alt="image" class="img-fluid rounded" />
                                        @else
                                            <img src="{{ asset(Storage::url($plantParentsSpeciesCollection->image_path)) }}" alt="image" class="img-fluid rounded" />
                                        @endif
                                    </td>

                                    <td>
                                        <div class="d-flex flex-wrap justify-content-between h-100">
                                            <h5>{{ $plantParentsSpeciesCollection->plant_parent_name }}</h5>

                                            <form method="POST" action="{{route('plant_parents_species_destroy', [Request::segment(1), 'id' => $plantParentsSpeciesCollection->id])}}" id='form-plant-parent-specie-{{$plantParentsSpeciesCollection->id}}'>
                                                @csrf

                                                <input type="hidden" name="_method" value="DELETE">

                                                <a href="{{route('plant_parents_species_edit', [Request::segment(1), 'id' => $plantParentsSpeciesCollection->id])}}" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#modal-plant-parent-{{$plantParentsSpeciesCollection->id}}">@lang('More')</a>

                                                <!-- Modals -->
                                                <div id="modal-plant-parent-{{$plantParentsSpeciesCollection->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">{{ $plantParentsSpeciesCollection->plant_parent_name }}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body p-4">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group no-margin">
                                                                            <center>
                                                                                <img src="{{ asset(Storage::url($plantParentsSpeciesCollection->image_path)) }}" alt="image" class="img-fluid rounded" />
                                                                            </center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group no-margin">
                                                                            <label for="field-7" class="control-label">@lang('Comments'):</label>
                                                                            <br>
                                                                            <br>
                                                                            <p>{{ $plantParentsSpeciesCollection->comments }}</p>
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

                                                <a href="{{route('plant_parents_species_edit', [Request::segment(1), 'id' => $plantParentsSpeciesCollection->id])}}" class="btn btn-success waves-effect waves-light">@lang('Edit')</a>

                                                <a href="javascript:;" class="btn btn-danger waves-effect waves-light delete_data" variable-name='plant-parent-specie' plant-parent-specie='{{$plantParentsSpeciesCollection->id}}' {{-- onclick="event.preventDefault(); this.closest('form').submit();" --}}>@lang('Delete')</a>
                                            </form>

                                            <p class="text-truncate">{{ $plantParentsSpeciesCollection->comments_less }}</p>
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
