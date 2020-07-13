<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('users')]); ?>

        <div class="form-group">
            <?php echo Form::label('name', trans('admin.name')); ?>

            <?php echo Form::text('name', old('name'), ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('email' , trans('admin.email')); ?>

            <?php echo Form::email('email', old('email'), ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('password', trans('admin.password')); ?>

            <?php echo Form::password('password', ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('level', trans('admin.level')); ?>

            <?php echo Form::select('level',
            ['user' => trans('admin.user'),
            'vendor' => trans('admin.vendor'),
            'company' => trans('admin.company')],
            old('level'),
            ['class' => 'form-control', 'placeholder' => '.....'],
            ); ?>

        </div>
        <?php echo Form::submit(trans('admin.create_user'), ['class' => 'btn
        btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/users/create.blade.php ENDPATH**/ ?>