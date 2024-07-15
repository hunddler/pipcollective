<?php
$var_page = 'Setfiles';
$var_tab = 'Education';
?>


<title>Setfiles</title>
<?php $__env->startSection('content'); ?>

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
                                <input type="text" id="myInput" placeholder="Search..." class="form-control p-3 form-control-solid input-sm" name="">
                            </div>

                            <div class="d-flex justify-content-end align-items-center d-none" id="delete-selected-toolbar" data-kt-customer-table-toolbar="selected">
                                <button type="button" class="btn btn-danger" onclick="deletebulksetfile();" data-bs-toggle="modal" data-bs-target="#delete-setfile-bulk">Delete Selected</button>
                            </div>
                            <div>
                                
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-setfile">
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
                        <tbody class="fw-semibold text-gray-600" id="myTable">
                            <?php if(count($Setfile) > 0): ?>
                            <?php $__currentLoopData = $Setfile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="card-body border-top">
                                <td data-label="Select" class="mb-none" data-label="Select">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input checkbox" type="checkbox" value="<?php echo e($file->id); ?>" />
                                    </div>
                                </td>

                                <td data-label="Name" class="mb-none"><?php echo e($file->title); ?></td>
                                <td data-label="Parking Space"><?php echo e($file->file_name); ?> <a href="<?php echo e(url('download-file/'.$file->file_type)); ?>"><i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500 admin-icon"></i></a></td>
                                <td data-label="Status" class="text-success">
                                    <div class="action-icon">
                                        <div class="d-flex  align-items-center">
                                            <!--begin::Button-->
                                            <button type="button" onclick="editsetfile(<?php echo e($file->id); ?>,'<?php echo e($file->title); ?>','<?php echo e($file->file_name); ?>','<?php echo e($file->file_type); ?>')" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#edit-setfile">
                                                <i class="ki-outline ki-pencil fs-3"></i>
                                            </button>
                                            <!--end::Button-->
                                            <!--begin::Button-->
                                            <button type="button" onclick="deletesetfile(<?php echo e($file->id); ?>)" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="modal" data-bs-target="#delete-setfile" id="kt_users_delete_two_step">
                                                <i class="ki-outline ki-trash fs-3"></i>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                        </tbody>
                    </table>
                    <!--end::Table-->

                    <div class="d-flex flex-stack flex-wrap pt-10">
                         <!--begin::Pages-->
                        <ul class="pagination">
                            <?php echo e($Setfile->links( "pagination::bootstrap-4")); ?>

                        </ul>
                        <!--end::Pages-->
                        <div class="fs-6 fw-semibold text-gray-700">Showing <?php echo e($Setfile->count()); ?> of <?php echo e($Setfile->total()); ?> of <?php echo e($Setfile->total()); ?> entries</div>
                    </div>
                     <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar"></div>
                </div>
                <!--end::Card body-->
        </div>
        <!--end::Sign-in Method-->

    </div>
    <!--end::Body-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('componant.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pipcollective\resources\views/admin/setfiles.blade.php ENDPATH**/ ?>