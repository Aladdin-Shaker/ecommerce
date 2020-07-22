<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(function() {

    var dataSelected = [
        <?php $__currentLoopData = App\Model\Country::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        {
            "text" : "<?php echo e($country->{'country_name_'.lang()}); ?>",
            "children": [
                <?php $__currentLoopData = $country->malls()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                {
                    "id": "<?php echo e($mall->id); ?>",
                    "text": "<?php echo e($mall->{'name_' . lang()}); ?>",
                    "selected": '<?php echo e(checkMall($mall->id, $product->id)); ?>',
                },
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
        },
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    ];

     $('.malls_select2').select2({
        data: dataSelected,
        width: '100%',
        theme: "classic",
        placeholder: '<?php echo e(trans('admin.select_mall_or_more')); ?>',
     });
    });
</script>
<?php $__env->stopPush(); ?>


<div class="tab-pane fade" id="product_shipping_info" role="tabpanel"
    aria-labelledby="product_shipping_info">
    <h4><?php echo e(trans('admin.product_shipping_info')); ?></h4>

    <div class="weight_size">
        <center>
            <h5><?php echo e(trans('admin.please_select_department')); ?></h5>
        </center>
    </div>

    <div class="row color_trade_manu_data d-none">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
                <?php echo Form::label('color_id', trans('admin.color_id')); ?>

                <?php echo Form::select('color_id',\App\Model\Color::pluck('name_'.
                lang(), 'id'),
                $product->color_id, ['class' => 'form-control',
                'placeholder' => trans('admin.color_without')]); ?>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
                <?php echo Form::label('trade_id', trans('admin.trade_id')); ?>

                <?php echo Form::select('trade_id',\App\Model\TradeMarks::pluck('name_'.
                lang(), 'id'),
                $product->trade_id, ['class' => 'form-control',
                'placeholder' => trans('admin.select_trade')]); ?>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
                <?php echo Form::label('manu_id', trans('admin.manu_id')); ?>

                <?php echo Form::select('manu_id',\App\Model\Manufacture::pluck('name_'.
                lang(), 'id'),
                $product->manu_id, ['class' => 'form-control',
                'placeholder' => trans('admin.select_manu')]); ?>

            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <?php echo Form::label('malls', trans('admin.malls')); ?>

                <select class="malls_select2" name="mall[]"
                    multiple="multiple"> </select>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/products/tabs/product_shipping_info.blade.php ENDPATH**/ ?>