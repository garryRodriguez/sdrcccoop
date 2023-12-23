

<?php $__env->startSection('title', 'Computation'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        
        <?php if(session('loan-computation-added')): ?>
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Success!</strong> <?php echo e(session('loan-computation-added'), false); ?>

            </div>
        <?php endif; ?>
        <?php if(session('exists')): ?>
            <div class="alert alert-danger">
                <ul>
                    <li><?php echo e(session('exists'), false); ?></li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    <a href="<?php echo e(url()->previous(), false); ?>" class="display-6 ms-5">
        <i class="fas fa-arrow-left text-dark"></i>
    </a>
	<div class="container-fluid p-2 bg-white shadow-lg">
        <div class="p-2 text-white" style="background-color: #000000">
            <h5><i class="fa-solid fa-landmark"></i> Loan Computation</h5>
        </div>
        <?php $__empty_1 = true; $__currentLoopData = $loan_member_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-danger">No Loan Yet</p>
        <?php endif; ?>
        
        
        <form action="<?php echo e(route('member.store.loan.computation', $item->id), false); ?>" method="post" class="mx-auto">
            <?php echo csrf_field(); ?>
            <p class="m-0 p-0 text-danger pt-1 small">Please add the details of the loan computation here. The computed result will be displayed below.</p>
            <table class="table">
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">Principal Amount</label>
                                <input type="number" step="0.01" name="principal_amount" class="form-control form-control-sm text-center" required>
                                <?php $__errorArgs = ['principal_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message, false); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">Interest</label>
                                <input type="number" step="0.01" name="interest_amount" class="form-control form-control-sm text-center" required>
                                <?php $__errorArgs = ['interest_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message, false); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">Term Payment</label>
                                <input type="number" name="payment_terms" id="payment-terms" class="form-control form-control-sm text-center" required>

                            </div>
                            <?php $__errorArgs = ['payment_terms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message, false); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="row mt-2">
                            <h5>Less Deduction</h5>
                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">Service Charge</label>
                                <input type="number" step="0.01" name="service_charge" class="form-control mb-0 text-center" arialabelledby="service-charge-info" required>
                                <div class="form-text" id="service-charge-info">
                                    <p class="text-muted p-0 fst-italic">1% of the principal amount</p>
                                </div>
                                <?php $__errorArgs = ['service_charge'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message, false); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">CBU</label>
                                <input type="number" step="0.01" name="capital_build_up" class="form-control text-center" arialabelledby="cbu-info" required>

                                <div class="form-text" id="cbu-info">
                                    <p class="text-muted p-0 fst-italic">For new member only</p>
                                </div>
                                <?php $__errorArgs = ['capital_build_up'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message, false); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">Membership Fee</label>
                                <input type="number" step="0.01" name="membership_fee" class="form-control text-center" arialabelledby="membership-fee-info" required>
                                <div class="form-text" id="membership-fee-info">
                                    <p class="text-muted p-0 fst-italic">One time payment upon registration</p>
                                </div>
                                <?php $__errorArgs = ['membership_fee'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message, false); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">Loan Balance</label>
                                <input type="number" step="0.01" name="loan_balance" class="form-control text-center" arialabelledby="loan-renewal-info" required>
                                <div class="form-text" id="loan-renewal-info">
                                    <p class="text-muted p-0 fst-italic">For loan renewal</p>
                                </div>
                                <?php $__errorArgs = ['loan_balance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message, false); ?></p>
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
                            <div class="col-4">
                                <input type="number" name="member_id" class="form-control text-center" value="<?php echo e($m_member_id, false); ?>" hidden>
                            </div>
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
        
    </div>
    <div class="container-fluid">
        <div class="row">
            <table class="table table-sm table-hover align-middle bg-white border text-secondary w-100 mx-auto shadow text-center">
                <thead>
                    <tr>
                        <th class="bg-success text-white">Name of Borrower</th>
                        <th class="bg-success text-white">Principal Amount</th>
                        <th class="bg-success text-white">Interest</th>
                        <th class="bg-success text-white">Service Charge</th>
                        <th class="bg-success text-white">Total CBU</th>
                        <th class="bg-success text-white">Membership Fee</th>
                        <th class="bg-success text-white">Loan Balance</th>
                        <th class="bg-success text-white">Net Proceeds</th>
                        <th class="bg-success text-white">Monthly Amortization</th>
                        <th class="bg-success text-white">Per Payroll Deduction</th>
                        <th class="bg-success text-white">Loan Status</th>
                        <th class="bg-success text-white">Approved By</th>
                        <th class="bg-success text-white">Term Of Payment (Months)</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $loan_computed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l_computed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td><?php echo e($item->first_name, false); ?> <?php echo e($item->last_name, false); ?></td>
                                <td><?php echo e($l_computed->principal_amount, false); ?></td>
                                <td><?php echo e($l_computed->interest_amount, false); ?></td>
                                <td><?php echo e($l_computed->service_charge, false); ?></td>
                                <td><?php echo e($l_computed->capital_build_up, false); ?></td>
                                <td><?php echo e($l_computed->membership_fee, false); ?></td>
                                <td><?php echo e($l_computed->loan_balance, false); ?></td>
                                <td><?php echo e($l_computed->principal_amount - ($l_computed->service_charge + $l_computed->capital_build_up + $l_computed->membership_fee + $l_computed->loan_balance), false); ?></td>
                                <td><?php echo e(round((($item->interest_rate /100) * $item->approved_loan_amount * $item->term_of_loan / $item->term_of_loan) + ($item->approved_loan_amount / $item->term_of_loan), 2), false); ?></td>
                                <td><?php echo e(round((($item->interest_rate /100) * $item->approved_loan_amount * $item->term_of_loan / $item->term_of_loan) / 2 + ($item->approved_loan_amount / $item->term_of_loan) / 2, 2), false); ?></td>
                                <td><?php echo e($l_computed->loan_status, false); ?></td>
                                <td><?php echo e($l_computed->approved_by, false); ?></td>
                                <td><?php echo e($l_computed->term_of_payment, false); ?></td>
                            </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $test = 0;
                    foreach ($loan_computed as $aaa) {
                        $test += $aaa->capital_build_up;
                    }

                     ?>
                    <?php

                     echo "<p class='bg-dark text-white p-2'>Member's Total CBU: $test</p>";

                     ?>
                   
                </tbody>
            </table>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrccoop\_public_html\resources\views/members/loans/loancomputation.blade.php ENDPATH**/ ?>