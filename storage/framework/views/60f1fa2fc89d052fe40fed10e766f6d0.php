<?php $__env->startSection('title', 'Homepage'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <?php if(Auth::user()->role_id  == 1): ?>
                    <div class="card w-75 mb-3 text-center">
                        <div class="card-body">
                        <h5 class="card-title">Welcome admin, <span class="fw-bold"><?php echo e(Auth::user()->name); ?></span></h5>
                        <p class="card-text">You have successfully login!</p>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="card w-75 mb-3 text-center">
                        <div class="card-body">
                        <h5 class="card-title">Welcome to our portal, you have successfully registered in our system.</h5>
                        <p class="card-text">Our staff will reach out to you shortly.</p>
                        <p class="card-text">Thank you for registering!</p>
                        <a href="#" class="btn btn-dark">Login with your account</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrcc\sdrccoop-final\sdrccoop-app_original\resources\views/landing-page.blade.php ENDPATH**/ ?>