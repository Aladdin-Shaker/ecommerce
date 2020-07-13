<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo $dataTable->table([
        'class' => 'table table-bordered table-striped'
        ]); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->startPush('scripts'); ?>
<?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/my_project/Ecommerce/Ecommerce/resources/views/admin/admins/index.blade.php ENDPATH**/ ?>