
<div class="modal fade" id="deactivate-member-<?php echo e($member->id); ?>">
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <h3 class="h5 modal-title text-danger">
                    <i class="fa-solid fa-user-large-slash"></i> Deactivate Member
                </h3>
            </div>
            <div class="modal-body">
                Are you sure you want to deactivate member <span class="fw-bold"><?php echo e($member->first_name); ?> <?php echo e($member->first_name); ?></span>?
            </div>
            <div class="modal-footer border-0">
                <form action="<?php echo e(route('admin.member.deactivate', $member->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Deactivate</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="activate-member-<?php echo e($member->id); ?>">
    <div class="modal-dialog">
        <div class="modal-content border-success">
            <div class="modal-header border-success">
                <h3 class="h5 modal-title text-success">
                    <<i class="fa-solid fa-user-check"></i> Aactivate Member
                </h3>
            </div>
            <div class="modal-body">
                Are you sure you want to activate member <span class="fw-bold"><?php echo e($member->first_name); ?> <?php echo e($member->first_name); ?></span>?
            </div>
            <div class="modal-footer border-0">
                <form action="<?php echo e(route('admin.member.activate', $member->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <button type="button" class="btn btn-outline-success btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm">Activate</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\sdrcc\sdrccoop-final\sdrccoop-app\resources\views/admin/members/modal/member.blade.php ENDPATH**/ ?>