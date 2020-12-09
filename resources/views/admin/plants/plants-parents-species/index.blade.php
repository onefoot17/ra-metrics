@extends('layouts.admin.main')

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

        <div class="row">

            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title">@lang('Plant Parents / Species')</h4>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>@lang('Image')</th>
                                    <th width="10%">@lang('Parent Name')</th>
                                    <th>@lang('Comments')</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($plantParentsSpecies as $ind => $plantParentsSpeciesCollection)
                                    
                                    @php $ind++ @endphp
        
                                    <tr>
                                        <td>
                                            <img src="{{asset('color-admin/assets/img/user/user-'.$ind.'.jpg')}}" class="img-rounded height-30" />
                                        </td>
                                        <td>{{$plantParentsSpeciesCollection->plant_parent_name}}</td>
                                        <td>{{$plantParentsSpeciesCollection->comments}}</td>
                                        <td class="with-btn" nowrap>
                                            <form method="POST" action="{{route('plant_parents_species_destroy', [Request::segment(1), 'id' => $plantParentsSpeciesCollection->id])}}" id='form_{{$plantParentsSpeciesCollection->id}}'>
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="{{route('plant_parents_species_edit', [Request::segment(1), 'id' => $plantParentsSpeciesCollection->id])}}" class="btn btn-outline-primary waves-effect waves-light">@lang('Edit')</a>
                                                <a href="javascript:;" 
                                                    class="btn btn-outline-danger waves-effect waves-light delete_information"
                                                    id="{{$plantParentsSpeciesCollection->id}}"
                                                    {{-- onclick="event.preventDefault();
                                                        this.closest('form').submit();" --}}
                                                        >@lang('Delete')</a>
                                            </form>
                                        </td>
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
