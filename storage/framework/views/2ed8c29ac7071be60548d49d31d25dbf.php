

<?php $__env->startSection('title', 'Loan Sub Menus'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center my-2 bg-white rounded mt-5 p-5">
            <div class="col-sm-4 p-5">
                <a href="<?php echo e(route('home'), false); ?>" class="btn btn-outline-success p-5 w-100 fs-3">Apply Loan</a>
            </div>
            <div class="col-sm-4 p-5">
                <a href="#" class="btn btn-outline-success p-5 w-100 fs-3">Apply Renewal</a>
            </div>
            <div class="col-sm-4 p-5">
                <a href="#" class="btn btn-outline-success p-5 w-100 fs-3">View Loan History</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u152326917/domains/sdrcoop.com/public_html/resources/views/members/loans/loan-sub-menus.blade.php ENDPATH**/ ?>