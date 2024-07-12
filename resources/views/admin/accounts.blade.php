@php
$var_page = 'Accounts';
$var_tab = 'General';
@endphp

@extends('componant.main-layout')
<title>Accounts</title>
@section('content')


        <!--begin::Content wrapper-->

<div class="card mb-5 mb-xl-8">
    <div class="card-body py-lg-8 py-sm-0 mb-4">
        <!--begin::Sign-in Method-->
        <div class="card mb-5 mb-xl-7">
            <!--begin::Card body-->
                <div class="card-body border-top">
                    <div class="d-md-flex d-sm-flex flex-md-row flex-sm-column align-items-center justify-content-between align-items-start">
                        <div class="d-flex flex-column">
                            <div>
                                <h2>Accounts</h2>
                            </div>
                            <div>
                                <p>short description goes here</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center gap-3">
                            <div>
                                <!-- <button type="button" class="btn btn-primary categories-btn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_categories">
                                Categories</button> -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
        Add New</button>
                            </div>
                        </div>
                    </div>
               <div class="row">
                   <div class="main-outer">
                       <div class="d-flex align-items-center position-relative my-1">
        
        <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-m w-350px ps-9" placeholder="Type email....">
        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-3"></i>
        
    </div>
<div class="me-4 my-1" data-select2-id="select2-data-135-zpnm">
        <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm select2-hidden-accessible" data-select2-id="select2-data-kt_filter_orders" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
            <option value="All" selected="selected" data-select2-id="select2-data-28-kgj3">All Orders</option>
            <option value="Approved" data-select2-id="select2-data-139-8q0n">Approved</option>
            <option value="Declined" data-select2-id="select2-data-140-yifh">Declined</option>
            <option value="In Progress" data-select2-id="select2-data-141-ebau">In Progress</option>
            <option value="In Transit" data-select2-id="select2-data-142-p5sz">In Transit</option>
        </select><span class="select2 select2-container select2-container--bootstrap5 select2-container--above" dir="ltr" data-select2-id="select2-data-27-rkwe" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single w-125px form-select form-select-solid form-select-sm" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kt_filter_orders-container" aria-controls="select2-kt_filter_orders-container"><span class="select2-selection__rendered" id="select2-kt_filter_orders-container" role="textbox" aria-readonly="true" title="All Orders">All Orders</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </div>
    <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
        <i class="ki-outline ki-exit-up fs-2"></i>Export</button>
                   </div>
               </div>

                    <!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5 custom-table admin-table accounts-table" id="kt_customers_table">
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
            <th scope="col" class="mb-none admin-table"> User</th>
            <th scope="col" class="admin-table">User ID</th>
            <th scope="col" class="admin-table">Email Address</th>
            <th scope="col" class="admin-table">License Key</th>
            <th scope="col" class="admin-table">Status</th>
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
            <td data-label="Name" class="mb-none">View Account</td>
            <td data-label="Parking Space">1234</td>
            <td data-label="Parking Space">exo@gmail.com</td>
            <td data-label="Parking Space">WEF45345T2ERGX</td>
            <td class="">
                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 show" data-kt-menu="true" data-popper-placement="bottom-end" >
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="apps/customers/view.html" class="menu-link px-3">View</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-center">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                            <i class="ki-duotone ki-eye fs-1 categories-btn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_categories"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
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
            <td data-label="Name" class="mb-none">View Account</td>
            <td data-label="Parking Space">1234</td>
            <td data-label="Parking Space">exo@gmail.com</td>
            <td data-label="Parking Space">WEF45345T2ERGX</td>
            <td class="">
                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 show" data-kt-menu="true" data-popper-placement="bottom-end" >
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="apps/customers/view.html" class="menu-link px-3">View</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-center">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                            <i class="ki-duotone ki-eye fs-1 categories-btn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_categories"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
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
            <td data-label="Name" class="mb-none">View Account</td>
            <td data-label="Parking Space">1234</td>
            <td data-label="Parking Space">exo@gmail.com</td>
            <td data-label="Parking Space">WEF45345T2ERGX</td>
            <td class="">
                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 show" data-kt-menu="true" data-popper-placement="bottom-end" >
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="apps/customers/view.html" class="menu-link px-3">View</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-center">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                            <i class="ki-duotone ki-eye fs-1 categories-btn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_categories"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
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
            <td data-label="Name" class="mb-none">View Account</td>
            <td data-label="Parking Space">1234</td>
            <td data-label="Parking Space">exo@gmail.com</td>
            <td data-label="Parking Space">WEF45345T2ERGX</td>
            <td class="">
                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 show" data-kt-menu="true" data-popper-placement="bottom-end" >
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="apps/customers/view.html" class="menu-link px-3">View</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-center">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                            <i class="ki-duotone ki-eye fs-1 categories-btn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_categories"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
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
            <td data-label="Name" class="mb-none">View Account</td>
            <td data-label="Parking Space">1234</td>
            <td data-label="Parking Space">exo@gmail.com</td>
            <td data-label="Parking Space">WEF45345T2ERGX</td>
            <td class="">
                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 show" data-kt-menu="true" data-popper-placement="bottom-end" >
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="apps/customers/view.html" class="menu-link px-3">View</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-center">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                            <i class="ki-duotone ki-eye fs-1 categories-btn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_categories"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
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
            <td data-label="Name" class="mb-none">View Account</td>
            <td data-label="Parking Space">1234</td>
            <td data-label="Parking Space">exo@gmail.com</td>
            <td data-label="Parking Space">WEF45345T2ERGX</td>
            <td class="">
                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 show" data-kt-menu="true" data-popper-placement="bottom-end" >
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="apps/customers/view.html" class="menu-link px-3">View</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-center">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                            <i class="ki-duotone ki-eye fs-1 categories-btn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_categories"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
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
            <td data-label="Name" class="mb-none">View Account</td>
            <td data-label="Parking Space">1234</td>
            <td data-label="Parking Space">exo@gmail.com</td>
            <td data-label="Parking Space">WEF45345T2ERGX</td>
            <td class="">
                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4 show" data-kt-menu="true" data-popper-placement="bottom-end" >
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="apps/customers/view.html" class="menu-link px-3">View</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-center">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                            <i class="ki-duotone ki-eye fs-1 categories-btn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_categories"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
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



                </div>
                <!--end::Card body-->
        </div>
        <!--end::Sign-in Method-->

    </div>
    <!--end::Body-->
</div>


<!--end::Sign-in Method-->


@endsection