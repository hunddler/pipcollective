@php
$var_page = 'Upload EA';
$var_tab = 'General';
@endphp

@extends('componant.main-layout')
<title>Upload EA</title>
@section('content')


<div class="card mb-5 mb-xl-8">
    <div class="card-body py-lg-8 py-sm-0 mb-4">
        <!--begin::Sign-in Method-->
            <!--begin::Card body-->
                    <div class="d-md-flex d-sm-flex flex-md-row flex-sm-column align-items-center justify-content-between align-items-start">
                        <div class="d-flex flex-column">
                            <div>
                                <h2>Upload EA</h2>
                            </div>
                            <div>
                                <p>short description goes here</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center gap-3">
                            <div>
                            
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
        Upload EA</button>
                            </div>
                        </div>
                    </div>
               <div class="row">
                   <div class="main-outer">
                       <div class="col-md-12 col-12">
                <div class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-6 mb-4" href="faqs.html">
                    <div class=" align-items-center flex-row justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <i class="ki-outline ki-document fs-2x ms-n1 text-gray-500"></i>
                            <span class="fs-4 fw-bold ">Upload Expert Advisor File <br><p>Version 3.3</p></span>

                        </div>

                    </div>

                    <div>
                        <button class="btn btn-primary download-btn">Download SetFiles</button>
                    </div>
                </div>
            </div>
                </div>
                <!--end::Card body-->
        <!--end::Sign-in Method-->

    </div>
    <!--end::Body-->
<!--end::Tables Widget 5-->

</div>
<!--end::Col-->
</div>


@endsection