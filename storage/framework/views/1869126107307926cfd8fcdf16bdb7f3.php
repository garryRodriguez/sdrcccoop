

<?php $__env->startSection('title', 'Loan Sub Menus'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center my-2 rounded mt-5 p-5">
            <div class="col p-5">
                <a href="<?php echo e(route('home'), false); ?>" class="btn p-5 fs-3" style="background-color: #343a40; color: #ffffff">Apply Loan</a>
            </div>
            <div class="col p-5">
                <a href="#" class="btn p-5 fs-3" style="background-color: #343a40; color: #ffffff">Apply Renewal</a>
            </div>
            <div class="col p-5">
                <a href="#" class="btn p-5 fs-3" style="background-color: #343a40; color: #ffffff">Loan History</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrccoop\public_html_final\sdrcccoop\resources\views/members/loans/loan-sub-menus.blade.php ENDPATH**/ ?>