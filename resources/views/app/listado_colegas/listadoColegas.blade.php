@extends('app.layouts.app')

@section('title')
Lista de colegas
@endsection

@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4  subheader-transparent " id="kt_subheader">
        <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">

                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Colegas </h5>
                <!--end::Title-->

                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->

                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">
                        450 Total </span>
                    <form class="ml-5">
                        <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                            <input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Buscar..." />
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon--></span>
                                    <!--<i class="flaticon2-search-1 icon-sm"></i>-->
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Search Form-->

                <!--begin::Group Actions-->
                <div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
                    <div class="text-dark-50 font-weight-bold">
                        <span id="kt_subheader_group_selected_rows">23</span> Selected:
                    </div>
                    <div class="d-flex ml-6">
                        <div class="dropdown mr-2" id="kt_subheader_group_actions_status_change">
                            <button type="button" class="btn btn-light-primary font-weight-bolder btn-sm dropdown-toggle" data-toggle="dropdown">
                                Update Status
                            </button>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-sm">
                                <ul class="navi navi-hover pt-3 pb-4">
                                    <li class="navi-header font-weight-bolder text-uppercase text-primary font-size-lg pb-0">
                                        Change status to:
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="1">
                                            <span class="navi-text"><span class="label label-light-success label-inline font-weight-bold">Approved</span></span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="2">
                                            <span class="navi-text"><span class="label label-light-danger label-inline font-weight-bold">Rejected</span></span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="3">
                                            <span class="navi-text"><span class="label label-light-warning label-inline font-weight-bold">Pending</span></span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="4">
                                            <span class="navi-text"><span class="label label-light-info label-inline font-weight-bold">On Hold</span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-light-success font-weight-bolder btn-sm mr-2" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_records_fetch_modal">
                            Fetch Selected
                        </button>
                        <button class="btn btn-light-danger font-weight-bolder btn-sm mr-2" id="kt_subheader_group_actions_delete_all">
                            Delete All
                        </button>
                    </div>
                </div>
                <!--end::Group Actions-->
            </div>
            <!--end::Details-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="#" class="">

                </a>
                <!--end::Button-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-end mb-7">
                                <!--begin::Pic-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Pic-->
                                    <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                        <div class="symbol symbol-circle symbol-lg-75">
                                            <img src="assets/media/users/300_1.jpg" alt="image" />
                                        </div>
                                        <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                            <span class="font-size-h3 font-weight-boldest">JM</span>
                                        </div>
                                    </div>
                                    <!--end::Pic-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Luca Doncic</a>
                                        <span class="text-muted font-weight-bold">Cargo</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::User-->
                            <!--begin::Info-->
                            <div class="mb-7">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">luca@festudios.com</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-cente my-1">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Sede:</span>
                                    <span class="text-muted font-weight-bold">Linares</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Carrera:</span>
                                    <span class="text-muted font-weight-bold">Contabilidad</span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                    <div class="symbol symbol-circle symbol-lg-75">
                                        <img src="assets/media/users/300_10.jpg" alt="image" />
                                    </div>
                                    <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                        <span class="font-size-h3 font-weight-boldest">JM</span>
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin::Title-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Charlie Stone</a>
                                    <span class="text-muted font-weight-bold">Cargo</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::User-->
                            <!--begin::Info-->
                            <div class="mb-7">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">luca@festudios.com</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-cente my-1">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Sede:</span>
                                    <span class="text-muted font-weight-bold">Concepción</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Carrera:</span>
                                    <span class="text-muted font-weight-bold">Secretariado</span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                    <div class="symbol symbol-circle symbol-lg-75 d-none">
                                        <img src="assets/media/users/300_10.jpg" alt="image" />
                                    </div>
                                    <div class="symbol symbol-lg-75 symbol-circle symbol-primary">
                                        <span class="symbol-label font-size-h3 font-weight-boldest">AK</span>
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin::Title-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Anna Krox</a>
                                    <span class="text-muted font-weight-bold">Cargo</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::User-->
                            <!--begin::Info-->
                            <div class="mb-7">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">giannis@estudios.com</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-cente my-2">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Sede:</span>
                                    <span class="text-muted font-weight-bold">Talca</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Carrera:</span>
                                    <span class="text-muted font-weight-bold">Administración</span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                    <div class="symbol symbol-circle symbol-lg-75">
                                        <img src="assets/media/users/300_3.jpg" alt="image" />
                                    </div>
                                    <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                        <span class="font-size-h3 font-weight-boldest">JM</span>
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin::Title-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Jason Muller</a>
                                    <span class="text-muted font-weight-bold">Cargo</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::User-->
                            <!--begin::Info-->
                            <div class="mb-7">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">jason@fifestudios.com</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-cente my-1">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Sede:</span>
                                    <span class="text-muted font-weight-bold">La Serena</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Carrera:</span>
                                    <span class="text-muted font-weight-bold">Contabilidad</span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                    <div class="symbol symbol-circle symbol-lg-75">
                                        <img src="assets/media/users/300_2.jpg" alt="image" />
                                    </div>
                                    <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                        <span class="font-size-h3 font-weight-boldest">JM</span>
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin::Title-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Teresa Fox</a>
                                    <span class="text-muted font-weight-bold">Cargo</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::User-->
                            <!--begin::Info-->
                            <div class="mb-7">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">teresa@festudios.com</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-cente my-1">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Sede:</span>
                                    <span class="text-muted font-weight-bold">Curicó</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Carrera:</span>
                                    <span class="text-muted font-weight-bold">Administración</span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">

                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                    <div class="symbol symbol-circle symbol-lg-75 d-none">
                                        <img src="assets/media/users/300_10.jpg" alt="image" />
                                    </div>
                                    <div class="symbol symbol-lg-75 symbol-circle symbol-primary">
                                        <span class="symbol-label font-size-h3 font-weight-boldest">GN</span>
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin::Title-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Giannis Nelson</a>
                                    <span class="text-muted font-weight-bold">Cargo</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::User-->
                            <!--begin::Info-->
                            <div class="mb-7">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">giannis@fifestudios.com</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-cente my-2">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Sede:</span>
                                    <span class="text-muted font-weight-bold">Linares</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Carrera:</span>
                                    <span class="text-muted font-weight-bold">Secretariado</span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                    <div class="symbol symbol-circle symbol-lg-75">
                                        <img src="assets/media/users/300_16.jpg" alt="image" />
                                    </div>
                                    <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                        <span class="font-size-h3 font-weight-boldest">LM</span>
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin::Title-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Lisa Moss</a>
                                    <span class="text-muted font-weight-bold">Cargo</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::User-->
                            <!--begin::Info-->
                            <div class="mb-7">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">lisa@fifestudios.com</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-cente my-1">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Sede:</span>
                                    <span class="text-muted font-weight-bold">Temuco</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Carrera:</span>
                                    <span class="text-muted font-weight-bold">Secretariado</span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-7">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                    <div class="symbol symbol-circle symbol-lg-75">
                                        <img src="assets/media/users/300_15.jpg" alt="image" />
                                    </div>
                                    <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                        <span class="font-size-h3 font-weight-boldest">JM</span>
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin::Title-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Nick Mana</a>
                                    <span class="text-muted font-weight-bold">Cargo</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::User-->
                            <!--begin::Info-->
                            <div class="mb-7">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">nick@festudios.com</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-cente my-1">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Sede:</span>
                                    <span class="text-muted font-weight-bold">Talca</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark-75 font-weight-bolder mr-2">Carrera:</span>
                                    <span class="text-muted font-weight-bold">Administración</span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection