@php
$var_page = 'FAQs';
$var_tab = 'Education';
@endphp

@extends('componant.main-layout')
<title>FAQs</title>
@section('content')

<div class="card mb-5 mb-xl-8">
    <div class="card-body py-lg-8 py-sm-0 mb-4">
        <!--begin::Sign-in Method-->
        <div class="card mb-5 mb-xl-7">
            <!--begin::Card body-->
            <div class="card-body border-top">
                <div class="d-md-flex d-sm-flex flex-md-row flex-sm-column align-items-center justify-content-between align-items-start">
                    <div class="d-flex flex-column">
                        <div>
                            <h2>FAQ's</h2>
                        </div>
                        <div>
                            <p>short description goes here</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center gap-4">
                        <div>
                            <input type="text" placeholder="Search..." class="form-control form-control-solid p-3 input-sm" name="">
                        </div>
                        <div>
                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#add-category">
                            Categories</button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-input">
                            Add FAQ's</button>
                        </div>
                    </div>
                </div>


                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5 custom-table admin-table" id="kt_customers_table">
                    <thead>
                        <tr class="text-start text-gray-500 mb-none fw-bold fs-7 text-uppercase gs-0">
                            <th scope="col" class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        data-kt-check="true"
                                        data-kt-check-target="#kt_customers_table .form-check-input"
                                        value="1"
                                    />
                                </div>
                            </th>
                            <th scope="col" class="mb-none admin-table"> Tittle</th>
                            <th scope="col" class="admin-table">Category</th>
                            <th scope="col" class="admin-table">Action</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        <tr class="card-body border-top">
                            <td data-label="Select" class="mb-none" data-label="Select">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <td data-label="Name" class="mb-none">EA License API Key</td>
                            <td data-label="Parking Space">Lot Size Settings</td>
                            <td data-label="Status" class="text-success">
                                <div class="action-icon">
                                    <div class="d-flex  align-items-center">
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                            <i class="ki-outline ki-pencil fs-3"></i>
                                        </button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                                            <i class="ki-outline ki-trash fs-3"></i>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="card-body border-top">
                            <td data-label="Select" class="mb-none" data-label="Select">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <td data-label="Name" class="mb-none">EA License API Key</td>
                            <td data-label="Parking Space">Lot Size Settings</td>
                            <td data-label="Status" class="text-success">
                                <div class="action-icon">
                                    <div class="d-flex  align-items-center">
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                            <i class="ki-outline ki-pencil fs-3"></i>
                                        </button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                                            <i class="ki-outline ki-trash fs-3"></i>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="card-body border-top">
                            <td data-label="Select" class="mb-none" data-label="Select">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <td data-label="Name" class="mb-none">EA License API Key</td>
                            <td data-label="Parking Space">Lot Size Settings</td>
                            <td data-label="Status" class="text-success">
                                <div class="action-icon">
                                    <div class="d-flex  align-items-center">
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                            <i class="ki-outline ki-pencil fs-3"></i>
                                        </button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                                            <i class="ki-outline ki-trash fs-3"></i>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="card-body border-top">
                            <td data-label="Select" class="mb-none" data-label="Select">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <td data-label="Name" class="mb-none">EA License API Key</td>
                            <td data-label="Parking Space">Lot Size Settings</td>
                            <td data-label="Status" class="text-success">
                                <div class="action-icon">
                                    <div class="d-flex  align-items-center">
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                            <i class="ki-outline ki-pencil fs-3"></i>
                                        </button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                                            <i class="ki-outline ki-trash fs-3"></i>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="card-body border-top">
                            <td data-label="Select" class="mb-none" data-label="Select">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <td data-label="Name" class="mb-none">EA License API Key</td>
                            <td data-label="Parking Space">Lot Size Settings</td>
                            <td data-label="Status" class="text-success">
                                <div class="action-icon">
                                    <div class="d-flex  align-items-center">
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                            <i class="ki-outline ki-pencil fs-3"></i>
                                        </button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                                            <i class="ki-outline ki-trash fs-3"></i>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="card-body border-top">
                            <td data-label="Select" class="mb-none" data-label="Select">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <td data-label="Name" class="mb-none">EA License API Key</td>
                            <td data-label="Parking Space">Lot Size Settings</td>
                            <td data-label="Status" class="text-success">
                                <div class="action-icon">
                                    <div class="d-flex  align-items-center">
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                            <i class="ki-outline ki-pencil fs-3"></i>
                                        </button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                                            <i class="ki-outline ki-trash fs-3"></i>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end::Table-->

            </div>
        </div>
    </div>
