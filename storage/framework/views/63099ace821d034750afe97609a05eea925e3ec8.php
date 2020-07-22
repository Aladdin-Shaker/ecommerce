<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('manufactures'), 'files' => true]); ?>

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
            <?php echo Form::label('email',
            trans('admin.email')); ?>

            <?php echo Form::email('email', old('email'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('mobile',
            trans('admin.mobile')); ?>

            <?php echo Form::text('mobile', old('mobile'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('facebook',
            trans('admin.facebook')); ?>

            <?php echo Form::text('facebook', old('facebook'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('twitter',
            trans('admin.twitter')); ?>

            <?php echo Form::text('twitter', old('twitter'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('website',
            trans('admin.website')); ?>

            <?php echo Form::text('website', old('website'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('contact_name',
            trans('admin.contact_name')); ?>

            <?php echo Form::text('contact_name', old('contact_name'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('address',
            trans('admin.address')); ?>

            <?php echo Form::text('address', old('address'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('lat',
            trans('admin.latitude')); ?>

            <?php echo Form::text('lat', old('lat'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('lng',
            trans('admin.longitude')); ?>

            <?php echo Form::text('lng', old('lng'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('icon', trans('admin.icon')); ?>

            <?php echo Form::file('icon', ['class'
            =>
            'form-control']); ?>

        </div>

        <?php echo Form::submit(trans('admin.create_manufacture'), ['class' =>
        'btn
        btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/manufactures/create.blade.php ENDPATH**/ ?>