<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('users/'. $user->id), 'method' =>
        'put']); ?>

        <div class="form-group">
            <?php echo Form::label('name', trans('admin.name')); ?>

            <?php echo Form::text('name', $user->name, ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('email' , trans('admin.email')); ?>

            <?php echo Form::email('email', $user->email, ['class' =>
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
            $user->level,
            ['class' => 'form-control', 'placeholder' => '.....'],
            ); ?>

        </div>

        <?php echo Form::submit(trans('admin.save'), ['class' => 'btn
        btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/users/edit.blade.php ENDPATH**/ ?>