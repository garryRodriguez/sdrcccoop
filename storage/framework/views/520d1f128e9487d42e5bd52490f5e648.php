<?php $__env->startSection('title', 'Add Payment'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container bg-white shadow p-2">
        <div class="h2 text-center">
            Add Payment
        </div>
        
        

        <form action="<?php echo e(route('member.postpayment'), false); ?>" method="post" class="w-50 mx-auto p-2 mb-3">
            <?php echo csrf_field(); ?>
            <p class=" text-danger p-0 m-0">Loan ID : <?php echo e($loan_id_to_pay, false); ?> | Member ID: <?php echo e($loan->member_id, false); ?></p>
            <div class="mb-2">
                <input type="number" name="loan_id" id="loan-id" value="<?php echo e($loan_id_to_pay, false); ?>" class="form-control mb-2" hidden>
                <input type="number" name="member_id" id="member-id" value="<?php echo e($loan->member_id, false); ?>" class="form-control mb-2" hidden>
                <input type="number" name="principal_amount" id="principal-amount" class="form-control mb-2" step="0.01" placeholder="Principal">
                <input type="date" name="date_of_payment" id="date-of-payment" class="form-control mb-2">
                <input type="number" name="interest_payment" id="interest-payment" class="form-control mb-2" step="0.01" placeholder="Interest">
                <input type="number" name="total_payment_paid" id="total-payment-paid" class="form-control mb-2" step="0.01" placeholder="Total Payment">
            </div>

            <button type="submit" class="btn btn-success">Save Payment</button>
        </form>
        <div style="height: 300px; overflow: scroll">
            <table class="table text-center">
                <thead>
                    <th>Principal Amount</th>
                    <th>Interest Amount</th>
                    <th>Total Payment</th>
                    <th>Date Of Payment</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $loan_payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($p->principal_amount, false); ?></td>
                        <td><?php echo e($p->interest_payment, false); ?></td>
                        <td><?php echo e($p->total_amount_paid, false); ?></td>
                        <td><?php echo e($p->date_of_payment, false); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u152326917/domains/sdrcoop.com/public_html/resources/views/members/loans/post-payment-by-id.blade.php ENDPATH**/ ?>