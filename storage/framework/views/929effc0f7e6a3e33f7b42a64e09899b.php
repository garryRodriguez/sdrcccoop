<?php $__env->startSection('title', 'Computation'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        
        <?php if(session('loan-computation-added')): ?>
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Success!</strong> <?php echo e(session('loan-computation-added')); ?>

            </div>
        <?php endif; ?>
    </div>
    <a href="<?php echo e(url()->previous()); ?>" class="display-6 ms-5">
        <i class="fas fa-arrow-left text-dark"></i>
    </a>
	<div class="container p-2 bg-white shadow-lg">
        <div class="p-2 text-white" style="background-color: #000000">
            <h5><i class="fa-solid fa-landmark"></i> Loan Computation</h5>
        </div>
        <?php $__empty_1 = true; $__currentLoopData = $loan_member_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        
            <form action="<?php echo e(route('member.store.loan.computation', $item->id)); ?>" method="post" class="mx-auto">
                <?php echo csrf_field(); ?>
                <table class="table">
                    <tr>

                        <td>
                            
                            <div class="row">
                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Principal Amount</label>
                                    <input type="number" name="principal_amount" class="form-control form-control-sm text-center" value="<?php echo e($item->approved_loan_amount); ?>">
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

                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Interest</label>
                                    <input type="number" name="interest_amount" class="form-control form-control-sm text-center" value="<?php echo e(old('interest_amount')); ?>">
                                    <?php $__errorArgs = ['interest_amount'];
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
                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Term Payment</label>
                                    <select name="payment_terms" id="payment-terms" class="form-select form-select-sm" required>
                                        <option value="" hidden selected>Payment Terms</option>
                                        <option value="4">4 Months</option>
                                        <option value="6">6 Months</option>
                                        <option value="8">8 Months</option>
                                        <option value="10">10 Months</option>
                                        <option value="11">11 Months</option>
                                        <option value="12">12 Months (1 Year)</option>
                                        <option value="24">24 Months (2 Years)</option>
                                        <option value="36">36 Months (3 Years)</option>
                                    </select>
                                </div>
                                <?php $__errorArgs = ['payment_terms'];
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
                            <div class="row mt-2">
                                <h5>Less Deduction</h5>
                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Service Charge</label>
                                    <input type="number" name="service_charge" class="form-control mb-0 text-center" value="<?php echo e($item->approved_loan_amount * 0.01); ?>" arialabelledby="service-charge-info">
                                    <div class="form-text" id="service-charge-info">
                                        <p class="text-muted p-0 fst-italic">1% of the principal amount</p>
                                    </div>
                                    <?php $__errorArgs = ['service_charge'];
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

                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">CBU</label>
                                    <input type="number" name="capital_build_up" class="form-control text-center" value="<?php echo e(old('capital_build_up')); ?>" arialabelledby="cbu-info">
                                    <div class="form-text" id="cbu-info">
                                        <p class="text-muted p-0 fst-italic">For new member only</p>
                                    </div>
                                    <?php $__errorArgs = ['capital_build_up'];
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
                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Membership Fee</label>
                                    <input type="number" name="membership_fee" value="<?php echo e(150); ?>" class="form-control text-center" arialabelledby="membership-fee-info">
                                    <div class="form-text" id="membership-fee-info">
                                        <p class="text-muted p-0 fst-italic">One time payment upon registration</p>
                                    </div>
                                    <?php $__errorArgs = ['membership_fee'];
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
                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Loan Balance</label>
                                    <input type="number" name="loan_balance" class="form-control text-center" value="<?php echo e(old('loan_balance')); ?>" arialabelledby="loan-renewal-info">
                                    <div class="form-text" id="loan-renewal-info">
                                        <p class="text-muted p-0 fst-italic">For loan renewal</p>
                                    </div>
                                    <?php $__errorArgs = ['loan_balance'];
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
                                
                            </div>
                            
                            <div class="row mb-0 p-1" style="background-color: #000000">
                                <h6 class="text-white">Loan Status</h6>
                                <div class="col-4 mb-1">
                                    <select class="form-select form-select-sm" name="loan_status" required>
                                        <option value="" hidden>Select Loan Status</option>
                                        <option value="Approved">Appoved</option>
                                        <option value="Disapproved">Disapproved</option>
                                    </select>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <label class="form-label fw-bold mb-0 text-white mb-1">Approved by:</label>
                                    <input type="text" name="approved_by" class="form-control form-control-sm" required>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-12 text-end"><button class="btn btn-sm btn-dark text-white text-center w-25">SAVE</button></div>
                        </td>
                    </tr>
                </table>
            </form>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-danger">No Loan Yet</p>
        <?php endif; ?>
    </div>
    <div class="container-fluid">
        <div class="row">
            <table class="table table-sm table-hover align-middle bg-white border text-secondary w-100 mx-auto shadow text-center">
                <thead>
                    <tr>
                        <th class="bg-success text-white">Principal Amount</th>
                        <th class="bg-dark text-white">Interest</th>
                        <th class="bg-dark text-white">Service Charge</th>
                        <th class="bg-dark text-white">CBU</th>
                        <th class="bg-dark text-white">Membership Fee</th>
                        <th class="bg-dark text-white">Loan Balance</th>
                        <th class="bg-dark text-white">Net Proceeds</th>
                        <th class="bg-dark text-white">Monthly Amortization</th>
                        <th class="bg-dark text-white">Per Payroll Deduction</th>
                        <th class="bg-dark text-white">Loan Status</th>
                        <th class="bg-dark text-white">Approved By</th>
                        <th class="bg-dark text-white">Term Of Payment (Months)</th>
                    </tr>
                </thead>
                <tbody>
                   <?php if($loan_computed): ?>
                        <?php $__empty_1 = true; $__currentLoopData = $loan_computed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l_computed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($l_computed->principal_amount); ?></td>
                                <td><?php echo e($l_computed->interest_amount); ?></td>
                                <td><?php echo e($l_computed->service_charge); ?></td>
                                <td><?php echo e($l_computed->capital_build_up); ?></td>
                                <td><?php echo e($l_computed->membership_fee); ?></td>
                                <td><?php echo e($l_computed->loan_balance); ?></td>
                                <td><?php echo e($l_computed->principal_amount - ($l_computed->interest_amount + $l_computed->service_charge + $l_computed->capital_build_up + $l_computed->membership_fee + $l_computed->loan_balance)); ?></td>
                                <td><?php echo e(round(($l_computed->principal_amount / 12) + ($l_computed->interest_amount / 12), 2)); ?></td>
                                <td><?php echo e(round(($l_computed->principal_amount / 24) + ($l_computed->interest_amount / 24), 2)); ?></td>
                                <td><?php echo e($l_computed->loan_status); ?></td>
                                <td><?php echo e($l_computed->approved_by); ?></td>
                                <td><?php echo e($l_computed->term_of_payment); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <?php endif; ?>
                   <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrcc\sdrccoop-final\sdrccoop-app\resources\views/members/loans/loancomputation.blade.php ENDPATH**/ ?>