<?php $__env->startSection('title', 'Member Search'); ?>

<?php $__env->startSection('content'); ?>
    <p class="h2 text-muted mb-4 text-center">Search results for "<span class="fw-bold"><?php echo e($search); ?></span>"</p>
    <?php $__empty_1 = true; $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="row align-items-center mb-3">
            <div class="col-3">
                <?php if($member->image): ?>
                    <img src="<?php echo e($member->image); ?>" alt="<?php echo e($member->first_name); ?> <?php echo e($member->last_name); ?>">
                <?php else: ?>
                    <i class="fa-solid fa-circle-user"></i>
                <?php endif; ?>
                <img src="" alt="">
            </div>
            <div class="col bg-white p-3 rounded rounded-3 shadow-lg">
                
                <a href="<?php echo e(route('member.show.profile', $member->id)); ?>" class="text-decoration-none text-dark fw-bold">Member: <?php echo e($member->first_name); ?> <?php echo e($member->middle_name); ?> <?php echo e($member->last_name); ?></a>
                <p class="text-muted mb-0">Email: <?php echo e($member->email_address); ?></p>
                <p class="text-muted mb-0">Contact No: <?php echo e($member->contact_number); ?></p>
                <p class="text-muted mb-0">Date of Membership: <?php echo e($member->created_at); ?></p>
                <p class="mb-0">With Loan: <?php echo e($member->loan->member_id); ?></p>
                
                <p class="mb-0">Member State: Active</p>
                <hr class="horizontal-divider">
                <a href="<?php echo e(route('member.show.profile', $member->id)); ?>" class="btn btn-dark text-white btn-sm">Profile</a>
                <a href="<?php echo e(route('member.make.payment', $member->id)); ?>}" class="btn btn-dark text-white btn-sm">Add Payment</a>
                
                
                
                <div class="modal fade" id="add-payment" tabindex="-1" aria-labelledby="payment-form" aria-hidden="true">
                    <div class="modal-dialog modal-lg bg-white">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-5">
                                <h1 class="display-4 fw-bold text-info text-center"><i class="fa-solid fa-box"></i> Add Payment</h1>
                                <form action="#" method="post" class="w-75 mx-auto pt-4 p-5">
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label for="amount-to-pay" class="form-label small text-secondary">Amount To Pay</label>
                                            <input type="number" name="amount_to_pay" id="amount-to-pay" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <button type="submit" class="btn btn-info w-100" name="add_product">Post</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="lead text-muted text-center">No Members Yet</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrcc\sdrccoop-final\sdrccoop-app\resources\views/members/search.blade.php ENDPATH**/ ?>