@extends('layouts.admin.main')

@section('title') {{ $title ?? __('Settings') }} @stop

@section('css')
    @parent

    <link href="{{asset('admin/assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Loading button css -->
    <link href="{{asset('admin/assets/libs/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />

@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">@lang('Settings') <small>(@lang('Last updated'): {{$settings->updated_at}})</small></h4>

                <form action="{{route('settings_update', [Request::segment(1), 'id' => $settings->id])}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label class="mb-1">@lang('Choose your Language')</label>

                        <div class="">
                            <select class="selectpicker" data-style="btn-success" id="language" name="language">
                                <option value="en" @if(trim($settings->language) == 'en') selected @endif>@lang('English')</option>
                                <option value="fr" @if(trim($settings->language) == 'fr') selected @endif>@lang('French')</option>
                            </select>
                        </div>
                        <!-- end col-->
                    </div>

                    <div class="form-group">
                        <label class="mb-1">@lang('Theme Colour')</label>
                        <div class="input-group">
                            <div class="switchery-demo">
                                <span>Light</span>

                                <input type="checkbox" @if($settings->theme_color === 'dark') checked @endif data-plugin="switchery" data-color="#000000" data-size="small" name="theme_color" />

                                <span>Dark</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="mb-1">@lang('2-Step Verification')</label>
                        <div class="input-group">
                            <div class="switchery-demo">
                                <span>On</span>

                                <input type="checkbox" @if($settings->two_step_verification == true) checked @endif data-plugin="switchery" data-color="#f1b53d" data-size="small" name="two_step_verification" />

                                <span>Off</span>
                            </div>
                        </div>
                    </div>

                    @if($settings->two_step_verification == true)
                        <div class="radio radio-info mb-2">
                            <input type="radio" name="two_step_verification_type" id="two_step_verification_type_email" value="email" @if($settings->two_step_verification_type === 'email') checked @endif>
                            <label for="two_step_verification_type_email">
                                @lang('Email') ({{$user->email}})
                            </label>
                        </div>
                        @if(!empty($user->phone_number))
                            <div class="radio radio-primary mb-2">
                                <input type="radio" name="two_step_verification_type" id="two_step_verification_type_cellphone" value="cellphone" @if($settings->two_step_verification_type === 'cellphone') checked @endif>
                                <label for="two_step_verification_type_cellphone">
                                    @lang('Phone Number') {{$user->masked_phone_number}}
                                </label>
                            </div>
                        @endif
                    @endif
                    <div class="form-group">
                        <button class="ladda-button btn btn-success" dir="ltr" data-style="expand-left">
                            @lang('Save')
                        </button>
                    </div>

                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->

@stop

