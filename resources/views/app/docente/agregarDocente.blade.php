@extends('app.layouts.app')

@section('title')
    Agregar nuevo docente
@endsection

@section('css_propios')
    <link href="{{URL::asset('assets/css/pages/wizard/wizard-4.css?v=7.0.6')}}" rel="stylesheet" type="text/css"/>

@endsection
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Card-->
            <div class="card card-custom card-transparent">
                <div class="card-body p-0">
                    <!--begin::Wizard-->
                    <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
                    <!--begin::Wizard Nav-->
                        <div class="wizard-nav">
                            <div class="wizard-steps">
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-number">
                                        1
                                        </div>
                                        <div class="wizard-label">
                                            <div class="wizard-title">
                                            Perfil
                                            </div>
                                            <div class="wizard-desc">
                                            Información personal del docente
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-number">
                                        2
                                        </div>
                                        <div class="wizard-label">
                                            <div class="wizard-title">
                                            Cuenta
                                            </div>
                                            <div class="wizard-desc">
                                            Cuenta y configuración del usuario
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-number">
                                        3
                                        </div>
                                        <div class="wizard-label">
                                            <div class="wizard-title">
                                            Dirección
                                            </div>
                                            <div class="wizard-desc">
                                            Dirección del usuario
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-number">
                                        2
                                        </div>
                                        <div class="wizard-label">
                                            <div class="wizard-title">
                                            Verificacion de la informacion
                                            </div>
                                            <div class="wizard-desc">
                                            Revisar y enviar
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Wizard Nav-->

                        <!--begin::Card-->
                        <div class="card card-custom card-shadowless rounded-top-0">
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                    <div class="col-xl-12 col-xxl-10">
                                        <!--begin::Wizard Form-->
                                        <form class="form" id="kt_form">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-9">
                                                    <!--begin::Wizard Step 1-->
                                                    <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
                                                        <h5 class="text-dark font-weight-bold mb-10">Detalles del perfil del docente:</h5>
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label text-left">Avatar</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="image-input image-input-outline" id="kt_user_add_avatar">
                                                                    <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_6.jpg)"></div>

                                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
                                                                        <input type="hidden" name="profile_avatar_remove"/>
                                                                    </label>

                                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Nombre</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control form-control-solid form-control-lg" name="nombre" type="text" value=""/>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Apellido</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control form-control-solid form-control-lg" name="apellido" type="text" value=""/>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Rut</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control form-control-solid form-control-lg" name="rut" type="text" value=""/>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                         <!--begin::Group-->
                                                         <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Contraseña</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="input-group input-group-solid input-group-lg">
                                                                    <input type="password" class="form-control form-control-solid form-control-lg" name="contraseña"  value=""/ >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Telefono</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="input-group input-group-solid input-group-lg">
                                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="telefono" 
                                                                    k placeholder="Phone" />
                                                                </div>
                                                                <span class="form-text text-muted">Ingrese un numero de telefono valido(ejemplo: 9 91110023).</span>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="input-group input-group-solid input-group-lg">
                                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="email" value=""/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Establecimiento</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="input-group input-group-solid input-group-lg">
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="establecimiento" placeholder="Instituto Superior de Comercio" value=""/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                         <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-xl-3 col-lg-3">Carreras</label>
                                                            <div class="col-xl-9 col-lg-9 col-form-label">
                                                                <div class="checkbox-inline">
                                                                    <label class="checkbox">
                                                                        <input name="carreras" type="checkbox" />
                                                                        <span></span>
                                                                        Contabilidad
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input name="carreras" type="checkbox" />
                                                                        <span></span>
                                                                        Administracion
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input name="carreras" type="checkbox"/>
                                                                        <span></span>
                                                                        Secretariado
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-xl-3 col-lg-3">Cursos asignados</label>
                                                            <div class="col-xl-9 col-lg-9 col-form-label">
                                                                <div class="checkbox-inline">
                                                                    <label class="checkbox">
                                                                        <input name="carreras" type="checkbox" />
                                                                        <span></span>
                                                                        3° medio
                                                                    </label>
                                                                    <label class="checkbox">
                                                                        <input name="carreras" type="checkbox" />
                                                                        <span></span>
                                                                        4° medio
                                                                    </label>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                       
                                                    </div>
                                                    <!--end::Wizard Step 1-->
     

                                                    <!--begin::Wizard Step 4-->
                                                    <div class="my-5 step" data-wizard-type="step-content">
                                                        <h5 class="mb-10 font-weight-bold text-dark">Revisar informacion y enviar</h5>

                                                        <!--begin::Item-->
                                                        <div class="border-bottom mb-5 pb-5">
                                                            <div class="font-weight-bolder  mb-3">
                                                                Detalles de tu cuenta:
                                                            </div>
                                                            <div class="line-height-xl">
                                                                Carlos Morales
                                                                <br/> Telefono: +569 90929597
                                                                <br/> Email: carlosm@gmail.com
                                                                <br/> Estalecimiento: INSUCO
                                                                <br/> Carreras: Administracion - Contabilidad
                                                                <br/> Cursos: 3° medios
                                                            </div>
                                                        </div>
                                                        <!--end::Item-->
                                                    
                                                    </div>
                                                    <!--end::Wizard Step 4-->
                                                    <!--begin::Wizard Actions-->
                                                    <div class="d-flex justify-content-between border-top pt-10 mt-15">
                                                        <div class="mr-2">
                                                            <button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-9 py-4" data-wizard-type="action-prev">
                                                                Anterior
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">
                                                                Crear docente
                                                            </button>

                                                            <button type="button" id="next-step" class="btn btn-primary font-weight-bolder px-9 py-4" data-wizard-type="action-next">
                                                                Siguiente
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!--end::Wizard Actions--> 
                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Wizard Form-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->            
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Wizard-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection

@section('scripts_propios')
    <script src="{{URL::asset('assets/js/pages/custom/user/add-user.js?v=7.0.6')}}"></script>
@endsection