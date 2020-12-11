@extends('admin.layouts.main')

@php 

@endphp

@section('title') {{ $title ?? __('Users') }} @stop

@section('css')
    @parent

    <!-- Sweet Alert-->
    <link href="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <div class="row ra__plants__display">

        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">@lang('New User')</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('admin_users_store', [Request::segment(1)])}}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>@lang('Name')</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">N</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="@lang('Name')" aria-label="@lang('Name')" aria-describedby="basic-addon1" name="name" id='name' value="{{ old('name') }}">
                                    </div>
                                </div>
            
                                <div class="form-group mb-3">
                                    <label>@lang('Email')</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="@lang('Email')" aria-label="@lang('Email')" aria-describedby="basic-addon1" name='email' id='email' value="{{ old('email') }}">
                                    </div>
                                </div>
            
                                <div class="form-group mb-3">
                                    <label>@lang('Password')</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">P</span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="@lang('Password')" aria-label="@lang('Password')" aria-describedby="basic-addon1" name="password" id='password' readonly onfocus="this.removeAttribute('readonly');">
                                    </div>
                                </div>
            
                                <div class="form-group mb-3">
                                    <label>@lang('Confirm Password')</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">C</span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="@lang('Confirm Password')" aria-label="@lang('Confirm Password')" aria-describedby="basic-addon1" name="password_confirmation" id='password_confirmation' readonly onfocus="this.removeAttribute('readonly');">
                                    </div>
                                </div>
            
                                <div class="form-group mb-3">
                                    <label>@lang('Phone Number')</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">P</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="@lang('Phone Number')" aria-label="@lang('Phone Number')" aria-describedby="basic-addon1" name='phone_number' id='phone_number' value="{{ old('phone_number') }}">
                                    </div>
                                </div>
            
                                <div class="form-group mb-3">
                                    <button class="ladda-button btn btn-success" dir="ltr" data-style="expand-left">
                                        @lang('Save')
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->

        <div class="col-lg-6">
            <div class="card-box">
                <h4 class="header-title">@lang('Users')</h4>

                <div class="table-responsive">
                    <table class="table table-striped mb-0 ra__plants__display__table">
                        {{-- <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                            </tr>
                        </thead> --}}
                        <tbody>
                            @foreach($users as $ind => $usersCollection)
                                <tr>
                                    <td>{{ $usersCollection->name }}</td>
                                    <td>{{ $usersCollection->email }}</td>
                                    <td>{{ $usersCollection->phone_number }}</td>
                                    <td>
                                        <form method="POST" action="{{route('admin_users_destroy', [Request::segment(1), 'id' => $usersCollection->id])}}" id='form-plant-type-{{$usersCollection->id}}'>
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a href="{{route('admin_users_edit', [Request::segment(1), 'id' => $usersCollection->id])}}"  type="button" class="btn btn-primary waves-effect waves-light">@lang('Edit')</a>
                                            <button type="button" class="btn btn-danger waves-effect waves-light delete_data" data-click="swal-danger" plant-type="{{$usersCollection->id}}" variable-name='plant-type'>@lang('Delete')</button>
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
