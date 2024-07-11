<div class="row mb-5 mb-xl-8 g- g-xl-8">
    <!--begin::Col-->
    <?php if(auth::user()->role == 'admin'): ?>
    <div class="col-12">
        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="<?php echo e(url('admin/user-guide')); ?>">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                     <i class="ki-outline ki-document fs-2x ms-n1 text-gray-500 primary-text"></i>
                    <span class="fs-4 fw-bold  <?php if(url()->current() == url('admin/user-guide')): ?> primary-text <?php endif; ?>">User Guide</span>
                </div>
            </div>
            <div>
                <?php if(url()->current() == url('admin/user-guide')): ?> <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> <?php endif; ?>
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="<?php echo e(url('admin/courses')); ?>">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-file fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold <?php if(url()->current() == url('admin/courses')): ?> primary-text <?php endif; ?> ">Courses</span>
                </div>
            </div>
            <div>
                <?php if(url()->current() == url('admin/courses')): ?> <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> <?php endif; ?>

            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="<?php echo e(url('admin/inputs')); ?>">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold <?php if(url()->current() == url('admin/inputs')): ?> primary-text <?php endif; ?> ">Inputs</span>
                </div>
            </div>
            <div>
                <?php if(url()->current() == url('admin/inputs')): ?> <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> <?php endif; ?>
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="<?php echo e(url('admin/setfiles')); ?>">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-receipt-square fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold <?php if(url()->current() == url('admin/setfiles')): ?> primary-text <?php endif; ?> ">Setfiles</span>
                </div>
            </div>
            <div>
                <?php if(url()->current() == url('admin/setfiles')): ?> <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> <?php endif; ?>
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="<?php echo e(url('admin/faqs')); ?>">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-message-question fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold <?php if(url()->current() == url('admin/faqs')): ?> primary-text <?php endif; ?>">FAQs</span>
                </div>
            </div>
            <div>
                <?php if(url()->current() == url('admin/faqs')): ?> <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> <?php endif; ?>
            </div>
        </a>
        <!--end::Card-->
    </div>
    <?php endif; ?>

    <?php if(auth::user()->role == 'users'): ?>
    <div class="col-12">
        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="<?php echo e(url('user/user-guide')); ?>">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                     <i class="ki-outline ki-document fs-2x ms-n1 text-gray-500 primary-text"></i>
                    <span class="fs-4 fw-bold  <?php if(url()->current() == url('user/user-guide')): ?> primary-text <?php endif; ?>">User Guide</span>
                </div>
            </div>
            <div>
                <?php if(url()->current() == url('user/user-guide')): ?> <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> <?php endif; ?>
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="<?php echo e(url('user/courses')); ?>">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-file fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold <?php if(url()->current() == url('user/courses')): ?> primary-text <?php endif; ?> ">Courses</span>
                </div>
            </div>
            <div>
                <?php if(url()->current() == url('user/courses')): ?> <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> <?php endif; ?>

            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="<?php echo e(url('user/inputs')); ?>">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold <?php if(url()->current() == url('user/inputs')): ?> primary-text <?php endif; ?> ">Inputs</span>
                </div>
            </div>
            <div>
                <?php if(url()->current() == url('user/inputs')): ?> <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> <?php endif; ?>
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="<?php echo e(url('user/setfiles')); ?>">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-receipt-square fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold <?php if(url()->current() == url('user/setfiles')): ?> primary-text <?php endif; ?> ">Setfiles</span>
                </div>
            </div>
            <div>
                <?php if(url()->current() == url('user/setfiles')): ?> <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> <?php endif; ?>
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="<?php echo e(url('user/faqs')); ?>">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-message-question fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold <?php if(url()->current() == url('user/faqs')): ?> primary-text <?php endif; ?>">FAQs</span>
                </div>
            </div>
            <div>
                <?php if(url()->current() == url('user/faqs')): ?> <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> <?php endif; ?>
            </div>
        </a>
        <!--end::Card-->
    </div>
    <?php endif; ?>
    <!--end::Col-->
</div><?php /**PATH C:\xampp\htdocs\pipcollective\resources\views/componant/sidebar.blade.php ENDPATH**/ ?>