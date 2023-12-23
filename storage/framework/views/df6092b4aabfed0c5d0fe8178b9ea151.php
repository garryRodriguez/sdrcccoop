<?php $__env->startSection('title', 'Admin: Members'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-hover align-middle text-center bg-white border text-secondary w-100">
        <thead class="small table-success text-secondary">
            <tr>
                <th></th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact No</th>
                <th>Email Address</th>
                <th>Date Of Membership</th>
                <th>Status</th>
                <th>With Loan</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $all_members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>

                        <?php if($member->image): ?>
                            <a href="#" class="text-decoration-none text-dark">
                                <img src="<?php echo e($member->image); ?>" alt="<?php echo e($member->first_name); ?>" class="rounded-circle d-block" style="width: 3rem; height: 3rem; object-fit: cover;">
                            </a>

                        <?php else: ?>
                            <i class="fa-solid fa-circle-user text-dark"></i>
                        <?php endif; ?>

                </td>
                <td>
                    <a href="#" class="text-decoration-none text-dark fw-bold"><?php echo e($member->first_name); ?></a>
                </td>
                <td>
                    <a href="#" class="text-decoration-none text-dark fw-bold"><?php echo e($member->last_name); ?></a>
                </td>
                <td>
                    <p><?php echo e($member->contact_number); ?></p>
                </td>
                <td>
                    <p><?php echo e($member->email_address); ?></p>
                </td>
                <td>
                    <p><?php echo e($member->created_at->format('Y-m-d')); ?></p>
                </td>
                <td>
                    <?php if($member->trashed()): ?>
                        <span class="badge text-bg-secondary">Deactivated</span>
                    <?php else: ?>
                        <span class="badge text-bg-success">Active</span>
                    <?php endif; ?>
                </td>
                <td>
                    <span class="badge text-bg-success">Yes</span>
                </td>
                <td>
                    
                        <div class="dropdown">
                            <button class="btn btn-sm" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                <?php if($member->trashed()): ?>
                                    <button class="dropdown-item text-success" data-bs-toggle="modal"
                                    data-bs-target="#activate-member-<?php echo e($member->id); ?>">
                                        <i class="fa-solid fa-user-check"></i> Activate <?php echo e($member->first_name); ?> <?php echo e($member->last_name); ?>

                                    </button>
                                <?php else: ?>
                                    <button class="dropdown-item text-danger" data-bs-toggle="modal"
                                    data-bs-target="#deactivate-member-<?php echo e($member->id); ?>">
                                        <i class="fa-solid fa-user-large-slash"></i> Deactivate <?php echo e($member->first_name); ?> <?php echo e($member->last_name); ?>

                                    </button>
                                <?php endif; ?>

                            </div>
                        </div>
                        
                        <?php echo $__env->make('admin.members.modal.member', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($all_members->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrcc\sdrccoop-final\sdrccoop-app\resources\views/admin/members/index.blade.php ENDPATH**/ ?>