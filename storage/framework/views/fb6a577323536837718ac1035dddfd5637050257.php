<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('settings'), 'files' => true]); ?>


        <div class="form-group">
            <?php echo Form::label('sitename_ar', trans('admin.sitename_ar')); ?>

            <?php echo Form::text('sitename_ar', setting()->sitename_ar, ['class'
            =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('sitename_en', trans('admin.sitename_en')); ?>

            <?php echo Form::text('sitename_en', setting()->sitename_en, ['class'
            =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('email', trans('admin.email')); ?>

            <?php echo Form::email('email', setting()->email, ['class'
            =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('logo', trans('admin.logo')); ?>

            <?php echo Form::file('logo', setting()->logo, ['class'
            =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('icon', trans('admin.icon')); ?>

            <?php echo Form::file('icon', setting()->icon, ['class'
            =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('description', trans('admin.description')); ?>

            <?php echo Form::textarea('description', setting()->description,
            ['class'
            =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('keywords', trans('admin.keywords')); ?>

            <?php echo Form::textarea('keywords', setting()->keywords, ['class'
            =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('main_lang', trans('admin.main_lang')); ?>

            <?php echo Form::select('main_lang',['ar' => trans('admin.ar'), 'en'
            => trans('admin.en')] ,setting()->main_lang, ['class'
            =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('status', trans('admin.status')); ?>

            <?php echo Form::select('status',['open' => trans('admin.open'),
            'close' => trans('admin.close')], setting()->status, ['class'
            =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('message_maintenance',
            trans('admin.message_maintenance')); ?>

            <?php echo Form::textarea('message_maintenance',
            setting()->message_maintenance, ['class'
            =>
            'form-control']); ?>

        </div>
        <?php echo Form::submit(trans('admin.save'), ['class' => 'btn
        btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/settings.blade.php ENDPATH**/ ?>