@extends('app.layouts.app')

@section('css_propios')

@endsection

@section('content')
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-3 py-lg-8  subheader-transparent " id="kt_subheader">
            <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">

                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h2 class="subheader-title text-dark font-weight-bold my-1 mr-3">
                        Gráfico de avance 
                        </h2>
                        <!--end::Page Title-->

                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->


            </div>
        </div>
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <div class="row">
                    <div class="col-lg-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">
                                        Avance semestre 1
                                    </h3>   
                                </div>
                            </div>
                            <div class="card-body">
                                <!--begin::Chart-->
                                <div id="chart_12" class="d-flex justify-content-center"></div>
                                <!--end::Chart-->
                            </div>
                        </div>
                        <!--end::Card--> 
                    </div>

                </div>

            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection

@section('scripts_propios')
    <script src="{{URL::asset('assets/js/pages/features/charts/apexcharts.js?v=7.0.6')}}"></script>


@endsection