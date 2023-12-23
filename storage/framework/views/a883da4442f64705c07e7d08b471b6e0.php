<?php $__env->startSection('content'); ?>
<div class="container bg-white p-3 shadow-lg">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Search Member</div>

                <div class="card-body">
                    <form action="<?php echo e(route('member.search')); ?>" autocomplete="off">
                        <div class="row">
                            <div class="col-10">
                                <input type="search" name="search" id="search" class="form-control mb-0" placeholder="Enter Family Name to search here" aria-describedby="search-guide" autofocus>
                                <div class="form-text" id="search-guide">
                                    <p class="text-danger">Note: Please use member's family name to search</p>
                                </div>
                            </div>
                            <div class="col-2">
                                <input type="submit" value="Search" class="btn btn-dark">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-2">
        <div class="col-md-12">
            <table class="table table-hover table-striped text-center">
                <thead class="table-dark">
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>View Profile</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $all_members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $members): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($members->first_name); ?></td>
                            <td><?php echo e($members->middle_name); ?></td>
                            <td><?php echo e($members->last_name); ?></td>
                            <td><?php echo e($members->contact_number); ?></td>
                            <td><?php echo e($members->email_address); ?></td>
                            <td><a href="<?php echo e(route('member.show.profile', $members->id)); ?>"><i class="fa-regular fa-eye text-dark fs-4"></i></a></td>
                            <td><a href="#"><i class="fa-solid fa-pen-to-square text-dark fs-4"></i></a></td>
                            <td><a href="#"><i class="fa-solid fa-trash-can text-dark fs-4"></i></a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sdrcc\sdrccoop-final\sdrccoop-app\resources\views/home.blade.php ENDPATH**/ ?>