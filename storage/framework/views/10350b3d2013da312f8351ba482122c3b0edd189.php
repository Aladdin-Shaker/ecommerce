<?php if(count($errors->all()) > 0): ?>
<div class="alert alert-danger">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>

<?php if(session()->has('success')): ?>
<div class="alert alert-success">
    <h5><?php echo e(session('success')); ?></h5>
</div>
<?php endif; ?>

<?php if(session()->has('danger')): ?>
<div class="alert alert-danger">
    <h5><?php echo e(session('danger')); ?></h5>
</div>
<?php endif; ?>
<?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/layouts/message.blade.php ENDPATH**/ ?>