</div>




<div class="modal fade " id="add-category" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <!--begin::Modal content-->
        <div class="my_model modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <div class="my-custom-header">
                    <h2 class="fw-bold">Categories</h2>
                    <p>You can add or search for the category</p>
                </div>

                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>

                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body ">
                <!--begin::Form-->
                <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y px-3">
                        <div class="fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-12 mb-5">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Title" name="first_name" class="form-control form-control-solid">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="link" placeholder="Video URL" name="first_name" class="form-control form-control-solid">
                                    </div>
                                </div>

                                <div class="col-md-12 mb-5">
                                    <button type="submit" class="btn mt-5 btn-block w-100 save-btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">Save</span>
                                        <span class="indicator-progress">Please wait... 
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>

                                <div class="row mb-3 mt-3">
                                    <div class="col-md-12">
                                        <h3>All Category</h3>
                                    </div>
                                </div>

                                <div class="mh-300px scroll-y me-n7 pe-7">
                                    <!--begin::Category-->
                                    <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                        <div class="d-flex align-items-center">
                                            <!--begin::Details-->
                                            <div>
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">
                                                    Category Name
                                                </a>
                                                <div class="fw-semibold text-muted">20 Inputs</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--begin::Menu-->
                                        <div class="min-w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                <option></option>
                                                <option value="1">Edit</option>
                                                <option value="2">Delete</option>
                                            </select>
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Category-->

                                </div>
                            </div>
                        </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>




<div class="modal fade " id="add-input" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="my_model modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <div class="my-custom-header">
                    <h2 class="fw-bold">Create Input</h2>
                    <p>Choose the relavant category and add Q&A</p>
                </div>

                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>

                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body ">
                <!--begin::Form-->
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y px-3">
                        <div class="fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-12 mb-5">
                                    <!--begin::Password-->
                                    <div class="form-group choose-slot">
                                        <select class="form-control selectpicker" aria-label="Default select example" data-live-search="true">
                                            <option value="">Choose Category</option>
                                            <option value="1">Category name</option>
                                            <option value="2">Category name</option>
                                            <option value="3">Category <noframes></noframes></option>
                                        </select>
                                    </div>
                                    <!--end::Password-->
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="link" placeholder="Question" name="question" class="form-control form-control-solid">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control form-control-solid" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="link" placeholder="Video URL (optional)" name="question" class="form-control form-control-solid">
                                    </div>
                                </div>


                                <div class="col-md-12 mb-5">
                                    <button type="submit" class="btn mt-5 btn-block w-100 save-btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">Save</span>
                                        <span class="indicator-progress">Please wait... 
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>

                                <div class="row mb-3 mt-3">
                                    <div class="col-md-12">
                                        <h3>All Category</h3>
                                    </div>
                                </div>

                                <div class="mh-300px scroll-y me-n7 pe-7">
                                    <!--begin::Category-->
                                    <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                        <div class="d-flex align-items-center">
                                            <!--begin::Details-->
                                            <div>
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">
                                                    Category Name
                                                </a>
                                                <div class="fw-semibold text-muted">20 Inputs</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--begin::Menu-->
                                        <div class="min-w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                <option></option>
                                                <option value="1">Edit</option>
                                                <option value="2">Delete</option>
                                            </select>
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Category-->

                                </div>
                            </div>
                        </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
@endsection