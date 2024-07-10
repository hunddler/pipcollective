@php
$var_page = 'Setfiles';
@endphp

@extends('componant.main-layout')
<title>Setfiles</title>
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
                                <h2>Setfiles</h2>
                            </div>
                            <div>
                                <p>short description goes here</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center gap-3">
                            <div>
                                <input type="text" placeholder="Search..." class="form-control input-sm" name="">
                            </div>
                            <div>
                                
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
        Add New</button>
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
                        style="border: 1px solid white; margin-left: 12px;"
                        type="checkbox"
                        data-kt-check="true"
                        data-kt-check-target="#kt_customers_table .form-check-input"
                        value="1"
                    />
                </div>
            </th>
            <th scope="col" class="mb-none admin-table"> Tittle</th>
            <th scope="col" class="admin-table">File</th>
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
            <td data-label="Name" class="mb-none">Forex Pairs</td>
            <td data-label="Parking Space">Lot Size Settings <a href="#"><i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500 admin-icon"></i></a></td>
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
            <td data-label="Name" class="mb-none">Forex Pairs</td>
            <td data-label="Parking Space">Lot Size Settings <a href="#"><i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500 admin-icon"></i></a></td>
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
            <td data-label="Name" class="mb-none">Forex Pairs</td>
            <td data-label="Parking Space">Lot Size Settings <a href="#"><i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500 admin-icon"></i></a></td>
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
            <td data-label="Name" class="mb-none">Forex Pairs</td>
            <td data-label="Parking Space">Lot Size Settings <a href="#"><i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500 admin-icon"></i></a></td>
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
            <td data-label="Name" class="mb-none">Forex Pairs</td>
            <td data-label="Parking Space">Lot Size Settings <a href="#"><i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500 admin-icon"></i></a></td>
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

    <div class="d-flex flex-stack flex-wrap pt-10">
        <!--begin::Pages-->
    <ul class="pagination">
        <li class="page-item previous">
            <a href="#" class="page-link">
                <i class="previous"></i>
            </a>
        </li>
        <li class="page-item active">
            <a href="#" class="page-link">1</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">2</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">3</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">4</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">5</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">6</a>
        </li>
        <li class="page-item next">
            <a href="#" class="page-link">
                <i class="next"></i>
            </a>
        </li>
    </ul>
    <!--end::Pages-->
    <div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of 50 entries</div>
    
</div>
    <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar"></div>


                </div>
                <!--end::Card body-->
        </div>
        <!--end::Sign-in Method-->

    </div>
    <!--end::Body-->
</div>
@endsection