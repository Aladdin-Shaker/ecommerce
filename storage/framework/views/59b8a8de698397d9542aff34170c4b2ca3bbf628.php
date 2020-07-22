<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    var x = 1;
    $(document).on('click', '.add_input', function() {
        var max_inputs = 10;
        if(x < max_inputs) {
            $('.div_inputs').append('<div class="row">'+
               ' <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">'+
                    '<div class="form-group">'+
                        '<?php echo Form::label('input_key', trans('admin.input_key')); ?>'+
                        '<?php echo Form::text('input_key[]','',['class' =>'form-control']); ?>'+
                    '</div>'+
               ' </div>'+
                '<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">'+
                   ' <div class="form-group">'+
                        '<?php echo Form::label('input_value',trans('admin.input_value')); ?>'+
                        '<?php echo Form::text('input_value[]','',['class'=>'form-control']); ?>'+
                   ' </div>'+
               ' </div>'+
                '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-auto">'+
                    '<div class="form-group">'+
                        '<a href="#" class="remove_input btn btn-danger"><i class="fas fa-trash"></i></a>'+
                    '</div>'+
                '</div>'+
            '</div>');
            x++;
        }
        return false;
    });

    $(document).on('click', '.remove_input', function() {
        $(this).parent('div').parent('div').parent('div').remove();
        x--;
        return false;
    })
</script>
<?php $__env->stopPush(); ?>

<div class="tab-pane fade mt-3" id="product_more_info" role="tabpanel"
    aria-labelledby="product_more_info" id="other_data">
    <h4><?php echo e(trans('admin.product_more_info')); ?></h4>
    <a href="#" class="add_input btn btn-primary m-3"><i
            class="fas fa-plus"></i></a>
    <div class="div_inputs mt-3 ">
        <?php $__currentLoopData = $product->other_data()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="form-group">
                    <?php echo Form::label('input_key',

                    trans('admin.input_key')); ?>

                    <?php echo Form::text('input_key[]',
                    $other->data_key,['class'
                    =>
                    'form-control']); ?>

                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="form-group">
                    <?php echo Form::label('input_value',
                    trans('admin.input_value')); ?>

                    <?php echo Form::text('input_value[]',
                    $other->data_value,['class'
                    =>
                    'form-control']); ?>

                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-auto">
                <div class="form-group">
                    <a href="#" class="remove_input btn btn-danger"><i
                            class="fas fa-trash"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/products/tabs/product_more_info.blade.php ENDPATH**/ ?>