@section('js')
    @parent

    <script src="{{asset('admin/assets/libs/mohithg-switchery/switchery.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap-select/js/bootstrap-select.min.js')}}"></script>

    <!-- Loading buttons js -->
    <script src="{{asset('admin/assets/libs/ladda/spin.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/ladda/ladda.min.js')}}"></script>

    <!-- Buttons init js-->
    <script src="{{asset('admin/assets/js/pages/loading-btn.init.js')}}"></script>
    
    <script>
        !function($) {
            "use strict";

            var FormAdvanced = function() {};

            //initializing tooltip
            FormAdvanced.prototype.initSelect2 = function() {
                // Select2
                $('[data-toggle="select2"]').select2();
            },

            //initializing popover
            //Max Length
            FormAdvanced.prototype.initMaxLength = function() {
                //Bootstrap-MaxLength
                $('input#defaultconfig').maxlength({
                    warningClass: "badge badge-success",
                    limitReachedClass: "badge badge-danger"
                });

                $('input#thresholdconfig').maxlength({
                    threshold: 20,
                    warningClass: "badge badge-success",
                    limitReachedClass: "badge badge-danger"
                });

                $('input#alloptions').maxlength({
                    alwaysShow: true,
                    separator: ' out of ',
                    preText: 'You typed ',
                    postText: ' chars available.',
                    validate: true,
                    warningClass: "badge badge-success",
                    limitReachedClass: "badge badge-danger"
                });

                $('textarea#textarea').maxlength({
                    alwaysShow: true,
                    warningClass: "badge badge-success",
                    limitReachedClass: "badge badge-danger"
                });

                $('input#placement').maxlength({
                    alwaysShow: true,
                    placement: 'top-left',
                    warningClass: "badge badge-success",
                    limitReachedClass: "badge badge-danger"
                });
            },

            //initializing Custom Select
            FormAdvanced.prototype.initSelectize = function() {
                $('#selectize-tags').selectize({
                    persist: false,
                    createOnBlur: true,
                    create: true
                });
                $('#selectize-select').selectize({
                    create: true,
                    sortField: {
                        field: 'text',
                        direction: 'asc'
                    },
                    dropdownParent: 'body'
                });
                $('#selectize-maximum').selectize({
                    maxItems: 3
                });
                $('#selectize-links').selectize({
                    theme: 'links',
                    maxItems: null,
                    valueField: 'id',
                    searchField: 'title',
                    options: [
                        {id: 1, title: 'Coderthemes', url: 'https://coderthemes.com/'},
                        {id: 2, title: 'Google', url: 'http://google.com'},
                        {id: 3, title: 'Yahoo', url: 'http://yahoo.com'},
                    ],
                    render: {
                        option: function(data, escape) {
                            return '<div class="option">' +
                                    '<span class="title">' + escape(data.title) + '</span>' +
                                    '<span class="url">' + escape(data.url) + '</span>' +
                                '</div>';
                        },
                        item: function(data, escape) {
                            return '<div class="item"><a href="' + escape(data.url) + '">' + escape(data.title) + '</a></div>';
                        }
                    },
                    create: function(input) {
                        return {
                            id: 0,
                            title: input,
                            url: '#'
                        };
                    }
                });
                $('#selectize-confirm').selectize({
                    delimiter: ',',
                    persist: false,
                    onDelete: function(values) {
                        return confirm(values.length > 1 ? 'Are you sure you want to remove these ' + values.length + ' items?' : 'Are you sure you want to remove "' + values[0] + '"?');
                    }
                });
                $('#selectize-optgroup').selectize({
                    sortField: 'text'
                });
                $('#selectize-programmatic').selectize({
                    options: [
                        {class: 'mammal', value: "dog", name: "Dog" },
                        {class: 'mammal', value: "cat", name: "Cat" },
                        {class: 'mammal', value: "horse", name: "Horse" },
                        {class: 'mammal', value: "kangaroo", name: "Kangaroo" },
                        {class: 'bird', value: 'duck', name: 'Duck'},
                        {class: 'bird', value: 'chicken', name: 'Chicken'},
                        {class: 'bird', value: 'ostrich', name: 'Ostrich'},
                        {class: 'bird', value: 'seagull', name: 'Seagull'},
                        {class: 'reptile', value: 'snake', name: 'Snake'},
                        {class: 'reptile', value: 'lizard', name: 'Lizard'},
                        {class: 'reptile', value: 'alligator', name: 'Alligator'},
                        {class: 'reptile', value: 'turtle', name: 'Turtle'}
                    ],
                    optgroups: [
                        {value: 'mammal', label: 'Mammal', label_scientific: 'Mammalia'},
                        {value: 'bird', label: 'Bird', label_scientific: 'Aves'},
                        {value: 'reptile', label: 'Reptile', label_scientific: 'Reptilia'}
                    ],
                    optgroupField: 'class',
                    labelField: 'name',
                    searchField: ['name'],
                    render: {
                        optgroup_header: function(data, escape) {
                            return '<div class="optgroup-header">' + escape(data.label) + ' <span class="scientific">(' + escape(data.label_scientific) + ')</span></div>';
                        }
                    }
                });

                $("#selectize-optgroup-column").selectize({
                    options: [
                        {id: 'avenger', make: 'dodge', model: 'Avenger'},
                        {id: 'caliber', make: 'dodge', model: 'Caliber'},
                        {id: 'caravan-grand-passenger', make: 'dodge', model: 'Caravan Grand Passenger'},
                        {id: 'challenger', make: 'dodge', model: 'Challenger'},
                        {id: 'ram-1500', make: 'dodge', model: 'Ram 1500'},
                        {id: 'viper', make: 'dodge', model: 'Viper'},
                        {id: 'a3', make: 'audi', model: 'A3'},
                        {id: 'a6', make: 'audi', model: 'A6'},
                        {id: 'r8', make: 'audi', model: 'R8'},
                        {id: 'rs-4', make: 'audi', model: 'RS 4'},
                        {id: 's4', make: 'audi', model: 'S4'},
                        {id: 's8', make: 'audi', model: 'S8'},
                        {id: 'tt', make: 'audi', model: 'TT'},
                        {id: 'avalanche', make: 'chevrolet', model: 'Avalanche'},
                        {id: 'aveo', make: 'chevrolet', model: 'Aveo'},
                        {id: 'cobalt', make: 'chevrolet', model: 'Cobalt'},
                        {id: 'silverado', make: 'chevrolet', model: 'Silverado'},
                        {id: 'suburban', make: 'chevrolet', model: 'Suburban'},
                        {id: 'tahoe', make: 'chevrolet', model: 'Tahoe'},
                        {id: 'trail-blazer', make: 'chevrolet', model: 'TrailBlazer'},
                    ],
                    optgroups: [
                        {$order: 3, id: 'dodge', name: 'Dodge'},
                        {$order: 2, id: 'audi', name: 'Audi'},
                        {$order: 1, id: 'chevrolet', name: 'Chevrolet'}
                    ],
                    labelField: 'model',
                    valueField: 'id',
                    optgroupField: 'make',
                    optgroupLabelField: 'name',
                    optgroupValueField: 'id',
                    lockOptgroupOrder: true,
                    searchField: ['model'],
                    plugins: ['optgroup_columns'],
                    openOnFocus: false
                });

                $('.selectize-close-btn').selectize({
                    plugins: ['remove_button'],
                    persist: false,
                    create: true,
                    render: {
                        item: function(data, escape) {
                            return '<div>"' + escape(data.text) + '"</div>';
                        }
                    },
                    onDelete: function(values) {
                        return confirm(values.length > 1 ? 'Are you sure you want to remove these ' + values.length + ' items?' : 'Are you sure you want to remove "' + values[0] + '"?');
                    }
                });

                $('.selectize-drop-header').selectize({
                    sortField: 'text',
                    hideSelected: false,
                    plugins: {
                        'dropdown_header': {
                            title: 'Language'
                        }
                    }
                })
            },

            //initializing Slimscroll
            FormAdvanced.prototype.initSwitchery = function() {
                $('[data-plugin="switchery"]').each(function (idx, obj) {
                    new Switchery($(this)[0], $(this).data());
                });
            },

            //initializing form validation
            FormAdvanced.prototype.initMultiSelect = function() {
                if($('[data-plugin="multiselect"]').length > 0)
                    $('[data-plugin="multiselect"]').multiSelect($(this).data());
            },

            // touchspin
            FormAdvanced.prototype.initTouchspin = function() {
                var defaultOptions = {
                };

                // touchspin
                $('[data-toggle="touchspin"]').each(function (idx, obj) {
                    var objOptions = $.extend({}, defaultOptions, $(obj).data());
                    $(obj).TouchSpin(objOptions);
                });
            },


            //initilizing
            FormAdvanced.prototype.init = function() {
                var $this = this;
                this.initSwitchery()
            },

            $.FormAdvanced = new FormAdvanced, $.FormAdvanced.Constructor = FormAdvanced

        }(window.jQuery),
        //initializing main application module
        function ($) {
            "use strict";
            $.FormAdvanced.init();
        }(window.jQuery);
    </script>
@stop
