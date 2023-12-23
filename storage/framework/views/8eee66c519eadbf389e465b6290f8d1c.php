<?php $__env->startSection('title', 'Add Member'); ?>

<?php $__env->startSection('content'); ?>
        <div class="container-fluid bg-dark text-white p-1 ps-5">
            <h3 class="display-6 text-center">Add New Member</h3>
        </div>
        <div class="container-fluid bg-light p-1">
            <div class="row">
                <div class="col">
                    <a class="btn btn-dark text-white col-6 d-block ms-auto text-truncate" href="#">
                        <i class="me-1 fas fa-lock"></i> Change Password
                    </a>
                </div>
                <div class="col">
                    <a class="btn btn-danger col-6 d-block me-auto text-truncate" href="#">
                        <i class="me-1 fas fa-trash-alt"></i> Delete Account
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="<?php echo e(route('member.store'), false); ?>" enctype="multipart/form-data" class="bg-white p-2" method="post" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-8 px-5">
                        <div class="row">
                            <p class="">Member Details</p>
                            <div class="col-4">
                                <div class="">
                                    <input type="text" name="first_name" class="form-control form-control-sm" id="first-name" placeholder="First Name" <?php echo e(old('first_name'), false); ?> autofocus>
                                    
                                    <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-1">
                                    <input type="text" name="middle_name" class="form-control form-control-sm" id="middle-name" placeholder="Middle Name" <?php echo e(old('middle_name'), false); ?>>
                                    
                                    <?php $__errorArgs = ['middle_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-1">
                                    <input type="text" name="last_name" class="form-control form-control-sm" id="last-name" placeholder="Last Name" <?php echo e(old('last_name'), false); ?>>
                                    
                                    <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <input type="file" name="image" class="form-control form-control-sm" aria-label="Choose Photo" accept="image/*">
                    </div>
                    <div class="row">
                        <div class="col-8 px-5">
                            <div class="row mb-1">
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="date" name="date_of_birth" class="form-control form-control-sm" id="date-of-birth" placeholder="Date Of Birth" <?php echo e(old('date_of_birth'), false); ?>>
                                        
                                        <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger small"><?php echo e($message, false); ?></p>
                                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="place_of_birth" class="form-control form-control-sm" id="place-of-birth" placeholder="Place Of Birth" <?php echo e(old('place_of_birth'), false); ?>>
                                        
                                    </div>
                                    <?php $__errorArgs = ['place_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="contact_number" class="form-control form-control-sm" id="contact-number" placeholder="Contact Number" <?php echo e(old('contact_number'), false); ?>>
                                        
                                    </div>
                                    <?php $__errorArgs = ['contact_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-12 px-5">
                            <div class="row mb-1">
                                <hr>
                                <div class="col-4">

                                    <div class="mb-1">
                                        <input type="text" name="email_address" class="form-control form-control-sm" id="email-address" placeholder="Email Address" <?php echo e(old('email_address'), false); ?>>
                                        
                                    </div>
                                    <?php $__errorArgs = ['email_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="no_of_dependents" class="form-control form-control-sm" id="no-of-dependents" placeholder="Number Of Dependents" <?php echo e(old('no_of_dependents'), false); ?>>
                                        
                                    </div>
                                    <?php $__errorArgs = ['no_of_dependents'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="religion" class="form-control form-control-sm" id="religion" placeholder="Religion" <?php echo e(old('religion'), false); ?>>
                                        
                                    </div>
                                    <?php $__errorArgs = ['religion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12 px-5">
                            <div class="row mb-1">
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="nationality" class="form-control form-control-sm" id="nationality" placeholder="Nationality" <?php echo e(old('nationality'), false); ?>>
                                        
                                    </div>
                                        <?php $__errorArgs = ['nationality'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger small"><?php echo e($message, false); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="present_address" class="form-control form-control-sm" id="present-address" placeholder="Present Address" <?php echo e(old('present_address'), false); ?>>
                                        
                                    </div>
                                    <?php $__errorArgs = ['present_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <select name="civil_status" class="form-control form-control-sm bg-light" id="civil-status" placeholder="Civil Status" <?php echo e(old('civil_status'), false); ?>>
                                            <option value="" selected hidden>Select Civil Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Separated">Separated</option>
                                        </select>
                                        
                                    </div>
                                    <?php $__errorArgs = ['civil_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 px-5">
                            <div class="row mb-1">
                                <hr>
                                
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="spouse_first_name" class="form-control form-control-sm" id="spouse-first-name" placeholder="Spouse First Name" <?php echo e(old('spouse_first_name'), false); ?>>
                                        
                                    </div>
                                        <?php $__errorArgs = ['spouse_first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger small"><?php echo e($message, false); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="spouse_middle_name" class="form-control form-control-sm" id="spouse-middle-name" placeholder="Spouse Middle Name" <?php echo e(old('spouse_middle_name'), false); ?>>
                                        
                                    </div>
                                    <?php $__errorArgs = ['spouse_middle_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="spouse_last_name" class="form-control form-control-sm" id="spouse-last-name" placeholder="Spouse Last Name" <?php echo e(old('spouse_last_name'), false); ?>>
                                        
                                    </div>
                                    <?php $__errorArgs = ['spouse_last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <div class="mb-1">
                                        <input type="text" name="tin_no" id="tin-no" class="form-control form-control-sm" placeholder="TIN No" required>
                                        <?php $__errorArgs = ['tin_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger small">$<?php echo e($message, false); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row justify-content-center">
                    <button class="btn btn-dark w-25">Save</button>
                </div>

            </form>
        </div>


        <hr class="my-3">

        <?php if(session('new-member')): ?>
            <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong><?php echo e(session('new-member'), false); ?></strong>
            </div>
        <?php endif; ?>
        
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrcc\sdrccoop-final\sdrccoop-app_original\resources\views/members/add-member.blade.php ENDPATH**/ ?>