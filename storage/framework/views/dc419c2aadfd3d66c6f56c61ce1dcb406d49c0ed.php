

<?php $__env->startSection('content'); ?>
    <h2>Add Contact</h2>
    <form action="<?php echo e(route('contacts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="phone" placeholder="Phone" required><br>
        <button type="submit">Save</button>
    </form>
    <a href="<?php echo e(route('contacts.index')); ?>">Back</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\contact-manager\resources\views/contacts/create.blade.php ENDPATH**/ ?>