

<?php $__env->startSection('title', 'Edit Page'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="bg-dark p-4 text-white">
            <h2><i class="fa-solid fa-user"></i> Edit Member's Data</h2>
        </div>
        <form action="<?php echo e(route('member.update', $member_details->id), false); ?>" class="border border-secondary p-1 w-100 shadow-lg" method="POST" autocomplete="off">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
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
                                <label for="tin-no" class="form-label fw-bold">TIN No</label>
                                <input type="text" name="tin_no" id="tin-no" class="form-control" value="<?php echo e($member_details->tin_no, false); ?>">
                            </div>
                            <div class="col-4"></div>
                            <div class="col-4"></div>

                        </div>
                        <div class="row justify-content-center mt-5">
                            <button type="submit" class="btn btn-outline-dark w-75">Save</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u152326917/domains/sdrcoop.com/public_html/resources/views/members/edit.blade.php ENDPATH**/ ?>