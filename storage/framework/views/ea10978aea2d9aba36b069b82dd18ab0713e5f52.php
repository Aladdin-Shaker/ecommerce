<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('weights/'. $weight->id), 'method' =>
        'put']); ?>


        <div class="form-group">
            <?php echo Form::label('name_ar',
            trans('admin.name_ar')); ?>

            <?php echo Form::text('name_ar', $weight->name_ar,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('name_en',
            trans('admin.name_en')); ?>

            <?php echo Form::text('name_en',$weight->name_en,
            ['class' =>
            'form-control']); ?>

        </div>
        <?php echo Form::submit(trans('admin.save'), ['class' => 'btn
        btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/weights/edit.blade.php ENDPATH**/ ?>