<div class="modal fade" id="add-cbu-<?php echo e($member_details->id, false); ?>">
    <div class="modal-dialog">
        <div class="modal-content border-dark">
            <div class="modal-header border-dark">
                <h3 class="h5 modal-title text-dark">
                    <i class="fa-solid fa-plus"></i> Add CBU
                </h3>
            </div>
            <div class="modal-body">
                <p class="h3 text-center">Enter CBU Amount</p>
                <form action="#" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="number" name="cbu" id="cbu" class="form-control">
                    <?php $__errorArgs = ['cbu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger small"><?php echo e($message, false); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-sm" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-dark btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\sdrccoop\_public_html\resources\views/members/modals/addcbu.blade.php ENDPATH**/ ?>