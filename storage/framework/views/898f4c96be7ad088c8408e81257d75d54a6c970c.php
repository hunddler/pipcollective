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
            <th scope="col" class="mb-none admin-table"><?php echo e($titleColumnName); ?></th>
            <th scope="col" class="admin-table">Instructions File</th>
            <th scope="col" class="admin-table">Video URL</th>
            <th scope="col" class="admin-table">Action</th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600" id="myTable">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="card-body border-top">
            <td data-label="Select" class="mb-none" data-label="Select">
                <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input checkbox" type="checkbox" value="<?php echo e($item->id); ?>" />
                </div>
            </td>


            <td data-label="Name" class="mb-none"><?php echo e($item->title); ?></td>
            <td data-label="Parking Space"><?php echo e($item->file_name); ?> <a href="<?php echo e(url('download-file/'.$item->file_type)); ?>"><i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500 admin-icon"></i></a></td>
            <td data-label="Type"><?php echo e($item->video_link); ?> </td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-center">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px me-5" onclick="<?php echo e($editFunction); ?>(<?php echo e($item->id); ?>, '<?php echo e($item->title); ?>', '<?php echo e($item->video_link); ?>', '<?php echo e($item->file_name); ?>', '<?php echo e($item->file_type); ?>')" data-bs-toggle="modal" data-bs-target="#<?php echo e($editModalId); ?>">
                            <i class="ki-outline ki-pencil fs-3"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px" onclick="<?php echo e($deleteFunction); ?>(<?php echo e($item->id); ?>)" data-bs-toggle="modal" data-bs-target="#<?php echo e($deleteModalId); ?>">
                            <i class="ki-outline ki-trash fs-3"></i>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\pipcollective\resources\views/components/customer-table.blade.php ENDPATH**/ ?>