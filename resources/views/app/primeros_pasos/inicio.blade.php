@extends('app.layouts.app')

@section('title')
    Datos de inicio
@endsection

@section('content')

    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-3 py-lg-8  subheader-transparent " id="kt_subheader">
            <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <h2 class="subheader-title text-dark font-weight-bold my-1 mr-3">
                            Creando empresa
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                {{-- Información de contenido --}}
                <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
                    <div class="alert-icon">
                        <span class="svg-icon svg-icon-success svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                    <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                    <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                </g>
                            </svg>
                        </span>
                    </div>
                    <div class="alert-text">
                        Ingresa la informacion necesaria para ...
                        Dual Listbox is a pure JavaScript plugin that converts the normal select box into a searchable dual
                        list box where the users are able to move options between two selection panels.<br />

                        For more info please visit the plugin's
                        <a class="font-weight-bold" href="https://www.cssscript.com/demo/pure-js-dual-list-box-component/"
                            target="_blank">Demo Page</a> or
                        <a class="font-weight-bold" href="https://github.com/maykinmedia/dual-listbox"
                            target="_blank">GitHub</a>.
                    </div>
                </div>
                {{-- /Información de contenido --}}

                <!--begin: Row-->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card card-custom card-stretch example example-compact">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">
                                        Selecciona tus ramos cursados
                                    </h3>
                                </div>
                                <div class="card-toolbar">
                                    <div class="example-tools justify-content-center">
                                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <select id="kt_dual_listbox_1" class="dual-listbox" multiple>
                                    <option value="1">Gestión comercial y tributaria</option>
                                    <option value="2">Procesos administrativos</option>
                                    <option value="3">Atencion al cliente</option>
                                    <option value="4">Calculo de remunereación</option>
                                    <option value="5">Operaciones de bodega</option>
                                    <option value="6">Logística</option>
                                    <option value="7">Emprendimiento</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card card-custom card-stretch gutter-b ">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">
                                        Presiona el icono para generar una empresa
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body align-items-center" style="text-align: center;">
                                <br><br><br><br><br><br>
                                <a href="" class="text-muted">
                                    <span class="svg-icon svg-icon-primary svg-icon-10x">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z"
                                                    fill="#000000" />
                                                <rect fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1" />
                                                <path
                                                    d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                    <br>
                                    Generar empresa
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection

@section('scripts_propios')

    <script src="{{ URL::asset('assets/js/pages/features/miscellaneous/dual-listbox.js?v=7.0.6') }}"></script>
@endsection
