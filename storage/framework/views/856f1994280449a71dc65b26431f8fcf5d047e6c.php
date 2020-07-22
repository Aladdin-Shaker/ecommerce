<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('products')]); ?>


        
        <div class="mb-3">
            <a href="#" class="btn btn-primary"><?php echo e(trans('admin.save')); ?><i
                    class="far fa-save m-1"></i></a>
            <a href="#"
                class="btn btn-success"><?php echo e(trans('admin.save_continue')); ?><i
                    class="far fa-share-square  m-1"></i></a>
            <a href="#" class="btn btn-info"><?php echo e(trans('admin.copy')); ?><i
                    class="far fa-copy  m-1"></i></a>
            <a href="#"
                class="btn btn-danger"><?php echo e(trans('admin.delete')); ?><i
                    class="fas fa-trash  m-1"></i></a>
        </div>
        <hr>

        
        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
            <?php echo $__env->make('admin.products.tabs.product_info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.products.tabs.department', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.products.tabs.product_setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.products.tabs.product_media', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.products.tabs.product_size_weight', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.products.tabs.product_more_info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </ul>

        
        <div class="tab-content mb-3`" id="myTabContent">
            <div class="tab-pane fade show active" id="product_info"
                role="tabpanel" aria-labelledby="home-tab">
                <h6><?php echo e(trans('admin.product_info')); ?></h6>
            </div>
            <div class="tab-pane fade show" id="product_info"
                role="tabpanel" aria-labelledby="home-tab">
                <h6><?php echo e(trans('admin.department')); ?></h6>
            </div>
            <div class="tab-pane fade" id="product_setting" role="tabpanel"
                aria-labelledby="profile-tab">
                <h6><?php echo e(trans('admin.product_setting')); ?></h6>
            </div>
            <div class="tab-pane fade" id="product_media" role="tabpanel"
                aria-labelledby="contact-tab">
                <h6><?php echo e(trans('admin.product_media')); ?></h6>
            </div>
            <div class="tab-pane fade" id="product_size_weight"
                role="tabpanel" aria-labelledby="contact-tab">
                <h6><?php echo e(trans('admin.product_size_weight')); ?></h6>
            </div>
            <div class="tab-pane fade" id="product_more_info"
                role="tabpanel" aria-labelledby="contact-tab">
                <h6><?php echo e(trans('admin.product_more_info')); ?></h6>
            </div>
        </div>


        
        <div class="mb-3 mt-3">
            <a href="#" class="btn btn-primary"><?php echo e(trans('admin.save')); ?><i
                    class="far fa-save m-1"></i></a>
            <a href="#"
                class="btn btn-success"><?php echo e(trans('admin.save_continue')); ?><i
                    class="far fa-share-square  m-1"></i></a>
            <a href="#" class="btn btn-info"><?php echo e(trans('admin.copy')); ?><i
                    class="far fa-copy  m-1"></i></a>
            <a href="#"
                class="btn btn-danger"><?php echo e(trans('admin.delete')); ?><i
                    class="fas fa-trash  m-1"></i></a>
        </div>

        <hr>


        <div class="form-group">
            <?php echo Form::label('name_ar',
            trans('admin.name_ar')); ?>

            <?php echo Form::text('name_ar', old('name_ar'),
            ['class' =>
            'form-control']); ?>

        </div>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/products/create.blade.php ENDPATH**/ ?>