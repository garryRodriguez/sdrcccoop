<div class="bg-light p-3">
    
    <h1 class="h3 lead fs-4">Members Data Report</h1>
    <form method="post">
        <div class="row align-items-center g-3">
            <div class="col-auto">
                <input type="text" wire:model.live="search"  name="" id="" class="form-control bg-light text-success" placeholder="Search here..">
            </div>
            <div class="col-auto">
                <select wire:model.live="pagination" class="p-1 text-success">
                    <option value="10">10</option>
                    <option value="20">20</option>
                </select>
            </div>
        </div>
    </form>
    <table class="table table-small text-center table-hover table-sm w-75 mt-2">
        <thead class="table-success">
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Contact No</th>
                <th>Email</th>
                <th>Membership Date</th>
                <th>Tin No</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div wire:key="<?php echo e($user->id, false); ?>">
                <tr>
                    <td><?php echo e($user->first_name, false); ?></td>
                    <td><?php echo e($user->last_name, false); ?></td>
                    <td><?php echo e($user->contact_number, false); ?></td>
                    <td><?php echo e($user->email_address, false); ?></td>
                    <td><?php echo e($user->created_at, false); ?></td>
                    <td><?php echo e($user->tin_no, false); ?></td>
                    <th><a href="#" class="btn btn-sm bg-success text-white">View Details</a></th>
                </tr>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </tbody>
    </table>
    <?php echo e($users->links(), false); ?>

</div>
<?php /**PATH C:\xampp\htdocs\sdrccoop\public_html_final\sdrcccoop\resources\views/livewire/reports.blade.php ENDPATH**/ ?>