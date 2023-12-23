<?php $__env->startSection('title', 'Add Payment'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container bg-white shadow p-2">
        <div class="h2 text-center">
            Add Payment
        </div>

        <?php $__empty_1 = true; $__currentLoopData = $payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan_payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <table class="table table-sm table-hover align-middle bg-white border text-secondary w-75 mx-auto shadow">
                <tr class="text-align-start">
                    <td class="h5" colspan="5"><span class="fw-bold">Name:</span> <span class=""><?php echo e($loan_payment->first_name); ?> <?php echo e($loan_payment->last_name); ?></span></td>
                </tr>
                <tr class="text-align-start">
                    <td class="h5" colspan="5"><span class="fw-bold">Date Granted:</span> <span class=""><?php echo e($loan_payment->created_at->format('d-m-Y')); ?></span></td>
                </tr>
                <tr class="text-align-start">
                    <td class="h5" colspan="5"><span class="fw-bold">Maturity Date:</span> <span class=""><?php echo e($loan_payment->created_at->addDays(360)->format('d-m-Y')); ?></span> </td>
                </tr>
                <tr class="text-align-start">
                    <td class="h5" colspan="5"><span class="fw-bold">Member ID:</span><span class=""> 000<?php echo e($loan_payment->member_id); ?></span></td>
                </tr>
                <tr class="text-align-start" rowspan="5">
                    <td class="h5" colspan="3"><span class="fw-bold">Principal Amount:</span> <span class=""><?php echo e($loan_payment->approved_loan_amount); ?> + Interest: <?php echo e($loan_payment->interest); ?></span></td>
                    <td class="h5"><span class="fw-bold">Total Payable Amount:</span><span class=""> <?php echo e($loan_payment->approved_loan_amount + $loan_payment->interest); ?></span></td>
                    <td class="h5" colspan="1"><span class="fw-bold"><span class="">Current Balance:</span></span></td>
                </tr>
                <tr>
                    <td class="h5 text-start" colspan="5"><span class="fw-bold">Due Date:</span> <span class="text-danger">Every 5th & 20th of the Month</span> </td>
                </tr>
            </table>
            <div class="row mx-auto w-75">
                <div class="col">
                    <form action="<?php echo e(route('member.makepayment', $loan_payment->member_id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        
                        <div class="row">
                            <div class="col">
                                <input type="number" name="loan_id" id="loan-id" class="form-control w-25 form-control-lg mb-2 text-center" hidden value="<?php echo e($loan_payment->id); ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="date" name="date_of_payment" id="date-of-payment" class="form-control form-control-lg text-center" value="<?php echo e(old('date_of_payment')); ?>">
                                <?php $__errorArgs = ['date_of_payment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-3">
                                <input type="number" name="principal_amount" id="principal-amount" class="form-control form-control-lg text-center" placeholder="Principal" value="<?php echo e(old('principal_amount')); ?>" autofocus>
                                <?php $__errorArgs = ['principal_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-md-3">
                                <input type="number" name="amount_interest" id="amount-interest" class="form-control form-control-lg text-center" value="<?php echo e(old('amount_interest')); ?>" placeholder="Interest">
                                <?php $__errorArgs = ['amount_interest'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            
                            
                            


                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-outline-dark btn-md w-25 mt-3">Save Payment</button>
                            </div>

                        </div>
                        
                    </form>
                </div>
            </div>
            <hr class="horizontal-devider">
            <div class="row mx-auto w-75 mt-2">
                <div class="col">
                    <div class="row">
                        <p>Payment History</p>
                    </div>
                </div>
            </div>
            <div class="row" style="width: 100%; height: 200px; overflow: scroll;">
                    <table class="table table-sm table-hover align-middle bg-white border text-secondary text-center w-75 mx-auto shadows">
                        <thead>
                            <tr>
                                <th class="bg-dark text-white">Date Of Payment</th>
                                <th class="bg-dark text-white">Principal Amount</th>
                                <th class="bg-dark text-white">Interest Amount</th>
                                <th class="bg-dark text-white">Total Amount</th>
                            </tr>
                        </thead>
                        <tbody style="overflow: scroll;">
                            <?php $__empty_2 = true; $__currentLoopData = $all_payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l_payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                <tr>
                                    <td><?php echo e($l_payment->date_of_payment); ?></td>
                                    <td><?php echo e($l_payment->principal_amount); ?></td>
                                    <td><?php echo e($l_payment->interest_payment); ?></td>
                                    <td><?php echo e($l_payment->total_amount_paid); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                <p class="text-center text-danger">No Payment made yet.</p>
                            <?php endif; ?>
                        </tbody>
                    </table>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Member has no loans yet.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrcc\sdrccoop-final\sdrccoop-app\resources\views/members/loans/add-payment.blade.php ENDPATH**/ ?>