<div class="tab-pane fade" id="product_size_weight" role="tabpanel"
    aria-labelledby="product_size_weight">
    <h4><?php echo e(trans('admin.product_size_weight')); ?></h4>

    <div class="weight_size">
        <h5><?php echo e(trans('admin.please_select_department')); ?></h5>
    </div>

    <div class="row d-none">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
                <?php echo Form::label('color_id', trans('admin.color_id')); ?>

                <?php echo Form::select('color_id',\App\Model\Color::pluck('name_'.
                lang(), 'id'),
                $product->color_id, ['class' => 'form-control',
                'placeholder' => trans('admin.color_without')]); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/products/tabs/product_size_weight.blade.php ENDPATH**/ ?>