

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('contacts.create')); ?>">+ Add New Contact</a>
    <ul>
        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <strong><?php echo e($contact->name); ?></strong> - <?php echo e($contact->email); ?> - <?php echo e($contact->phone); ?>

                <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>">Edit</a>
                <form action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" onclick="return confirm('Delete this contact?')">Delete</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\contact-manager\resources\views/contacts/index.blade.php ENDPATH**/ ?>