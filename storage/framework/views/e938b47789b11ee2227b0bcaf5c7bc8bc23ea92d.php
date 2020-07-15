<?php $__env->startSection('content'); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function(){
    <?php if(old('country_id')): ?>
    $.ajax({
            url: '<?php echo e(aurl('states/create')); ?>',
            type: 'get',
            dataType: 'html',
            data: { country_id:'<?php echo e(old('country_id')); ?>', select:'<?php echo e(old('city_id')); ?>' },
            success: function(data) {
                $('.city').html(data);
            }
            })
    <?php endif; ?>
    $(document).on('change', '.country_id', function () {
        var country = $('.country_id option:selected').val();
        console.log(country);
        if(country > 0)
        {
            $.ajax({
                url: '<?php echo e(aurl('states/create')); ?>',
                type: 'get',
                dataType: 'html',
                data: {country_id:country, select:''},
                success: function(data) {
                    $('.city').html(data);
                }
            })
        }
        else
        {
            $('.city').html('');

        }
    })
})
</script>

<?php $__env->stopPush(); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('states')]); ?>

        <div class="form-group">
            <?php echo Form::label('state_name_ar',
            trans('admin.state_name_ar')); ?>

            <?php echo Form::text('state_name_ar', old('state_name_ar'),
            ['class' => 'form-control'] ); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('state_name_en',
            trans('admin.state_name_en')); ?>

            <?php echo Form::text('state_name_en', old('state_name_en'),
            ['class' => 'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('country_id', trans('admin.country')); ?>

            <?php echo Form::select('country_id',App\Model\Country::pluck('country_name_'.session('lang'),'id')
            ,old('country_id'),
            ['class' => 'form-control country_id', 'placeholder' =>
            '.....']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('city_id', trans('admin.city')); ?>

            <span class="city"></span>
        </div>
        <?php echo Form::submit(trans('admin.create_state'), ['class' => 'btn
        btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/states/create.blade.php ENDPATH**/ ?>