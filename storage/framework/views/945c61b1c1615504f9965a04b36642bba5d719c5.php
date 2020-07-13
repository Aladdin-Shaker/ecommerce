<?php $__env->startComponent('mail::message'); ?>
# Reset Admin Account

Welcome <?php echo e($data['data']->name); ?> <br>
The body of your message.

<?php $__env->startComponent('mail::button', ['url' => aurl('reset/password/'.
$data['token'])]); ?>
Click here to reset your password
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

or <br />

copy this link <a
    href="<?php echo e(aurl('reset/password/'.$data['token'])); ?>"><?php echo e(aurl('reset/password'.$data['token'])); ?></a>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/sniper/Desktop/my_project/Ecommerce/Ecommerce/resources/views/admin/emails/reset_admin_password.blade.php ENDPATH**/ ?>