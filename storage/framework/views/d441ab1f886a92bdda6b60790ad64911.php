<?php $__env->startSection('title', 'Add Payment By Loan ID'); ?>

<?php $__env->startSection('content'); ?>
    <h3>Select which loan to pay</h3>
        <?php $__currentLoopData = $member_loan_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $members_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <a href="<?php echo e(route('member.viewPaymentById', $members_id->loan_id), false); ?>">Loan Id: <?php echo e($members_id->loan_id, false); ?> </a><br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u152326917/domains/sdrcoop.com/public_html/resources/views/members/loans/add-payment-by-loan-id.blade.php ENDPATH**/ ?>