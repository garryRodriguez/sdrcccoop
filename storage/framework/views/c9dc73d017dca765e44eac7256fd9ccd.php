<?php $__env->startSection('title', 'Amortization'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container bg-white shadow p-3">
        <div class="h2 text-center">
            Amortization Schedule
        </div>

        <?php $__empty_1 = true; $__currentLoopData = $amort_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amortization_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <table class="table table-sm table-hover align-middle bg-white border text-secondary w-75 mx-auto shadow">
                <tr class="text-align-start">
                    <td class="h6" colspan="5"><span class="fw-bold small">Name:</span> <span class="small"><?php echo e($amortization_data->first_name); ?> <?php echo e($amortization_data->last_name); ?></span></td>
                </tr>
                <tr class="text-align-start">
                    <td class="h6" colspan="5"><span class="fw-bold small">Date Granted:</span> <span class="small"><?php echo e($amortization_data->created_at->format('d-m-Y')); ?></span></td>
                </tr>
                <tr class="text-align-start">
                    <td class="h6" colspan="5"><span class="fw-bold small">Maturity Date:</span> <span class="small"><?php echo e($amortization_data->created_at->addDays(360)->format('d-m-Y')); ?></span> </td>
                </tr>
                <tr class="text-align-start">
                    <td class="h6" colspan="5"><span class="fw-bold small">Member ID:</span><span class="small"> 000<?php echo e($amortization_data->member_id); ?></span></td>
                </tr>
                <tr class="text-align-start" rowspan="5">
                    <td class="h6" colspan="3"><span class="fw-bold small">Loan Amount:</span> <span class="small"><?php echo e($amortization_data->approved_loan_amount); ?></span></td>
                    <td class="h6" colspan="1"><span class="fw-bold small"><span class="small">Current Balance:</span></span></td>
                </tr>
                <tr>
                    <td class="h6 text-start" colspan="5"><span class="fw-bold small">Due Date:</span> <span class="text-danger small">Every 5th & 20th of the Month</span> </td>
                </tr>
                
                
                    
                    <tr class="text-center">
                        <th class="bg-dark text-white">No</th>
                        <th class="bg-dark text-white">Principal</th>
                        <th class="bg-dark text-white">Interest</th>
                        <th class="bg-dark text-white">Total Payable</th>
                        <th class="bg-dark text-white">Balance</th>
                    </tr>
                        <?php for($i = 1; $i <= 24; $i++): ?>
                            <tr class="text-center">
                                <td><?php echo e($i); ?></td>
                                <td><?php echo e(round($amortization_data->approved_loan_amount / 24), 2); ?></td>
                                <td><?php echo e($amortization_data->interest / 24); ?></td>
                                <td><?php echo e(round(($amortization_data->approved_loan_amount + $amortization_data->interest) / 24, 2)); ?></td>
                                <td></td>
                            </tr>
                        <?php endfor; ?>
                    <tr class="mt-3 text-center">
                        <td class="fw-bold text-danger">Total: </td>
                        <td class="fw-bold text-danger"><?php echo e($amortization_data->approved_loan_amount); ?></td>
                        <td class="fw-bold text-danger"><?php echo e(($amortization_data->interest / 24) * 24); ?></td>
                        <td class="fw-bold text-danger"><?php echo e(round(($amortization_data->approved_loan_amount + $amortization_data->interest) / 24, 2) * 24); ?></td>
                        <td></td>
                    </tr>


                
            </table>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Member has no loans yet.</p>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrcc\sdrccoop-final\sdrccoop-app_original\resources\views/members/loans/amortization-sched.blade.php ENDPATH**/ ?>