<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tasks <span class="pull-right"><a href="<?php echo e(route('addTask')); ?>"><button class="btn btn-sm btn-success">Add New</button></a></span></div>

                <div class="panel-body">
                    <?php if(sizeof($tasks)>0): ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $sl = 1; ?>
                        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($sl++); ?></td>
                                <td><?php echo e($task->name); ?></td>
                                <td><?php echo e($task->description); ?></td>
                                <td><a href="<?php echo e(route('updateTask', $task->id)); ?>"><button class="btn btn-sm btn-info">Edit</button></a> <a href="<?php echo e(route('deleteTask', $task->id)); ?>"><button class="btn btn-sm btn-danger">Delete</button></a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php else: ?>
                    <span>Sorry! No Task Available.</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>