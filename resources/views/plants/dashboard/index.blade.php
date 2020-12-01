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

    <!-- Start Content-->
    <div class="container-fluid">
                        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">@lang('Home')</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">@lang('Plants')</a></li>
                            <li class="breadcrumb-item active">@lang('List Plant Parents Species')</li>
                        </ol>
                    </div>
                    <h4 class="page-title">@lang('Plants')</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row ra__plants__display">

            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">@lang('New Plant Parents / Species')</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{route('plant_dashboard_store', [Request::Segment(1)])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">@lang('Parent name')</label>
                                        <input type="text" class="form-control" name="plant_parent_name" id='plant_specie_name' />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">@lang('Image')</label>
                                        <input type="file" class="form-control" name="plant_image" id='plant_image' />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">@lang('Comments')</label>
                                        <textarea class="form-control" rows="3" name='comments' id='comments'></textarea>
                                        <small class="f-s-12 text-grey-darker pull-right">@lang('Only 255 characters')</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-blue waves-effect waves-light">@lang('Submit')</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <h3 class="header-title">@lang('Plant Parents / Species')</h3>

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
                                            <form method="POST" action="{{route('plant_dashboard_destroy', [Request::segment(1), 'id' => $plantParentsSpeciesCollection->id])}}" id='form_{{$plantParentsSpeciesCollection->id}}' class="ra__plants__display__buttons">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="{{route('plant_parents_species_edit', [Request::segment(1), 'id' => $plantParentsSpeciesCollection->id])}}" class="btn btn-outline-primary waves-effect waves-light ra__plants__display__buttons__edit">@lang('Edit')</a>
                                                <a href="javascript:;" 
                                                    class="btn btn-outline-danger waves-effect waves-light delete_information"
                                                    id="{{$plantParentsSpeciesCollection->id}}"
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
    </div> <!-- container -->

@stop

@section('js')
    @parent

    <!-- Sweet Alerts js -->
    <script src="{{asset('ubold/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <script>
    !(function (t) {
        "use strict";
        function e() {}
        (e.prototype.init = function () {

            t(".delete_information").click(function () {
                
                let id = $(this).attr('id');

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
                           
                            document.getElementById('form_'+id).submit();

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
        }),
        (t.SweetAlert = new e()),
        (t.SweetAlert.Constructor = e);

    })(window.jQuery),
    (function () {
        "use strict";
        window.jQuery.SweetAlert.init();
    })();

    </script>

@stop
