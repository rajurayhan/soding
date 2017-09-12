<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php if(isset($task)): ?><?php echo e('Edit'); ?><?php else: ?><?php echo e('Add'); ?><?php endif; ?> Task</div>

                <div class="panel-body">
                    <form action="<?php if(isset($task)): ?><?php echo e(route('updateTask', $task->id)); ?><?php else: ?><?php echo e(route('postTask')); ?><?php endif; ?>" method="POST">

                    <?php echo e(csrf_field()); ?>

                      <div class="form-group">
                        <label for="name">Task Name</label>
                        <input type="text" value="<?php if(isset($task)): ?><?php echo e($task->name); ?><?php endif; ?>" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description"><?php if(isset($task)): ?><?php echo e($task->description); ?><?php endif; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>