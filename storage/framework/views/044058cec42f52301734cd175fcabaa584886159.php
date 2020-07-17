<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('shipping'), 'files' => true]); ?>

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
            <?php echo Form::label('user_id', trans('admin.owner_id')); ?>

            <?php echo Form::select('user_id', App\User::where('level',
            'company')->pluck('name', 'id'), old('user_id'),
            ['class' => 'form-control', 'placeholder' => '.....'],
            ); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('latitude',
            trans('admin.latitude')); ?>

            <?php echo Form::text('latitude', old('lat'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('longitude',
            trans('admin.longitude')); ?>

            <?php echo Form::text('longitude', old('lng'),
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('icon', trans('admin.icon')); ?>

            <?php echo Form::file('icon', ['class'
            =>
            'form-control']); ?>

        </div>

        <?php echo Form::submit(trans('admin.create_shipping'), ['class' =>
        'btn
        btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/shippings/create.blade.php ENDPATH**/ ?>