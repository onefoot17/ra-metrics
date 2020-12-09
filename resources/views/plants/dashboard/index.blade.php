@extends('layouts.main')

@php 

@endphp
@section('title') {{ $title ?? __('List Plant Parents Species') }} @stop

@section('css')
    @parent

    <!-- Sweet Alert-->
    <link href="{{asset('ubold/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

@stop

@section('content')

    <div class="row ra__plants__display">

        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">@lang('New Plant Parents / Species')</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('plant_parents_species_store', [Request::Segment(1)])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="simpleinput">@lang('Parent name')</label>
                                    <input type="text" class="form-control" name="plant_parent_name" id='plant_specie_name' />
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
                                    <textarea class="form-control" rows="3" name='comments' id='comments'></textarea>
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

        <div class="col-lg-6">
            <div class="card-box">
                <h4 class="header-title">@lang('Plant Parents / Species')</h4>

                <div class="table-responsive">
                    <table class="table table-striped mb-0 ra__plants__display__table">
                        <tbody class="ra__plants__display__tbody">
                            @foreach($plantParentsSpecies as $ind => $plantParentsSpeciesCollection)
                                
                                @php $ind++ @endphp
    
                                <tr class="ra__plants__display__tr">
                                    <td class="ra__plants__display__td">
                                        <img src="{{asset('color-admin/assets/img/user/user-'.$ind.'.jpg')}}" class="img-rounded height-30" />
                                    </td>
                                    
                                    <td class="ra__plants__display__td">
                                        <h4>{{$plantParentsSpeciesCollection->plant_parent_name}}</h4>
                                    </td>

                                    <td class="with-btn ra__plants__display__td" nowrap>
                                        <form method="POST" action="{{route('plant_parents_species_destroy', [Request::segment(1), 'id' => $plantParentsSpeciesCollection->id])}}" id='form-plant-parent-specie-{{$plantParentsSpeciesCollection->id}}' class="ra__plants__display__buttons">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a href="{{route('plant_parents_species_edit', [Request::segment(1), 'id' => $plantParentsSpeciesCollection->id])}}" class="btn btn-outline-primary waves-effect waves-light ra__plants__display__buttons__edit">@lang('Edit')</a>
                                            <a href="javascript:;" 
                                                class="btn btn-outline-danger waves-effect waves-light delete_data"
                                                variable-name='plant-parent-specie' plant-parent-specie='{{$plantParentsSpeciesCollection->id}}'
                                                {{-- onclick="event.preventDefault();
                                                    this.closest('form').submit();" --}}
                                                    >@lang('Delete')</a>
                                        </form>
                                    </td>
                                    
                                    <td class="ra__plants__display__td">{{$plantParentsSpeciesCollection->comments}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row ra__plants__display">

        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">@lang('New List Plant Types')</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('plant_types_store', [Request::Segment(1)])}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="simpleinput">@lang('Characteristic')</label>
                                    <input type="text" class="form-control" placeholder="Characteristic" name="characteristic" id='characteristic' />
                                </div>
                                <div class="form-group">
                                    <label for="simpleinput">@lang('Comments')</label>
                                    <textarea class="form-control" rows="3" name='comments' id='plant_type_comments'></textarea>
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

        <div class="col-lg-6">
            <div class="card-box">
                <h4 class="header-title">@lang('List Plant Types')</h4>

                <div class="table-responsive">

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <tbody>
                                @foreach($plantTypes as $ind => $plantTypesCollection)
                                    <tr>
                                        <td>{{$plantTypesCollection->characteristic}}</td>
                                        <td>{{$plantTypesCollection->comments}}</td>
                                        <td class="with-btn" nowrap>
                                            <form method="POST" action="{{route('plant_types_destroy', [Request::segment(1), 'id' => $plantTypesCollection->id])}}" id='form-plant-type-{{$plantTypesCollection->id}}'>
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="{{route('plant_types_edit', [Request::segment(1), 'id' => $plantTypesCollection->id])}}"  type="button" class="btn btn-outline-primary waves-effect waves-light">@lang('Edit')</a>
                                                <button type="button" class="btn btn-outline-danger waves-effect waves-light delete_data" data-click="swal-danger" plant-type="{{$plantTypesCollection->id}}" variable-name='plant-type'>@lang('Delete')</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end table-responsive-->

            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

@stop

@section('js')
    @parent

    <!-- Sweet Alerts js -->
    <script src="{{asset('ubold/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

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
