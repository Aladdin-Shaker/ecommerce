<div class="tab-pane fade active show" id="product_info" role="tabpanel"
    aria-labelledby="product_info">
    <h4 class="mt-3 mb-3"><?php echo e(trans('admin.product_info')); ?></h4>

    <div class="form-group">
        <?php echo Form::label('title',
        trans('admin.title')); ?>

        <?php echo Form::text('title', $product->title,
        ['class' => 'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('content',
        trans('admin.content')); ?>

        <?php echo Form::text('content', $product->content,
        ['class' => 'form-control']); ?>

    </div>

</div>
<?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/products/tabs/product_info.blade.php ENDPATH**/ ?>