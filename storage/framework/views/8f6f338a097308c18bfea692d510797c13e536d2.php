<?php
$var_page = 'User Guide';
?>


<title>User Guide</title>
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
                                <h2>User Guide</h2>
                            </div>
                            <div>
                                <p>short description goes here</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center gap-3">
                            <div>
                                <input type="text" id="myInput" placeholder="Search..." class="form-control input-sm" name="">
                            </div>
                            <div>
                                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
        <i class="ki-outline ki-plus fs-2"></i>Add New</button> -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-guide">
        Add User</button>
                            </div>
                        </div>
                    </div>
                
                
                    <!--begin::Table-->
                    <?php if (isset($component)) { $__componentOriginalc6ba6500e6bfea952115c941efc7d1759239a6d5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CustomerTable::class, ['titleColumnName' => 'Title','data' => $userguide]); ?>
<?php $component->withName('customer-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6ba6500e6bfea952115c941efc7d1759239a6d5)): ?>
<?php $component = $__componentOriginalc6ba6500e6bfea952115c941efc7d1759239a6d5; ?>
<?php unset($__componentOriginalc6ba6500e6bfea952115c941efc7d1759239a6d5); ?>
<?php endif; ?>
                                         <!--end::Table-->

    <div class="d-flex flex-stack flex-wrap pt-10">
        <!--begin::Pages-->
    <ul class="pagination">
       
        <?php echo e($userguide->links( "pagination::bootstrap-4")); ?>

    
    </ul>
    <!--end::Pages-->
    <div class="fs-6 fw-semibold text-gray-700">Showing <?php echo e($userguide->count()); ?> of <?php echo e($userguide->total()); ?> of <?php echo e($userguide->total()); ?> entries</div>
    
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
<?php echo $__env->make('componant.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pipcollective\resources\views/admin/user-guide.blade.php ENDPATH**/ ?>