<!DOCTYPE html>
<html lang="es">

<head>
	
    {{-- Metadatos --}}
    <meta charset="utf-8" />
    <meta name="descripción" content="Ingresa a SILABO" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    {{-- /Metadatos --}}

    {{-- Titulo --}}
    <title>
        Acceso a SILABO
    </title>
    {{-- /Titulo --}}

    {{-- Logo ico --}}
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    {{-- /Logo ico --}}

    {{-- CSS --}}
    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700') }}"
        rel="stylesheet" />
    <link href="{{ URL::asset('../css/pages/login/classic/login-4.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('../plugins/global/plugins.bundle.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('../plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('../css/style.bundle.css') }}" rel="stylesheet" />
    {{-- /CSS --}}

</head>


<body id="kt_body"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">

    <div class="d-flex flex-column flex-root">
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
                style="background-image: url('../media/bg/bg-3.jpg');">
                <div class="login-form text-center p-7 position-relative overflow-hidden">

                    {{-- Logo --}}
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="../media/logos/logo-letter-13.png" class="max-h-75px" alt="" />
                        </a>
                    </div>
                    {{-- /Logo --}}

                    {{-- Formulario de ingreso --}}
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3>Ingresa a SILABO</h3>
                            <div class="text-muted font-weight-bold">Ingrese sus datos para iniciar sesión en su cuenta:
                            </div>
                        </div>
                        <form class="form" id="kt_login_signin_form" method="POST"
                            action="{{ route('acceso.ingresar') }}" role="form">
                            {{ csrf_field() }}

                            <div class="form-group mb-5">
                                <input type="email" class="form-control h-auto form-control-solid py-4 px-8"
                                    placeholder="Correo electrónico" name="correo_electronico" autocomplete="off" />
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="password"
                                    placeholder="Contraseña" name="contraseña" />
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                                <div class="checkbox-inline">
                                    <label class="checkbox m-0 text-muted">
                                        <input type="checkbox" name="remember" />
                                        <span></span>
                                        Recordar
                                    </label>
                                </div>
                                <a href="javascript:;" id="kt_login_forgot"
                                    class="text-muted text-hover-primary">¿Olvidó su contraseña?</a>
                            </div>
                            <button id="kt_login_signin_submit"
                                class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Ingresar</button>
                        </form>
                        <div class="mt-10">
                            <span class="opacity-70 mr-4">
                                ¿Aún no tienes una cuenta?
                            </span>
                            <a href="javascript:;" id="kt_login_signup"
                                class="text-muted text-hover-primary font-weight-bold">Contrata SILABO</a>
                        </div>
                    </div>
                    {{-- /Formulario de ingreso --}}

                    {{-- Formulario de solicitud contraseña
                    --}}
                    <div class="login-forgot">
                        <div class="mb-20">
                            <h3>¿Olvidó su contraseña?</h3>
                            <div class="text-muted font-weight-bold">
                                Ingrese su correo electrónico para restablecer su contraseña</div>
                        </div>
                        <form class="form" id="kt_login_forgot_form">
                            <div class="form-group mb-10">
                                <input class="form-control form-control-solid h-auto py-4 px-8" type="text"
                                    placeholder="Correo electrónico" name="correo_electronico" autocomplete="off" />
                            </div>
                            <div class="form-group d-flex flex-wrap flex-center mt-10">
                                <button id="kt_login_forgot_submit"
                                    class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Solicitar</button>
                                <button id="kt_login_forgot_cancel"
                                    class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancelar</button>
                            </div>
                        </form>
                    </div>
                    {{-- /Formulario de solicitud contraseña
                    --}}

                </div>
            </div>
        </div>
    </div>

    {{-- JS --}}
    <script src="{{ URL::asset('../plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ URL::asset('../plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ URL::asset('../js/scripts.bundle.js') }}"></script>
    <script src="{{ URL::asset('../js/pages/custom/login/login-general.js') }}"></script>
    {{-- /JS --}}

</body>

</html>
