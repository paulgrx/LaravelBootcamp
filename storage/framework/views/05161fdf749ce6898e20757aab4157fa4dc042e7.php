<?php $__env->startSection('content'); ?>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="<?php echo e(route('chirps.update', $chirp)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <textarea
                name="message"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            ><?php echo e(old('message', $chirp->message)); ?></textarea>

            <div class="mt-4 space-x-2">
                <button><?php echo e(__('Save')); ?></button>
                <a href="<?php echo e(route('chirps.index')); ?>"><?php echo e(__('Cancel')); ?></a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\chirper\resources\views/chirps/edit.blade.php ENDPATH**/ ?>