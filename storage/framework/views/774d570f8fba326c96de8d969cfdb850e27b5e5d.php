<?php
$var_page = 'Accounts';
$var_tab = 'General';
?>


<title>Accounts</title>
<?php $__env->startSection('content'); ?>
<div class="card mb-5 mb-xl-8">
    <div class="card-body py-lg-8 py-sm-0 mb-4">
        <!--begin::Sign-in Method-->
        <div class="card mb-5 mb-xl-7">
            <!--begin::Card body-->
                <div class="card-body">
                    <div class="d-md-flex d-sm-flex flex-md-row flex-sm-column align-items-center justify-content-between align-items-start">
                        <div class="d-flex flex-column">
                            <div>
                                <h2>Accounts</h2>
                            </div>
                            <div>
                                <p>Short description goes here</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center gap-3">
                            <div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                Add New</button>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-4 mb-sm-4 col-12 align-items-center d-flex align-items-center position-relative">
                            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                            <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-100 ps-12  p-3" placeholder="Search..." />
                        </div>
                        <div class="col-md-4 mb-sm-4 col-6 my-1">
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Account Status" data-kt-ecommerce-order-filter="status">
                                <option></option>
                                <option value="all">All</option>
                                <option value="Cancelled">Active</option>
                                <option value="Completed">Disabled</option>
                            </select>
                            <!--end::Select2-->
                        </div>
                        <div class="col-md-2 mb-sm-4 col-6 my-1">
                            <button type="button" class="btn btn-light-secondary me-3 btn-block w-100" id="export"><i class="ki-outline ki-exit-up fs-2"></i>Export</button>
                        </div>
                    </div>

                    <!--begin::Table-->
                    <table class="table align-middle fs-6 gy-5 custom-table admin-table accounts-table" id="kt_customers_table">
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
                                <th scope="col" class="mb-none admin-table"> User</th>
                                <th scope="col" class="admin-table">User ID</th>
                                <th scope="col" class="admin-table">Email Address</th>
                                <th scope="col" class="admin-table">License Key</th>
                                <th scope="col" class="admin-table">Status</th>
                                <th scope="col" class="admin-table">Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            <tr class="">
                                <td data-label="Select" class="mb-none" data-label="Select">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td data-label="Name" class="mb-none">View Account</td>
                                <td data-label="Parking Space">1234</td>
                                <td data-label="Parking Space">exo@gmail.com</td>
                                <td data-label="Parking Space">WEF45345T2ERGX</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Active 
                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" data-popper-placement="bottom-end" >
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="apps/customers/view.html" class="menu-link px-3">Active</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Disable</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <td data-label="Status" class="text-success">
                                    <div class="action-icon">
                                        <div class="d-flex  align-items-center">
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
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
                            <tr class="">
                                <td data-label="Select" class="mb-none" data-label="Select">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td data-label="Name" class="mb-none">View Account</td>
                                <td data-label="Parking Space">1234</td>
                                <td data-label="Parking Space">exo@gmail.com</td>
                                <td data-label="Parking Space">WEF45345T2ERGX</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Active 
                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" data-popper-placement="bottom-end" >
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="apps/customers/view.html" class="menu-link px-3">Active</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Disable</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <td data-label="Status" class="text-success">
                                    <div class="action-icon">
                                        <div class="d-flex  align-items-center">
                                            <!--begin::Button-->
                                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
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
                </div>
                <!--end::Card body-->
        </div>
        <!--end::Sign-in Method-->

    </div>
    <!--end::Body-->
</div>


<!-- Create User -->

<div class="modal fade " id="kt_modal_add_user" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <!--begin::Modal content-->
        <div class="my_model modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <div class="my-custom-header">
                    <h2 class="fw-bold">Add User</h2>
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
                                        <label class="label-control mb-2">Full Name*</label>
                                        <input type="text" name="first_name" class="form-control form-control-solid mb-3 mb-lg-0">
                                    </div>
                                </div>

                                <div class="col-md-12 mb-5">
                                    <div class="form-group">
                                        <label class="label-control mb-2">Email Address*</label>
                                        <input type="email" name="first_name" class="form-control form-control-solid mb-3 mb-lg-0">
                                    </div>
                                </div>

                                <div class="col-md-12 mb-5">
                                    <div class="form-group">
                                        <label class="label-control mb-2">Password*</label>
                                        <input type="email" name="first_name" class="form-control form-control-solid mb-3 mb-lg-0">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn mt-5 btn-block w-100 save-btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">Save</span>
                                        <span class="indicator-progress">Please wait... 
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
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


<script type="text/javascript">
    document.getElementById("export").addEventListener("click", () => {
        let table2excel = new Table2Excel();
        table2excel.export(document.querySelector("#kt_customers_table"));
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('componant.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pipcollective\resources\views/admin/accounts.blade.php ENDPATH**/ ?>