<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="bg-dark p-4 text-white">
            <h2><i class="fa-solid fa-user"></i> Member Profile</h2>
        </div>
        <form action="#" class="border border-secondary p-1 w-100 shadow-lg" autocomplete="off">
            <?php echo csrf_field(); ?>
            <table class="table">
                <tr>
                    <td class="container w-75">
                        <div class="row">
                            <div class="col-4">
                                <label for="first-name" class="form-label fw-bold">First Name</label>
                                <input type="text" name="first_name" id="first-name" class="form-control mb-2" value="<?php echo e($member_details->first_name, false); ?>">
                            </div>
                            <div class="col-4">
                                <label for="middle-name" class="form-label fw-bold">Middle Name</label>
                                    <input type="text" name="middle_name" id="middle-name" class="form-control mb-2" value="<?php echo e($member_details->middle_name, false); ?>">
                            </div>
                            <div class="col-4">
                                <label for="last-name" class="form-label fw-bold">Last Name</label>
                                    <input type="text" name="last_name" id="last-name" class="form-control mb-2" value="<?php echo e($member_details->last_name, false); ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="dob" class="form-label fw-bold">Date Of Birth</label>
                                <input type="date" name="dob" id="dob" class="form-control mb-2" value="<?php echo e($member_details->date_of_birth, false); ?>">
                            </div>
                            <div class="col-4">
                                <label for="pob" class="form-label fw-bold">Place Of Birth</label>
                                    <input type="text" name="pob" id="pob" class="form-control mb-2" value="<?php echo e($member_details->place_of_birth, false); ?>">
                            </div>
                            <div class="col-4">
                                <label for="contact-no" class="form-label fw-bold">Contact Number</label>
                                    <input type="text" name="contact_no" id="contact-no" class="form-control mb-2" value="<?php echo e($member_details->contact_number, false); ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="email-address" class="form-label fw-bold">E-mail Address</label>
                                    <input type="email" name="email_address" id="email-address" class="form-control mb-2" value="<?php echo e($member_details->email_address, false); ?>">
                            </div>
                            <div class="col-6">
                                <label for="present-address" class="form-label fw-bold">Present Address</label>
                                    <input type="text" name="present_address" id="present-address" class="form-control" value="<?php echo e($member_details->present_address, false); ?>">
                            </div>
                            <div class="col-3">
                                <label for="civil-status" class="form-label fw-bold">Civil Status</label>
                                    <input type="text" name="civil_status" id="civil-status" class="form-control" value="<?php echo e($member_details->civil_status, false); ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                    <!-- <a href="#" class="btn btn-dark mb-2 mt-2">Loan Details</a> -->
                                    <div class="dropdown">
                                        <button class="btn btn-dark text-white shadow-lg" data-bs-toggle="dropdown">
                                            Loan Details
                                        </button>

                                        <div class="dropdown-menu">

                                            <a href="<?php echo e(route('member.loan.application', $member_details->id), false); ?>" class="dropdown-item btn btn-dark text-dark"><i class="fa-solid fa-bars-staggered"></i> Apply Loan</a>

                                            <a href="<?php echo e(route('member.loan.computation', $member_details->id), false); ?>" class="dropdown-item btn btn-dark text-dark"><i class="fa-solid fa-calculator"></i> Loan Computation</a>

                                            <a href="<?php echo e(route('member.view.loan.amortization', $member_details->id), false); ?>" class="dropdown-item btn btn-dark text-dark"><i class="fa-solid fa-chart-column"></i> Amortization</a>

                                            <a href="#" class="dropdown-item btn btn-dark text-dark"><i class="fa-solid fa-clock-rotate-left"></i> Loan History</a>

                                            <!-- <button class="dropdown-item text-dark" data-bs-toggle="modal" data-bs-target="#add-cbu-<?php echo e($member_details->id, false); ?>"><i class="fa-solid fa-bars-staggered"></i> Loan Details</button>

                                            <button class="dropdown-item text-dark" data-bs-toggle="modal" data-bs-target="#amort-sched-<?php echo e($member_details->id, false); ?>"><i class="fa-solid fa-chart-column"></i> Amortization</button>

                                            <button class="dropdown-item text-dark" data-bs-toggle="modal" data-bs-target="#loan-history-<?php echo e($member_details->id, false); ?>"><i class="fa-solid fa-clock-rotate-left"></i> Loan History</button> -->
                                        </div>

                                        
                                        <?php echo $__env->make('members.modals.addcbu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                            </div>
                        </div>
                    </td>
                <td>
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo e($member_details->image, false); ?>" alt="<?php echo e($member_details->firstname, false); ?>" class="d-block" style="width: 300px; height: 300px;">
                        </div>
                    </div>
                </td>
                </tr>
            </table>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrccoop\_public_html\resources\views/members/profile.blade.php ENDPATH**/ ?>