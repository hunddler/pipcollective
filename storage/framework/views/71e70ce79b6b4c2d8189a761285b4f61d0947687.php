<?php
$var_page = 'User-Guide';
?>


<title>User Guide</title>
<?php $__env->startSection('content'); ?>
<div class="card mb-5 mb-xl-8">
    <div class="card-body py-lg-8 py-sm-0 mb-4">
        <!--begin::Sign-in Method-->

        <!--end::Sign-in Method-->

        <!--begin::Sign-in Method-->
        <?php if(count($userguide) > 0): ?>
        <?php $__currentLoopData = $userguide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-5 mb-xl-7">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#calculators">
                <div class="card-title m-0">
                    <h2 class="fw-bold m-0"><?php echo e($guide->title); ?></h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Content-->
            <div id="calculators" class="collapse show">
                <!--begin::Card body-->
                <div class="card-body border-top">
                    <div class="d-flex flex-column gap-4">
                        <div>
                            <iframe src="<?php echo e($guide->video_link); ?>" class="vimeo_video" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="d-md-flex flex-md-row flex-sm-column align-items-md-center justify-content-md-between">
                            <div>
                                <h3 class="primary-text">Download PDF Instructions</h3>
                            </div>
                            <div>
                                <button class="btn btn-primary">Download</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Content-->
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <!--end::Sign-in Method-->

    </div>
    <!--end::Body-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('componant.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pipcollective\resources\views/users/userguide.blade.php ENDPATH**/ ?>