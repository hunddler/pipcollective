
<title>User Guide</title>
<?php $__env->startSection('content'); ?>


        <!--begin::Sign-in Method-->
     
        <!--end::Sign-in Method-->

        <!--begin::Sign-in Method-->
        <div class="card-body pt-0">
            <div class="row mb-4">
                <div class="col-md-4 mb-sm-4 col-12 align-items-center d-flex align-items-center position-relative">
                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                    <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-100 ps-12" placeholder="Search.." />
                </div>
                <div class="col-md-4 mb-sm-4 col-6 my-1">
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Type of Car Park" data-kt-ecommerce-order-filter="status">
                        <option></option>
                        <option value="all">All</option>
                        <option value="Cancelled">Residential</option>
                        <option value="Completed">Commercial</option>
                    </select>
                    <!--end::Select2-->
                </div>
                <div class="col-md-2 mb-sm-4 col-6 my-1">
                    <button type="button" class="btn btn-light-primary me-3 btn-block w-100" id="export"><i class="ki-outline ki-exit-up fs-2"></i>Export</button>
                </div>
            </div>

           <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5 custom-table" id="kt_customers_table">
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
                        <th scope="col" class="mb-none">Name</th>
                        <th scope="col">Parking Space</th>
                        <th scope="col">Type</th>
                        <th scope="col">Google Location</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    <tr>
                        <td data-label="Select" class="mb-none" data-label="Select">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td data-label="Name" class="mb-none">Home Property</td>
                        <td data-label="Parking Space">100</td>
                        <td data-label="Type">Commercial</td>
                        <td data-label="Location">Lahore, Punjab</td>
                        <td data-label="Status" class="text-success">Active</td>
                        <td data-label="Action">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                            <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">Disabled</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Select" class="mb-none" data-label="Select">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td data-label="Name" class="mb-none">Home Property</td>
                        <td data-label="Parking Space">100</td>
                        <td data-label="Type">Commercial</td>
                        <td data-label="Location">Lahore, Punjab</td>
                        <td data-label="Status" class="text-success">Active</td>
                        <td data-label="Action">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                            <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">Disabled</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Select" class="mb-none" data-label="Select">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td data-label="Name" class="mb-none">Home Property</td>
                        <td data-label="Parking Space">100</td>
                        <td data-label="Type">Commercial</td>
                        <td data-label="Location">Lahore, Punjab</td>
                        <td data-label="Status" class="text-success">Active</td>
                        <td data-label="Action">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                            <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">Disabled</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>

                    <tr>
                        <td data-label="Select" class="mb-none" data-label="Select">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td data-label="Name" class="mb-none">Home Property</td>
                        <td data-label="Parking Space">100</td>
                        <td data-label="Type">Commercial</td>
                        <td data-label="Location">Lahore, Punjab</td>
                        <td data-label="Status" class="text-success">Active</td>
                        <td data-label="Action">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                            <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">Disabled</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>

                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Sign-in Method-->

   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('componants.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pipcollective\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>