<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('colors')]); ?>

        <div class="form-group">
            <?php echo Form::label('name_ar',
            trans('admin.name_ar')); ?>

            <?php echo Form::text('name_ar', old('name_ar'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('name_en',
            trans('admin.name_en')); ?>

            <?php echo Form::text('name_en', old('name_en'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('color',
            trans('admin.color')); ?>

            <?php echo Form::color('color', old('color'),
            ['class' =>
            'form-control', 'style' => "height: 40px;"]); ?>

        </div>
        <?php echo Form::submit(trans('admin.create_color'), ['class' => 'btn
        btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/colors/create.blade.php ENDPATH**/ ?>