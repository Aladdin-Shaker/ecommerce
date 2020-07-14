<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['id' => 'form_data', 'url' =>
        aurl('cities/destroy/all'), 'method' => 'delete']); ?>

        <?php echo $dataTable->table([
        'class' => 'table table-bordered table-striped'
        ], true); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>



<!-- The Modal -->
<div class="modal" id="deleteAll_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><?php echo e(trans('admin.delete')); ?></h4>
                <button type="button" class="close"
                    data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="empty_records d-none">
                    <h6> <?php echo e(trans('admin.plase_check_some_records')); ?>

                    </h6>
                </div>
                <div class="not_empty_records d-none">
                    <h6> <?php echo e(trans('admin.ask_delete_item')); ?> <span
                            class="record_count">5</span> </h6>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="empty_records d-none">
                    <button type="button" class="btn btn-default "
                        data-dismiss="modal"><?php echo e(trans('admin.close')); ?></button>
                </div>
                <div class="not_empty_records d-none">
                    <button type="button" class="btn btn-default "
                        data-dismiss="modal"><?php echo e(trans('admin.no')); ?></button>
                    <input type="submit" name="del_all"
                        value="<?php echo e(trans('admin.yes')); ?>"
                        class="btn btn-danger del_all mr-2">
                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
    delete_all()
</script>
<?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/cities/index.blade.php ENDPATH**/ ?>