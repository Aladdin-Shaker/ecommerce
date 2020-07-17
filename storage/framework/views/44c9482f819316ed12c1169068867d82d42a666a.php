<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('malls/'. $mall->id),
        'method' => 'put', 'files' => true]); ?>


        <div class="form-group">
            <?php echo Form::label('name_ar',
            trans('admin.name_ar')); ?>

            <?php echo Form::text('name_ar', $mall->name_ar,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('name_en',
            trans('admin.name_en')); ?>

            <?php echo Form::text('name_en', $mall->name_en,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('email',
            trans('admin.email')); ?>

            <?php echo Form::email('email', $mall->email,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('mobile',
            trans('admin.mobile')); ?>

            <?php echo Form::number('mobile', $mall->mobile,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('facebook',
            trans('admin.facebook')); ?>

            <?php echo Form::text('facebook', $mall->facebook,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('twitter',
            trans('admin.twitter')); ?>

            <?php echo Form::text('twitter', $mall->twitter,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('website',
            trans('admin.website')); ?>

            <?php echo Form::text('website', $mall->website,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('contact_name',
            trans('admin.contact_name')); ?>

            <?php echo Form::text('contact_name', $mall->contact_name,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('country_id', trans('admin.country')); ?>

            <?php echo Form::select('country_id',App\Model\Country::pluck('country_name_'.session('lang'),'id')
            ,$mall->country_id,
            ['class' => 'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('address',
            trans('admin.address')); ?>

            <?php echo Form::text('address', $mall->address,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('latitude',
            trans('admin.latitude')); ?>

            <?php echo Form::text('latitude', $mall->latitude,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('longitude',
            trans('admin.longitude')); ?>

            <?php echo Form::text('longitude', $mall->longitude,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('icon', trans('admin.icon')); ?>

            <?php echo Form::file('icon', ['class'
            =>
            'form-control']); ?>

            <?php if(!empty($mall->icon)): ?>
            <img src="<?php echo e(Storage::url($mall->icon)); ?>" height="100px"
                width="100px" />
            <?php endif; ?>
        </div>


        <?php echo Form::submit(trans('admin.save'), ['class' => 'btn
        btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/malls/edit.blade.php ENDPATH**/ ?>