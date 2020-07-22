<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('countries'), 'files' => true]); ?>

        <div class="form-group">
            <?php echo Form::label('country_name_ar',
            trans('admin.country_name_ar')); ?>

            <?php echo Form::text('country_name_ar', old('country_name_ar'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('country_name_en',
            trans('admin.country_name_en')); ?>

            <?php echo Form::text('country_name_en', old('country_name_en'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('mob',
            trans('admin.mob')); ?>

            <?php echo Form::text('mob', old('mob'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('code',
            trans('admin.country_code')); ?>

            <?php echo Form::text('code', old('country_code'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('currency',
            trans('admin.country_currency')); ?>

            <?php echo Form::text('currency', old('country_currency'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('logo', trans('admin.country_flag')); ?>

            <?php echo Form::file('logo', ['class'
            =>
            'form-control']); ?>

        </div>

        <?php echo Form::submit(trans('admin.create_country'), ['class' => 'btn
        btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/countries/create.blade.php ENDPATH**/ ?>