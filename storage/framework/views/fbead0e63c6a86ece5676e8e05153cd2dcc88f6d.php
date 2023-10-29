<?php $__env->startSection('content'); ?>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="<?php echo e(route('chirps.store')); ?>">
            <?php echo csrf_field(); ?>
            <textarea
                name="message"
                placeholder="<?php echo e(('What\'s on your mind?')); ?>"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm p-2 mb-2"
            ><?php echo e(old('message')); ?></textarea>

            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-red-500 text-sm mt-2"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <button type="submit" class="mt-4 bg-indigo-600 bg-black text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700">
                Chirps
            </button>
        </form>
    </div>

    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        <?php $__currentLoopData = $chirps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chirp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="p-6 flex space-x-2">
                <svg style="height: 25px" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-800"><?php echo e($chirp->user->name); ?></span>
                            <small class="ml-2 text-sm text-gray-600"><?php echo e($chirp->created_at->format('j M Y, g:i a')); ?></small>
                            <?php if (! ($chirp->created_at->eq($chirp->updated_at))): ?>
                                <small class="text-sm text-gray-600"> &middot; <?php echo e(__('edited')); ?></small>
                            <?php endif; ?>
                        </div>
                        <?php if($chirp->user->is(auth()->user())): ?>
                            <a href="<?php echo e(route('chirps.edit', $chirp)); ?>">
                                Edit
                            </a>
                            <form method="POST" action="<?php echo e(route('chirps.destroy', $chirp)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <a href="<?php echo e(route('chirps.destroy', $chirp)); ?>" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <?php echo e(__('Delete')); ?>

                                </a>
                            </form>
                        <?php endif; ?>
                    </div>
                    <p class="mt-4 text-lg text-gray-900"><?php echo e($chirp->message); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\chirper\resources\views/chirps/index.blade.php ENDPATH**/ ?>