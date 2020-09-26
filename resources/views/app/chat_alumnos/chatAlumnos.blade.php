@extends('app.layouts.app')

@section('title')
    Chat
@endsection

@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Chat-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-350px w-xl-400px" id="kt_chat_aside">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin:Search-->
                            <div class="input-group input-group-solid">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon--></span> </span>
                                </div>
                                <input type="text" class="form-control py-4 h-auto" placeholder="Buscar..." />
                            </div>
                            <!--end:Search-->

                            <!--begin:Users-->
                            <div class="mt-7 scroll scroll-pull">
                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Matt Pears</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Head of Development</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">35 mins</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_11.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Charlie Stone</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Art Director</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">7 hrs</span>
                                        <span class="label label-sm label-success">4</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_10.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Teresa Fox</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Web Designer</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">3 hrs</span>
                                        <span class="label label-sm label-danger">5</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_13.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Giannis Nelson</a>
                                            <span class="text-muted font-weight-bold font-size-sm">IT Consultant</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">2 days</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_15.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Carles Puyol</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Operator</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">5 mins</span>
                                        <span class="label label-sm label-success">9</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_16.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Ana Torn</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Head Of Finance</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">2 days</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Lisa Pears</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Web Designer</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">6 mins</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_20.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Amanda Bold</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Art Director</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">3 hrs</span>
                                        <span class="label label-sm label-warning">7</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Nick Jhonson</a>
                                            <span class="text-muted font-weight-bold font-size-sm">IT Consultant</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">10 mins</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Sarah Larson</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Web Designer</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">4 hrs</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Matt Pears</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Head of Development</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">35 mins</span>
                                        <span class="label label-sm label-success">5</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Tim Stone</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Web Developer</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">5 hrs</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_17.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Jhon Richardson</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Head of Development</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">1 week</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Ana Kiskia</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Web Master</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">35 mins</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_14.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Nick Stone</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Art Director</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">3 hrs</span>
                                    </div>
                                </div>
                                <!--end:User-->

                                <!--begin:User-->
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50 mr-3">
                                            <img alt="Pic" src="assets/media/users/300_13.jpg" />
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Nick Nilson</a>
                                            <span class="text-muted font-weight-bold font-size-sm">Software Arcitect</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                        <span class="text-muted font-weight-bold font-size-sm">3 days</span>
                                    </div>
                                </div>
                                <!--end:User-->
                            </div>
                            <!--end:Users-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Aside-->

                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8" id="kt_chat_content">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header align-items-center px-4 py-3">
                            <div class="text-left flex-grow-1">
                                <!--begin::Aside Mobile Toggle-->
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md d-lg-none" id="kt_app_chat_toggle">
                                    <span class="svg-icon svg-icon-lg">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Adress-book2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3" />
                                                <path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon--></span> </button>
                                <!--end::Aside Mobile Toggle-->

                            </div>
                            <div class="text-center flex-grow-1">
                                <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                                <div>
                                    <span class="label label-sm label-dot label-success"></span>
                                    <span class="font-weight-bold text-muted font-size-sm">Activo</span>
                                </div>
                            </div>
                            <div class="text-right flex-grow-1">
                            </div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Scroll-->
                            <div class="scroll scroll-pull" data-mobile-height="350">
                                <!--begin::Messages-->
                                <div class="messages">
                                    <!--begin::Message In-->
                                    <div class="d-flex flex-column mb-5 align-items-start">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40 mr-3">
                                                <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                            </div>
                                            <div>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                <span class="text-muted font-size-sm">2 Hours</span>
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                            How likely are you to recommend our company
                                            to your friends and family?
                                        </div>
                                    </div>
                                    <!--end::Message In-->

                                    <!--begin::Message Out-->
                                    <div class="d-flex flex-column mb-5 align-items-end">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <span class="text-muted font-size-sm">3 minutes</span>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                            </div>
                                            <div class="symbol symbol-circle symbol-40 ml-3">
                                                <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                            Hey there, we’re just writing to let you know
                                            that you’ve been subscribed to a repository on GitHub.
                                        </div>
                                    </div>
                                    <!--end::Message Out-->

                                    <!--begin::Message In-->
                                    <div class="d-flex flex-column mb-5 align-items-start">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40 mr-3">
                                                <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                            </div>
                                            <div>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                <span class="text-muted font-size-sm">40 seconds</span>
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                            Ok, Understood!
                                        </div>
                                    </div>
                                    <!--end::Message In-->

                                    <!--begin::Message Out-->
                                    <div class="d-flex flex-column mb-5 align-items-end">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <span class="text-muted font-size-sm">Just now</span>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                            </div>
                                            <div class="symbol symbol-circle symbol-40 ml-3">
                                                <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                            You’ll receive notifications for all issues, pull requests!
                                        </div>
                                    </div>
                                    <!--end::Message Out-->

                                    <!--begin::Message In-->
                                    <div class="d-flex flex-column mb-5 align-items-start">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40 mr-3">
                                                <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                            </div>
                                            <div>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                <span class="text-muted font-size-sm">40 seconds</span>
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                            You can unwatch this repository immediately by clicking here: <a href="#">https://github.com</a>
                                        </div>
                                    </div>
                                    <!--end::Message In-->

                                    <!--begin::Message Out-->
                                    <div class="d-flex flex-column mb-5 align-items-end">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <span class="text-muted font-size-sm">Just now</span>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                            </div>
                                            <div class="symbol symbol-circle symbol-40 ml-3">
                                                <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                            Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed
                                        </div>
                                    </div>
                                    <!--end::Message Out-->

                                    <!--begin::Message In-->
                                    <div class="d-flex flex-column mb-5 align-items-start">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40 mr-3">
                                                <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                            </div>
                                            <div>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                <span class="text-muted font-size-sm">40 seconds</span>
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                            Most purchased Business courses during this sale!
                                        </div>
                                    </div>
                                    <!--end::Message In-->

                                    <!--begin::Message Out-->
                                    <div class="d-flex flex-column mb-5 align-items-end">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <span class="text-muted font-size-sm">Just now</span>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                            </div>
                                            <div class="symbol symbol-circle symbol-40 ml-3">
                                                <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                            Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided
                                        </div>
                                    </div>
                                    <!--end::Message Out-->
                                </div>
                                <!--end::Messages-->
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Body-->

                        <!--begin::Footer-->
                        <div class="card-footer align-items-center">
                            <!--begin::Compose-->
                            <textarea class="form-control border-0 p-0" rows="2" placeholder="Escribe tu mensaje..."></textarea>
                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <div class="mr-3">
                                    <a href="#" class="btn btn-clean btn-icon btn-md mr-1"><i class="flaticon2-photograph icon-lg"></i></a>
                                    <a href="#" class="btn btn-clean btn-icon btn-md"><i class="flaticon2-photo-camera  icon-lg"></i></a>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Enviar</button>
                                </div>
                            </div>
                            <!--begin::Compose-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Chat-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection

@section('scripts_propios')
    <script src="{{URL::asset('assets/js/pages/custom/chat/chat.js?v=7.0.6')}}"></script>
@endsection