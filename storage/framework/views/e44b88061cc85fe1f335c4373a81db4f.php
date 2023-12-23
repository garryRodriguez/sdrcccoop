<?php $__env->startSection('title', 'Loan Application'); ?>

<?php $__env->startSection('content'); ?>
	<div class="container p-2">
        <div class="p-3 text-white" style="background-color: #000000">
            <h2><i class="fa-solid fa-landmark"></i> Loan Application</h2>
        </div>
        <form action="<?php echo e(route('member.process.loan.application', $m_details->id), false); ?>" method="post" class="border border-secondary p-1 w-100 shadow-lg" autocomplete="off">
            <?php echo csrf_field(); ?>
            <table class="table">
                <tr>
                    <td class="container w-75">
                    	<div class="row">
                    		<p class="fw-bold h4">Applicant Details</p>
                    	</div>
                        <div class="row">
                            <div class="col-4">
                                <label for="first-name" class="form-label mb-0">First Name</label>
                                <input type="text" name="first_name" id="first-name" class="form-control form-control-sm fw-bold text-secondary" value="<?php echo e(old('first_name', $m_details->first_name), false); ?>">
                                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                	<p class="text-danger small">$message</p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-4">
                                <label for="middle-name" class="form-label mb-0">Middle Name</label>
                                    <input type="text" name="middle_name" id="middle-name" class="form-control form-control-sm fw-bold text-secondary" value="<?php echo e(old('first_name', $m_details->middle_name), false); ?>">
                                    <?php $__errorArgs = ['middle_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                		<p class="text-danger small">$message</p>
                                	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-4">
                                <label for="last-name" class="form-label mb-0">Last Name</label>
                                    <input type="text" name="last_name" id="last-name" class="form-control form-control-sm fw-bold text-secondary" value="<?php echo e(old('first_name', $m_details->last_name), false); ?>">
                                    <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                		<p class="text-danger small">$message</p>
                                	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                        	<div class="col-8">
                        		<label class="form-label">Residence Address</label>
                        		<input type="text" name="member_residence_address" class="form-control form-control-sm" value="<?php echo e(old('member_residence_address', $m_details->present_address), false); ?>">
                        		<?php $__errorArgs = ['member_residence_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                	<p class="text-danger small">$message</p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        	</div>
                        	<div class="col-4">
                        		<label class="form-label">Tel/Mobile No</label>
                        		<input type="text" name="contact_no" class="form-control form-control-sm" value="<?php echo e(old('contact_no', $m_details->contact_number), false); ?>">
                        		<?php $__errorArgs = ['contact_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                	<p class="text-danger small">$message</p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        	</div>
                        </div>

                        <div class="row p-2" style="background-color: #000000;">
                        	<div class="col-4">
                        		<p class="fw-bold h4 text-white">Nature Of Loan </p>

                        		<input type="checkbox" name="nature_of_loan" value="new" class="form-check-input">
                        		<label class="form-check-label text-white">New</label>

                        		<input type="checkbox" name="nature_of_loan" value="renewal" class="form-check-input">
                        		<label class="form-check-label text-white">Renewal</label>
                        	</div>
                        	<?php $__errorArgs = ['nature_of_loan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger small">$message</p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="row p-2" style="background-color: #000000;">
                        	<div class="col-4 text-white">
                        		Date of Application <input type="date" name="date_of_application" class="form-control form-control-sm">
                        		<?php $__errorArgs = ['date_of_application'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                	<p class="text-danger small">$message</p>
                            	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        	</div>
                        	<div class="col-4 text-white">
                        		Monthly Salary (Gross) <input type="number" name="monthly_salary" step="0.01" class="form-control form-control-sm" value="<?php echo e(old('monthly_salary'), false); ?>" placeholder="Enter amount here">
                        		<?php $__errorArgs = ['monthly_salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                	<p class="text-danger small">$message</p>
                            	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        	</div>
                        	<div class="col-4 text-white">
                        		Other Income (Commision, etc) <input type="number" name="other_income" step="0.01" class="form-control form-control-sm" value="<?php echo e(old('other_income'), false); ?>" placeholder="Enter amount here">
                        		<?php $__errorArgs = ['other_income'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                	<p class="text-danger small">$message</p>
                            	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        	</div>
                        </div>
                        <div class="row p-2" style="background-color: #000000;">
                        	<div class="col-4 text-white">
                        		(Less: Deduction) <input type="number" name="less_deduction" step="0.01" class="form-control form-control-sm" value="<?php echo e(old('less_deduction'), false); ?>" placeholder="Enter amount of deduction here">
                        		<?php $__errorArgs = ['less_deduction'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                	<p class="text-danger small">$message</p>
                            	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        	</div>
                        	<div class="col-4 text-white">
                        		Monthly Net Pay <input type="number" name="monthly_net_pay" step="0.01" class="form-control form-control-sm" value="<?php echo e(old('monthly_net_pay'), false); ?>" placeholder="Enter total net income here">
                        		<?php $__errorArgs = ['monthly_net_pay'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                	<p class="text-danger small">$message</p>
                            	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        	</div>
                        </div>

                        <div class="row p-2" style="background-color: #000000;">
                        	<div class="col-4 text-white">
                        		Term of Payment (How many months?)
                                <input type="number" name="term_of_loan" id="term_of_loan" class="form-control" value="<?php echo e(old('term_of_loan'), false); ?>" placeholder="Enter number of months here">
                        		 
								 <?php $__errorArgs = ['term_of_loan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                	<p class="text-danger small">$message</p>
                            	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        	</div>

                        	<div class="col-4 text-white">
                        		Comaker's Name <input type="text" name="comakers_name" class="form-control form-control-sm" value="<?php echo e(old('comakers_name'), false); ?>">
                        		<?php $__errorArgs = ['comakers_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                	<p class="text-danger small">$message</p>
                            	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        	</div>
                        </div>

                        <div class="row p-2" style="background-color: #000000;">
                        	<p class="fw-bold h4 text-white">Pre-Approval Of Loan </p>
                        	<div class="col-4 text-white">
                        		Loan Balance <input type="number" name="loan_balance" step="0.01" class="form-control form-control-sm" value="<?php echo e(old('loan_balance'), false); ?>" placeholder="Put zero (0) if the loan is new">
                        	</div>
                        	<?php $__errorArgs = ['loan_balance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger small">$message</p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        	<div class="col-4 text-white">
                        		Approved Loan <input type="number" name="approved_loan" step="0.01" class="form-control form-control-sm">
                        	</div>
                        	<?php $__errorArgs = ['approved_loan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger small">$message</p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="row p-3 mb-3 text-white" style="background-color: #000000;">
                            <div class="col-4">
                        		CBU <input type="number" name="cbu_data" step="0.01" class="form-control form-control" placeholder="Enter amount of CBU here">
                        	</div>

                            <div class="col-4">
                        		Monthly Interest Rate (1%, 2% 3%) <input type="number" step="0.01" name="monthly_interest_rate" class="form-control form-control" placeholder="Enter interest rate here">
                        	</div>

                        </div>
                        <div class="row p-2" style="background-color: #000000;">
                        	<p class="fw-bold h4 text-white">Notes/Comments </p>
                        	<div class="col-8">
                        		<textarea class="form-control" name="notes_comments" rows="3" placeholder="Add your notes or comments here"></textarea>
                        	</div>
                        	<?php $__errorArgs = ['notes_comments'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger small">$message</p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>


                    </td>
                    <!-- <td class="container w-50">
                    	adsd
                    </td> -->
                </tr>
            </table>

            <button type="submit" class="btn text-white w-25" style="background-color: #000000;">Save Details</button>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrccoop\_public_html\resources\views/members/loans/loan.blade.php ENDPATH**/ ?>