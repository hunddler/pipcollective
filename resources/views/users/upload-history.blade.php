@php
$var_page = 'Upload History';
$var_tab = 'Calculater';
@endphp

@extends('componant.main-layout')
<title>Upload History</title>
@section('content')
<div class="card mb-5 mb-xl-8">
    <div class="card-body py-lg-8 py-sm-0 mb-4">
        <div class="card mb-6">
            <div class="card-body">
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <div class="d-flex gap-9 mb-7 justify-content-between">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary w-50 active" id="kt_modal_create_campaign_duration_all">
                            <div class="d-flex align-items-center flex-row gap-3 text-left">
                                <div>
                                    <img src="assets/media/icons/meta4.png">
                                </div>
                                <div class="d-flex flex-column align-items-start">
                                    <div>
                                        Meta Trader 4
                                    </div>
                                    <div>
                                        <span class="fs-7">
                                            Select the option of Meta trader 4
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </button>
                        <!--end::Button-->

                        <!--begin::Button-->
                        <button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default w-50" id="kt_modal_create_campaign_duration_fixed">
                            <div class="d-flex align-items-center flex-row gap-3 text-left">
                                <div>
                                    <img src="assets/media/icons/meta4.png">
                                </div>
                                <div class="d-flex flex-column align-items-start">
                                    <div>
                                        Meta Trader 5
                                    </div>
                                    <div>
                                        <span class="fs-7">
                                            Select the option of Meta trader 5
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Duration option-->
                    <!--begin::Datepicker-->
                    <input class="form-control form-control-solid d-none" placeholder="Pick date & time" id="kt_modal_create_campaign_datepicker" />
                    <!--end::Datepicker-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="d-flex flex-column gap-2">
                    <div>
                        <h4>Upload Your FULL history  Meta Report</h4>
                    </div>
                    <div>
                        <div class="fv-row mb-10">
                            <!--begin::Dropzone-->
                            <div class="dropzone" id="kt_modal_create_campaign_files_upload">
                                <!--begin::Message-->
                                <div class="dz-message needsclick d-flex flex-column align-items-center gap-3">
                                    <div>
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-file-up fs-3hx primary-text"></i>
                                        <!--end::Icon-->
                                    </div>
                                    <div>
                                        <!--begin::Info-->
                                        <div class="ms-4">
                                            <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drags files here or click to upload</h3>
                                            <span class="fw-semibold fs-4 text-muted">Select the option of Meta trader 4</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Dropzone-->
                        </div>
                    </div>
                </div>
                <!--end::Input group-->
                <div class="fv-row mb-10">
                    <h4 class="py-3">Select the history you want to analyse</h4>
                    <!--End::Label-->
                    <!--begin::Row-->
                    <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                        <!--begin::Col-->
                        <div class="col-md-4 col-12">
                            <!--begin::Option-->
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                <!--begin::Radio-->
                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                    <input class="form-check-input" type="radio" name="campaign_gender" value="1" checked="checked" />
                                </span>
                                <!--end::Radio-->
                                <!--begin::Info-->
                                <span class="ms-5">
                                    <span class="fs-4 fw-bold text-gray-800 d-block">All Account History</span>
                                </span>
                                <!--end::Info-->
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 col-12">
                            <!--begin::Option-->
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                <!--begin::Radio-->
                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                    <input class="form-check-input" type="radio" name="campaign_gender" value="2" />
                                </span>
                                <!--end::Radio-->
                                <!--begin::Info-->
                                <span class="ms-5">
                                    <span class="fs-4 fw-bold text-gray-800 d-block">Last week</span>
                                </span>
                                <!--end::Info-->
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 col-12">
                            <!--begin::Option-->
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                <!--begin::Radio-->
                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                    <input class="form-check-input" type="radio" name="campaign_gender" value="3" />
                                </span>
                                <!--end::Radio-->
                                <!--begin::Info-->
                                <span class="ms-5">
                                    <span class="fs-4 fw-bold text-gray-800 d-block">Last month</span>
                                </span>
                                <!--end::Info-->
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4 col-12">
                            <!--begin::Option-->
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                <!--begin::Radio-->
                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                    <input class="form-check-input" type="radio" name="campaign_gender" value="3" />
                                </span>
                                <!--end::Radio-->
                                <!--begin::Info-->
                                <span class="ms-5">
                                    <span class="fs-4 fw-bold text-gray-800 d-block">Last year</span>
                                </span>
                                <!--end::Info-->
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Input group-->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!--begin::Sign-in Method-->
                <div class="card mb-5 mb-xl-7">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#my_account">
                        <div class="card-title m-0">
                            <h2 class="fw-bold m-0 ">Welcome to thepipcollective trader toolbox</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Content-->
                    <div id="my_account" class="collapse show">
                        <!--begin::Card body-->
                        <div class="card-body border-top">
                            <div class="d-flex flex-column gap-4">
                                <div>
                                    <iframe src="https://player.vimeo.com/video/456269546?h=0ed43adde6&color=ffffff&title=0&byline=0&portrait=0" class="vimeo_video" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Sign-in Method-->
            </div>
        </div>
    </div>
    <!--end::Body-->
</div>
@endsection