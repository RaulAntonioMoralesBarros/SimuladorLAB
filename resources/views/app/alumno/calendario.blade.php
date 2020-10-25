@extends('app.layouts.app')

@section('title')
    Calendario
@endsection

@section('css_propios')
    <link href="{{URL::asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6')}}"  rel="stylesheet" type="text/css" />

@endsection

@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Example-->
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Calendario estudiantil
                        </h3>
                    </div>
                    <!--<div class="card-toolbar">
                        <a href="#" class="btn btn-light-primary font-weight-bold">
                        <i class="ki ki-plus icon-md mr-2"></i> Add Event
                        </a>
                    </div> -->
                </div>
                <div class="card-body">
                    <div id="kt_calendar"></div>
                </div>
            </div>
            <!--end::Card-->


        <!--end::Example-->
        </div>
    <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection


@section('scripts_propios')
    <script src="{{URL::asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6')}}"></script>
    <script src="{{URL::asset('assets/js/pages/features/calendar/basic.js?v=7.0.6')}}"></script>
@endsection