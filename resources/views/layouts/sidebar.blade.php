<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="{{asset('color-admin/assets/img/user/user-13.jpg')}}" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>{{Auth::user()->name}}
                        <small>{{date('M-d-Y')}}</small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="javascript:;"><i class="fa fa-cog"></i> @lang('Settings')</a></li>
                    <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> @lang('Send Feedback')</a></li>
                    <li><a href="javascript:;"><i class="fa fa-question-circle"></i> @lang('Helps')</a></li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav"><li class="nav-header">@lang('Navigation')</li>            
            
            <li class="has-sub active">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-cogs"></i>
                    <span>@lang('System') <span class="label label-theme">@lang('NEW')</span></span>
                </a>
                <ul class="sub-menu">
                    <li  @if(Route::currentRouteName() === 'home') class="active" @endif>
                        <a href="{{route('home', [Request::segment(1)])}}">@lang('Home')</a></li>                   
                    <li class="has-sub 
                        @if(Route::currentRouteName() === 'plant_parents_species_create' 
                        or Route::currentRouteName() === 'plant_parents_species_index'
                        or Route::currentRouteName() === 'plant_parents_species_edit') 
                        active 
                        @endif">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            @lang('Plant Parents Species')
                        </a>
                        <ul class="sub-menu">
                            <li @if(Route::currentRouteName() === 'plant_parents_species_index') class="active" @endif><a href="{{route('plant_parents_species_index', [Request::segment(1)])}}">@lang('List')</a></li>
                            <li @if(Route::currentRouteName() === 'plant_parents_species_create') class="active" @endif><a href="{{route('plant_parents_species_create', [Request::segment(1)])}}">@lang('Create')</a></li>
                        </ul>
                    </li>
                    <li class="has-sub 
                        @if(Route::currentRouteName() === 'plant_types_create' 
                        or Route::currentRouteName() === 'plant_types_index'
                        or Route::currentRouteName() === 'plant_types_edit') 
                        active 
                        @endif">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            @lang('Plant Types')
                        </a>
                        <ul class="sub-menu">
                            <li @if(Route::currentRouteName() === 'plant_types_index') class="active" @endif><a href="{{route('plant_types_index', [Request::segment(1)])}}">@lang('List')</a></li>
                            <li @if(Route::currentRouteName() === 'plant_types_create') class="active" @endif><a href="{{route('plant_types_create', [Request::segment(1)])}}">@lang('Create')</a></li>
                        </ul>
                    </li>
                    <li class="has-sub 
                        @if(Route::currentRouteName() === 'plant_create' 
                        or Route::currentRouteName() === 'plant_index'
                        or Route::currentRouteName() === 'plant_edit') 
                        active 
                        @endif">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            @lang('Plants')
                        </a>
                        <ul class="sub-menu">
                            <li @if(Route::currentRouteName() === 'plant_index') class="active" @endif><a href="{{route('plant_index', [Request::segment(1)])}}">@lang('List')</a></li>
                            <li @if(Route::currentRouteName() === 'plant_create') class="active" @endif><a href="{{route('plant_create', [Request::segment(1)])}}">@lang('Create')</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->