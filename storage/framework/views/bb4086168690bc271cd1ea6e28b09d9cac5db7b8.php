<title>Reset Password</title>
<?php $__env->startSection('content'); ?>
    <!--begin::Card-->
    <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-3 w-md-450px px-12 py-12">
        <!--begin::Wrapper-->
        <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Form-->
            <form class="form w-100"  method="POST"   id="kt_password_reset_form"  action="<?php echo e(route('password.email')); ?>">
                <?php echo csrf_field(); ?>
                <!--begin::Heading-->
                <div class=" mb-11">
                    <!--begin::Title-->
                    <h1 class="text-gray-900 fw-bolder mb-3">Forgot password ?</h1>
                    <!--end::Title-->
                    <!--begin::Subtitle-->
                    <div class="text-gray-500 fw-semibold fs-6">Enter your email address to get a reset link.</div>
                    <!--end::Subtitle=-->
                </div>

                <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                <!--begin::Heading-->
                <!--begin::Input group=-->
                <div class="fv-row mb-8">
                    <!--begin::Email-->
                    <div class="form-group">
                        <label class="lable-control mb-2">Email</label>
                        <input type="email" placeholder="example009@gmail.com" name="email" autocomplete="off" value="<?php echo e(old('email')); ?>" required class="form-control bg-transparent <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                    </div>

                                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <!--end::Email-->
                </div>
                <!--begin::Submit button-->
                <div class="d-grid">
                    <button type="submit" id="kt_password_reset_submit" class="btn btn-primary">
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Send Link</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait... 
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                </div>
                <!--end::Submit button-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Card-->


<?php $__env->stopSection(); ?>



<?php echo $__env->make('auth.auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pipcollective\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>